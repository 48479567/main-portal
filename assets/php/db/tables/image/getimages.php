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
</script>
<?php
}

$conn->close();
?>
<script>console.log(images);</script>