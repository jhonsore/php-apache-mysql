<?php

header('Content-type: application/json');

  //----------------
  if (isset($_SERVER['HTTP_ORIGIN'])) {
      // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
      // you want to allow, and if so:
      header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
      header('Access-Control-Allow-Credentials: true');
      header('Access-Control-Max-Age: 86400');// cache for 1 day
  }

  // Access-Control headers are received during OPTIONS requests
  if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

      if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
      {
        // may also be using PUT, PATCH, HEAD etc
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
      }

      if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
      {
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
      }

      exit(0);
  }

  $URL_REPLACE = "/my-host-replace";
  $url = $_SERVER[REQUEST_URI];
  $url = str_replace($URL_REPLACE, "", $url);

switch ($url)
{
	case '/login/':
		$return['data'] = array(
			array(
				"id"=>1,
				"n"=>"value 1",
				"i"=>"value 2",
				"t"=>""
			),
			array(
				"n"=>"value 4",
				"i"=>"value 5",
				"t"=>"value 6"
			)
		);

		$return['status'] = true;

		break;

	default:
		$return['status'] = false;
		$return['msg'] = "Error (1001)";
		break;
}

echo json_encode($return);
