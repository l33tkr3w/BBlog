<?php

$sql_selectEdit = "SELECT email, title, textContent, image, removable, user_ID "
        . " FROM tbl_Articles "
        . " ORDER BY title";

$result_edit = $pdo->query($sql_selectEdit);

while ($row = $result_edit->fetch()) {
    $Article += 'echo("<div class="well">

            <h4 class="media-heading">' .  $row['title'] . '</h4>

            <div class="media">             
                <a>
                    <img class="img-responsive" src="' .  $row['image'] . '" width="100%">
                    <br>
                </a>
                <div class="media-body">               
                    <p class="text-right">' .  $row['email'] . '</p>
                    <p>Random blog post</p>                  
                </div>
            </div>
        </div>")';
      
}
echo($Article);

?>
