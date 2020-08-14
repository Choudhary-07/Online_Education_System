<?php
  $obj= mysqli_connect("localhost","root","","admin_panel");
    if (!$obj)
    {
        echo mysqli_connect_error();
        die();
    }


?>