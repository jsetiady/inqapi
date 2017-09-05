<?php
require 'vendor/autoload.php';


Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('POST /', function() {
  echo "{status : success}";
});


Flight::start();
?>
