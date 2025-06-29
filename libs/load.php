<?php
//For Templates Function
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/_templates/$name.php";

    
}
