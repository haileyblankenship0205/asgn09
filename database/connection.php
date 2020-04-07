<?php

define("SERVER", "localhost");
define("USER", "wbip");
define("PW", "wbip123");
define("DB", "test");

global $connect;
$connect = mysqli_connect(SERVER, USER, PW, DB);
