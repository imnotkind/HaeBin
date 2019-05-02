<?php

function get_raw_http_request() {

  $request = "{$_SERVER['REQUEST_METHOD']} {$_SERVER['REQUEST_URI']} {$_SERVER['SERVER_PROTOCOL']}\r\n";

  foreach (getallheaders() as $name => $value) {
    $request .= "$name: $value\r\n";
  }

  $request .= "\r\n" . file_get_contents('php://input');

  return $request;
}

$log = json_decode(file_get_contents("./log.json"));

$req = get_raw_http_request();

array_unshift($log,$req);

file_put_contents("./log.json",json_encode($log));

echo "OK!";

?>
