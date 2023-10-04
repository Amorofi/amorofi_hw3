<?php
require_once("util-db.php");
require_once("model-customer-by-books.php");

$pageTitle = "Customer by books";
include "view-header.php";

$customerID = (isset($_GET['id']) && is_numeric($_GET['id'])) ? (int)$_GET['id'] : 0;

$books = selectCustomerbybooks($customerID);
include "view-customer-by-books.php";
include "view-footer.php";
?>
