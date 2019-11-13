<?php 
function select($sql, $conn) {
  $result = $conn->query($sql);
  return $result;
}

function selectByTable($table, $conn) {
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);
  return $result;
}

function selectByTableAndFieldArray($arrayFields, $table, $conn) {
 $sql = "SELECT implode(',', $arrayFields) FROM $table";
 $result = $conn->query($sql);
 return $result;
}

function selectByTableAndFieldText($arrayText, $table, $conn) {
  $sql = "SELECT $arrayText FROM $table";
  $result = $conn-> query($sql);
  return $result;
}
?>