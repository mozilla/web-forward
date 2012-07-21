<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Page Title
    type:  text
  id: 
    label: ID [DON'T CHANGE!]
    type:  text
  main: 
    label: Main Content
    type:  textarea
    size:  large