<?php
session_start();
require "Controller/controller.php";


if (isset($_GET["action"])) {
    if ($_GET["action"] == "hachage") {
        hachage();
    }
} else {
    require "menu_principal.php";
}
