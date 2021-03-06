<?php

use App\Models\{Job,Project};

$jobs = Job::all();

  
$project1 = new Project('project1','descripción1',true,1);
$project2 = new Project('project2','descripción2',true,1);

  $projects = [
    $project1,
    $project2       
  ];
  
  //Recibe parametro desde linea 157 de index
  function printElements($job)
  {
    //if ($job->getVisible() == false) {
    //  return; // sale de la función
   // }
  
    echo '<li class="work-position">';
    echo '<h5>'.$job->title.'</h5>';
    echo '<p>'.$job->description.'</p>';
    //echo '<p>'.$job->getDurationAsString().'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }


  function printElementsProject($job)
  {
   // if ($job->getVisible() == false) {
    //  return; // sale de la función
    //}
  
    echo '<li class="work-position">';
    echo '<h5>'.$job->getTitle().'</h5>';
    echo '<p>'.$job->getDescription().'</p>';
    //echo '<p>'.$job->getDurationAsString().'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';

    echo '<div class="row">';
    echo '<div class="col-3">';
    echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
    echo '</div>';
    echo '<div class="col">';  
    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>';     
    echo '<strong>Technologies used:</strong>';
    echo '<span class="badge badge-secondary">PHP</span>';
    echo '<span class="badge badge-secondary">HTML</span>';
    echo '<span class="badge badge-secondary">CSS</span>';
    echo '</div>';
    echo '</div>';
  }


  