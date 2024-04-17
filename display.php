<?php
    /* Depending on input type, display a different page. */
    if (isset($_POST['submit_w']))
    {
        include_once('btn_warehouse.php');
    }
    else if(isset($_POST['submit_m']))
    {
        include_once('btn_material.php');
    }
    else if(isset($_POST['submit_e']))
    {
        include_once('btn_equip.php');
    }
?>