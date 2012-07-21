<?php if(!defined('KIRBY')) exit ?>

# portfolio blueprint

title: Portfolio
pages: false
files: false
fields:
  title: 
    label: Page Title
    type:  text
  id: 
    label: ID [DON'T CHANGE!]
    type:  text
  headline1: 
    label: Headline (Current)
    type:  text
  content1: 
    label: Main Content (Current)
    type:  textarea
    size:  medium
  headline2: 
    label: Headline (Alumni)
    type:  text
  content2: 
    label: Main Content (Alumni)
    type:  textarea
    size:  medium