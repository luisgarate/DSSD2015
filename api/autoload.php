<?php

spl_autoload_register(function($name){
  $namespaceParts = explode("\\", $name);
  if($namespaceParts[0]=="API"){
    //Es una clase de nuestra aplicación
    $classPath = str_replace(array("API\\","\\"), array("","/"), $name);
    require_once($classPath.".php");
  }
});
