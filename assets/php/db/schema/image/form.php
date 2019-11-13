<?php
  require_once('../section/get.php');
?>

<form action="post.php" method="post" enctype="multipart/form-data">
  <input type="file" name="src" required oninput=""/>
  <input type="text" name="title" value="" required/>
  <input type="text" name="subtitle" value="" required/>
  <?=$sectionIntoSelectTag?>
  <textarea name="description" cols="30" rows="10"></textarea>
  <input type="submit" value="Enviar">
</form>
<script>

</script>