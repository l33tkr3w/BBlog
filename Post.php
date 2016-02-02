<?php
//This php code is intended to grab all the information from the db and populate the fields. It will do this for all available articles.
//Need to create a new table for storing user content  - NEEDS TO BE DONE STILL
$title = 'blah'; //Title of the article
$textContent = 'blah'; //Text Content of the article
$username = 'blah'; //Name of the user who created article
$image = 'blah'; //Optional image for article
$time = 'blah'; //Time the article was created
$removable = 'blah'; //Tag used for displaying "Remove Article" for Original Posters articles only. 

echo('<div class="well">

            <h4 class="media-heading">' . $title . '</h4>

            <div class="media">             
                <a>
                    <img class="img-responsive" src="' . $image . '" width="100%">
                    <br>
                </a>
                <div class="media-body">               
                    <p class="text-right">' . $username . '</p>
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
        </div>')
?>

