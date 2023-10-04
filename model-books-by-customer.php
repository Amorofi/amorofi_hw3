<?php
function selectCustomerbybooks($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT b.books_id, title, publication_date, author_id, orders_date FROM `books` b join orders o on o.books_id = b.books_id where o.customer_id=?");
        $stmt->bind_param("c", $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
