class apache {
   # Notify this when apache needs a reload. This is only needed when
   # sites are added or removed, since a full restart then would be
   # a waste of time. When the module-config changes, a force-reload is
   # needed.
   exec { "reload-apache2":
      command => "/etc/init.d/apache2 reload",
      refreshonly => true,
   }

   exec { "force-reload-apache2":
      command => "/etc/init.d/apache2 force-reload",
      refreshonly => true,
   }

  service { "apache2":
      enable => true,
      ensure => running,
      hasstatus => true,
      hasrestart => true,
      require => Package["apache2"],
   }
}

include apache

class webfwd-base {

    user { 'webfwd':
        ensure => 'present',
        uid => '10000',
        shell => '/bin/bash',
        groups => 'admin',
        managehome => true;
    }

    file {
        '/home/webfwd':
            require => User[webfwd],
            mode  => 775,
            recurse=> false,
            ensure => directory;
    }

    file {
        '/etc/hosts':
            owner => root,
            group => root,
            mode => 644,
            ensure => present,
            source => "/vagrant/puppet/files/hosts";

       '/data':
           owner => root,
           group => root,
           mode  => 755,
           ensure => directory;

       '/data/webfwd':
           owner => webfwd,
           group => webfwd,
           mode  => 755,
           recurse=> false,
           ensure => directory;
    }

    group { 'puppet':
        ensure => 'present',
    }
    
    exec {
        '/usr/bin/make install-web':
            alias => 'install-web',
            cwd => '/vagrant',
            timeout => '3600',
            require => File['/data/webfwd'],
            logoutput => on_failure,
            user => 'webfwd';
    }
}

class webfwd-web inherits webfwd-base {

    package {
        'make':
            ensure => latest
    }

    package {
        'apache2': 
            ensure => latest
    }

    file {
        '/etc/apache2/sites-available/webfwd':
            require => Package[apache2],
            alias => 'webfwd-vhost',
            owner => root,
            group => root,
            mode  => 644,
            ensure => present,
            notify => Service[apache2],
            source => "/vagrant/puppet/files/etc_apache2_sites-available/webfwd";
    }

    exec {
        '/usr/sbin/a2ensite webfwd':
            alias => 'enable-webfwd-vhost',
            require => File['webfwd-vhost'],
            creates => '/etc/apache2/sites-enabled/webfwd';
    }

    exec {
        '/usr/sbin/a2enmod rewrite':
            alias => 'enable-mod-rewrite',
            require => File['webfwd-vhost'],
            creates => '/etc/apache2/mods-enabled/rewrite.load';
    }

    exec {
        '/usr/sbin/a2enmod proxy && /usr/sbin/a2enmod proxy_http':
            alias => 'enable-mod-proxy',
            require => File['webfwd-vhost'],
            creates => '/etc/apache2/mods-enabled/proxy_http.load';
    }
}
