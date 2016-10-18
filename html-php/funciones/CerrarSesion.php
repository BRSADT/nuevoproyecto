<?php
session_start();
session_destroy();
session_unset();
header('Location: ../html-php/PHP&HTML/Index-index.php');