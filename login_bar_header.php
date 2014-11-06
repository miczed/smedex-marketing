<?php 

//login_bar_header.php
// Loginbalken für Kunden

?>

<nav class="userbar navbar navbar-inverse navbar-fixed-top hidden-xs" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <p class="navbar-text hidden-sm">Kunden-Login:</p>
          <form class="navbar-form navbar-left" role="form">
            <div class="form-group has-feedback">
              <input type="text" placeholder="Benutzername" class="form-control">
              <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" placeholder="Passwort" class="form-control">
              <span class="fa fa-lock form-control-feedback"></span>
            </div>
            <button type="submit" class="btn btn-icon btn-xs btn-grey"><span class="fa fa-sign-in"></span>Login</button>
            <a href="#" class="navbar-link forgot-password">Passwort vergessen?</a>
          </form>
          <p class="navbar-right"><a href="#" class="navbar-btn btn btn-xs btn-red ">Kostenlos testen</a></p>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
