<?php
  $paragraph = $_POST['paragraph'];
  $censored = $_POST['censored'];

  echo "Il paragrafo originale: $paragraph <br> Lunghezza: " . strlen($paragraph) . "<br>";

  $censored_paragraph = str_replace($censored, "***", $paragraph);

  echo "Il paragrafo censurato: $censored_paragraph <br> Lunghezza: " . strlen($censored_paragraph);
?>
