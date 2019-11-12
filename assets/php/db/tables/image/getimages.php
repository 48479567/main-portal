<?php 
require_once('../../connection.php');
require_once('../queries/select.php');

$result = selectByTable('image', $conn);
if ($result->num_rows > 0) {
?>
<script>
let images = [];
<?php 
  while($row = $result->fetch_assoc()) {
?>
  images.push('<?=$row['src']?>');
<?php
  }
?>
console.log(images);
</script>
<?php
}

$conn->close();
?>
