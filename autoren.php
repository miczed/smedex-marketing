<?php

// autoren.php
// Unterseite "Autoren"

include('html_header.php');
include('login_bar_header.php');
include('header_sub.php');

?>
<div class="jumbotron breadcrumbs">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index.php">Start</a></li>
      <li><a href="#">Unternehmen</a></li>
      <li class="active">Autoren</li>
    </ol>
  </div>
</div>
<div class="container sub-container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h1>Autoren</h1>
          <h2 >Unsere Autoren stellen sich vor.</h2>
        </div>
        <div class="col-md-5 col-sm-4">
          <div class="thumbnail team">
              <img src="images/team/michael.jpg" alt="...">
              <div class="caption">
                <h3>Michael Blatter </h3>
                <p>CEO</p>
                <p>VR Präsident</p>
                <p>Gründer</p>
              </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-4">
          <div class="thumbnail team">
              <img src="images/team/mathias.jpg" alt="...">
              <div class="caption">
                <h3>Mathias Duschl </h3>
                <p>CMO</p>
                <p>VR Vizepräsident</p>
                <p>Gründer</p>
              </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <h2 class="red">Support</h2>
        </div>
        <div class="col-md-5 col-sm-4">
          <div class="thumbnail team">
              <img src="images/team/daniel_grein.png" alt="...">
              <div class="caption">
                <h3>Daniel Grein </h3>
                <p>Support</p>
                <p>Instructional Design</p>
              </div>
          </div>
        </div>
      </div>
</div>


<?php

include('footer.php');

?>