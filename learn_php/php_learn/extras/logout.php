<?php

session_start();
session_destroy();

header('Location: /php_learn/13_sessions.php');