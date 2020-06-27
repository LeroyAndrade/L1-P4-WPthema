<?php
  if (comment_form())
    {
    echo "<hr> De reacties op dit bericht: <br>";
    wp_list_comments();
    }
  else{
    echo "Er zijn nog geen berichten <br>";
    }
?>
