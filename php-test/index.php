<?php $content = file_get_contents('http://www.feedforall.com/sample.xml');
if( $content !== FALSE ) {
  // add your JS into $content
  echo $content;
} ?>