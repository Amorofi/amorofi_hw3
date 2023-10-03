<h1>Authors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Nationality</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($authors = $authors->fetch_assoc()) {
      ?>
        <tr>
          <td><?php echo $authors['authors_id']; ?></td>
          <td><?php echo $authors['authors_name']; ?></td>
          <td><?php echo $authors['birth_date']; ?></td>
          <td><?php echo $authors['nationality']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
