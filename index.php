<?php

/*
  Author : Febri Arga Pratama
*/

include('loopClass.php');


if(@trim($_GET['inc']) !== ''){

  $loop = new Loop();
  $loop->setInc($_GET['inc']);  

}

require('home.view.php');
