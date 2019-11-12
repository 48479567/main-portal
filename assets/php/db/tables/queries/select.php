<?php 
function select($sql, $conn) {
  $result = $conn->query;
  return $result;
}

function selectByTable($table, $conn) {
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);
  return $result;
}

function selectByTableAndFieldArray($arrayField, $table, $conn) {
 $sql = "SELECT implode(',', $arrayField) FROM $table";
 $result = $conn->query($sql);
 return $result;
}

function selectByTableAndFieldText($arrayText, $table, $conn) {
  $sql = "SELECT $arrayText FROM $table";
  $result = $conn-> query($sql);
  return $result;
}
?>