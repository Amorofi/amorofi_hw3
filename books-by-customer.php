<?php
require_once("util-db.php");
require_once("model-books-by-customer.php");

$pageTitle = "Books by Customer";
include "view-header.php";
$customer_id = $_GET['id'] ?? null;
$books = selectBooksByCustomer($customer_id);
include "view-books-by-customer.php";
include "view-footer.php";
?>
