<?php
  namespace APP\controller;

  class Util {
    function __construct() {  }
    public function getLocalView() {
      $local = new \ReflectionClass('APP\view\Main');
      return dirname($local->getFileName());
    }
  }

 ?>
