<?php
#We are calling config.php
require_once("config.php");
require_once("controller/index.php");
if(isset($_GET['m'])):
  if(method_exists("modeloControler",$_GET['m'])):
    modeloControler::{$_GET['m']}();
  endif;  
else:
#We are incovanding the method index from the class modeloController in  index.php form controller folder
    modeloControler::index();
endif;
  
#print and check correc calling from config.php
//var_dump(urlsite);
#we are using php v7
//phpinfo();
?>