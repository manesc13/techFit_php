<?php
  session_start();

  // initializing variables
  $dbServerName = "localhost";
  $dbUserName = "root";
  $dbPassword = "tp1E2&Yw";
  $dbName = "techfitlogin";

  // connect to the database
  $db = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

  if (!$db) {
    die("Connection failed: ".mysqli_connect_error());
  }
