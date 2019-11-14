<?php 
require_once('../../connection.php');
require_once('../../queries/select.php');

$result = selectByTable('image', $conn);

if ($result->num_rows > 0) {
?>
<script>
let images = {
  '1': [],
  '2': [],
  '3': [],
  '4': [],
  '5': []
};
<?php 
  while($row = $result->fetch_assoc()) {
?>
  images['<?=$row['idsection']?>'].push({
    src: '<?=$row['src']?>',
    idsection: '<?=$row['idsection']?>',
    title: '<?=$row['title']?>',
    subtitle: '<?=$row['subtitle']?>',
    description: '<?=$row['description']?>',
  });
    
<?php
  }
?>
console.log(images);
</script>
<?php
}
$conn->close();
?>

