<?php
header("Content-Type: application/jSON");

include "config.secret.php";
include "includes/deploy.php";

try {
  $body = file_get_contents("php://input");
  accept_deploy($_SERVER, $body, $CONFIG);
}
catch (Exception $e) {
  show_error($e->getMessage());
}
?>
