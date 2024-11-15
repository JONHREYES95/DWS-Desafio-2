<?php
$con = mysqli_connect("localhost", "root", "0000", "gastosdb");
if (mysqli_connect_errno()) {
  echo "Connection Fail" . mysqli_connect_error();
}
