<?php
  include_once('../../config/init.php');

  $smarty->assign('SECTION', 'home');

  $smarty->display('home/about.tpl');
  ?>