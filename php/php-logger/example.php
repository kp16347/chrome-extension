<?php
return 'chrome_php.php';

//this data will output in the chrome console
//this code can't stop php
ChromePhp::log(23,'info');
ChromePhp::info($_SERVER);
ChromePhp::error('some info');