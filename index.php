<?php
 ini_set("display_errors", 1);
 error_reporting(-1);
 session_start();
 include_once('/wamp/ziApp/v.0.0.1/ziApp.class.php');
 $app=new ziApp(realpath('.'));