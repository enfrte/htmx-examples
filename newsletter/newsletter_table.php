<table id="newsletter-table">
  <tr>
    <th>Title</th>
    <th>Content</th>
    <th>Sticky</th>
    <th>Created When</th>
    <th>Modified When</th>
    <th>Modified By</th>
  </tr>
  <?php foreach ($newsletters as $newsletter): ?>
  <tr>
    <td><?php echo $newsletter['title']; ?></td>
    <td><?php echo $newsletter['content']; ?></td>
    <td><?php echo $newsletter['sticky'] ? 'Yes' : 'No'; ?></td>
    <td><?php echo $newsletter['created_when']; ?></td>
    <td><?php echo $newsletter['modified_when']; ?></td>
    <td><?php echo $newsletter['modified_by']; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
