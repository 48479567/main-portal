<?php
  require_once('../section/get.php');

  function getFormForImage($sectionIntoSelectTag, $url, $targetDir,
                           $isSrc, $isTitle, $isSubtitle, $isIdSection, $isDescription) {
    $textForm = '<form action="'.$url.'" method="post" 
                  enctype="multipart/form-data">';

    $textForm .= '<input 
                   type="hidden" 
                   name="targetdir" 
                   value="'.$targetDir.'/"/>';

    if ($isSrc === TRUE) {
      $textForm .= '<input 
                     type="file" 
                     name="src" 
                     maxlength="400" 
                     required />';
    }
    if ($isTitle === TRUE) {
      $textForm .= '<input 
                     type="text" 
                     name="title" 
                     maxlength="100" 
                     required />';
    }
    if ($isSubtitle === TRUE) {
      $textForm .= '<input 
                     type="text" 
                     name="subtitle" 
                     maxlength="150" 
                     required />';
    }
    if ($isIdSection === TRUE) {
      $textForm .= $sectionIntoSelectTag;
    }
    if ($isDescription === TRUE) {
      $textForm .= '<textarea 
                     name="description" 
                     maxlength="300" 
                     cols="30" 
                     rows="10" 
                     required></textarea>';
    }
    $textForm .= '<input type="submit" value="Enviar"></form>';

    return $textForm;
  }

  echo getFormForImage($sectionIntoSelectTag, 'post.php', 'uploads', TRUE, TRUE, TRUE, TRUE, TRUE);

?>

