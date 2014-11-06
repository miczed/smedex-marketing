<?php

// index.php
// Startseite

include('html_header.php');
include('login_bar_header.php');
include('header_main.php');

?>

<div class="container home-container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
          <h3>Neuste Lektionen</h3>
          <a href="#" class="thumbnail">
            <img src="images/lektionsbild.png" alt="...">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <h3>Preisliste &amp; Funktionen</h3>
          <p>Laden Sie sich die Preisliste und eine Übersicht über unsere Funktionen als PDF herunter.</p>
          <p>
          <a class="btn btn-red btn-icon" href="#" role="button">
          <span class="fa fa-file-pdf-o">
          </span>
          Preisliste EUR
          </a>
          <a class="btn btn-red btn-icon" href="#" role="button">
          <span class="fa fa-file-pdf-o"></span>
          Preisliste CHF
          </a>
          </p>
          
       </div>
        <div class="col-md-5 col-sm-12">
          <form role="form" class="naked-form home-form">
            <h2>Systemvorstellung vereinbaren:</h2>
            <h3>Kostenlos &amp; unverbindlich</h3>
            <div class="form-group">
              <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Organisation">
            </div>
            <div class="form-group">
              <input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="E-Mail">
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Vorname">
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Nachname">
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" id="exampleInputEmail1" placeholder="Telefon">
            </div>
            <button type="submit" class="btn btn-lg btn-icon btn-red "><span class="fa fa-sign-in"></span>Absenden</button>
          	<a href="#" class="pull-right more">mehr erfahren</a>
          </form>
        </div>
    </div>
</div>



<?php

include('footer.php');

?>