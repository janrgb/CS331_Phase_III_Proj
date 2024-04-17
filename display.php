<?php
    /* Depending on input type, display a different page. */
    if (isset($_POST['btn_warehouse']))
    {
        include_once('btn_warehouse.php');
    }
    else if(isset($_POST['btn_material']))
    {
        include_once('btn_material.php');
    }
    else if(isset($_POST['btn_equip']))
    {
        include_once('btn_equip.php');
    }

?>