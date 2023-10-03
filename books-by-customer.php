<?php
require_once("util-db.php");
require_once("model-books-by-customer.php");

$pageTitle = "Books by Customer";
include "view-header.php";

$customerID = (isset($_GET['id']) && is_numeric($_GET['id'])) ? (int)$_GET['id'] : 0;

$books = selectBooksByCustomer($customerID);
include "view-books-by-customer.php";
include "view-footer.php";
?>
