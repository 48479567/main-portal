<?php
require_once('../../connection.php');
require_once('../../queries/select.php');

$getAllSections = selectByTable('section', $conn);

function getSectionsIntoSelectTag($getAllSections) {
  $content = '<select name="idsection">';

  while ($row = $getAllSections->fetch_assoc()) {
    $content .='<option value="'.$row['id'].'">'.$row['name'].'</option>';
  }
  $content .= '</select>';
  return $content;
}

$sectionIntoSelectTag = getSectionsIntoSelectTag($getAllSections);

?>