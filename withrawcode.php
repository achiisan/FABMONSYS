<?php

if( !isset($_SESSION['withraw_code']) || (time() - $_SESSION['withraw_code']) > 600 ) {
  $_SESSION['withraw_code'] = rand(); 
}
echo '<h1> The code is:'.$_SESSION['withraw_code'];


?>