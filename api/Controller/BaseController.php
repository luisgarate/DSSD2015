<?php
namespace API\Controller;

class BaseController{

  protected function getRequest($method){
    switch($method){
      case "POST":{
        return $_POST;
      } break;
      case "GET":{
        return $_GET;
      } break;
    }
  }

  protected function getJSONResponse($array){
    echo json_encode($array);
    return true;
  }
}
