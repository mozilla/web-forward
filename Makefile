PREFIX=/data/webfwd

install-web:
	# create base directories
	mkdir -p $(PREFIX)/htdocs
	# copy to install directory
	rsync -a site/ $(PREFIX)/htdocs