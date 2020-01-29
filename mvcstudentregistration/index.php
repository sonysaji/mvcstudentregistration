	<!------------------navigate to index page----------------------->

<?php
include('controller/mycontroller.php');
$obj=new mycontroller();
$obj->loadfirst();
?>