<?php
require "function.php";

session_destroy();
session_unset();
session_regenerate_id();

header("Location: home.php");
die;