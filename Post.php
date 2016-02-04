<?php

//This php code is intended to grab all the information from the db and populate the fields. It will do this for all available articles.
//Need to create a new table for storing user content  - NEEDS TO BE DONE STILL
 
//mockup Select statement to grab Articles from DB
$result = mysql_query("SELECT * FROM tbl_Articles");
$rowcount = mysql_num_rows($result);

// Get title, text, username, image, time and removable from tbl_Articles,
for ($i = 0; $i < $rowcount; $i++) 
{   
    //Title of the article
    $title = 'SELECT title FROM tbl_Articles WHERE email == $_POST["email]'; 
    //Text Content of the article
    $textContent  = 'SELECT textContent FROM tbl_Articles WHERE email == $_POST["email]'; 
    //Name of the user who created article
    $firstname = 'SELECT firstname FROM tbl_Articles WHERE email == $_POST["email]'; 
    //Optional image for article
    $image = 'SELECT image FROM tbl_Articles WHERE email == $_POST["email]'; 
    //Time the article was created
    $time = 'SELECT time FROM tbl_Articles WHERE email == $_POST["email]'; 
    //Tag used for displaying "Remove Article" for Original Posters articles only. 
    $removable = 'SELECT removable FROM tbl_Articles WHERE email == $_POST["email]';
    
    
    // $Article -> html template
    $Article += 'echo("<div class="well">

            <h4 class="media-heading">' . $title . '</h4>

            <div class="media">             
                <a>
                    <img class="img-responsive" src="' . $image . '" width="100%">
                    <br>
                </a>
                <div class="media-body">               
                    <p class="text-right">' . $firstname . '</p>
                    <p>Random blog post</p>
                    <ul class="list-inline list-unstyled">
                        <li><span><i class="glyphicon glyphicon-calendar"></i>' . $time . '</span></li>
                        <li>|</li>
                        <span><i class="glyphicon glyphicon-comment"></i> Comments </span>
                        <li>|</li>
                        <li>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </li>
                        <li>|</li>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>")';
    
    
}
echo($Article);
?>

