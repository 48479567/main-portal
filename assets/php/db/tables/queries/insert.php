<?php 
function insertInto($sql, $conn) {
  $result = $conn->query($sql);
  return $result;
}

function insertIntoByTableAndTexts(
  $textFields, $textValues,
  $table, $conn
) {
  $sql = "INSERT INTO $table ($textFields) VALUES ($textValues)";
  $result = $conn->query($sql);
  return $result;
}

?>