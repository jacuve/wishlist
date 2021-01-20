<?php
require_once("includes/WishDB.php");
WishDB::getInstance()->delete_wish ($_POST["wishID"]);
header('Location: editWishList.php' );