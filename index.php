<?php

ob_start();
session_start();
require_once "config/app.php";
require_once "public/index.php";
ob_end_flush();