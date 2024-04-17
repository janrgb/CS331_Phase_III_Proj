<?php
    /* Depending on input type, display a different page. */
    if (isset($_POST['submit_w']))
    {
        header("Location:btn_warehouse.php");
        // include_once('btn_warehouse.php');
    }
    else if(isset($_POST['submit_m']))
    {
        header("Location:btn_material.php");
        // include_once('btn_material.php');
    }
    else if(isset($_POST['submit_e']))
    {
        header("Location:btn_equip.php");
        // include_once('btn_equip.php');
    }
?>