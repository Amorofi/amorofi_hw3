<h1>Books</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Publication date</th>
        <th>Author ID</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($books = $books->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $books['books_id']; ?></td>
          <td><?php echo $books['title']; ?></td>
          <td><?php echo $books['publication_date']; ?></td>
          <td><?php echo $books['author_id']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
