<h1>Customer by books</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Customers </th>
        <th>Emails</th>
        <th>Phone Number</th>

      </tr>
    </thead>
    <tbody>
      <?php
      while ($book = $books->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $book['books_id']; ?></td>
          <td><?php echo $book['title']; ?></td>
          <td><?php echo $book['publication_date']; ?></td>
          <td><?php echo $book['author_id']; ?></td>
          <td><?php echo $book['orders_date']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
