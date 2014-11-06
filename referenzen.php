<?php

// referenzen.php
// Unterseite "Referenzen"

include('html_header.php');
include('login_bar_header.php');
include('header_sub.php');

?>
<div class="jumbotron breadcrumbs">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index.php">Start</a></li>
      <li><a href="#">Unternehmen</a></li>
      <li class="active">Referenzen</li>
    </ol>
  </div>
</div>
<div class="container sub-container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h1>Referenzen</h1>
          <h2>Wir wachsen mit Ihnen.</h2>
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
          <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
          <p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
        </div>
        <div class="col-md-4 col-md-offset-1">
          <h3>Schweiz</h3>
          <p>
            <a class="btn btn-red btn-icon" href="#" role="button">
              <span class="fa fa-file-pdf-o">
              </span>
              Referenzliste CH
            </a>
          </p>
          <h3>Deutschland</h3>
          <p>
            <a class="btn btn-red btn-icon" href="#" role="button">
              <span class="fa fa-file-pdf-o">
              </span>
              Referenzliste DE
            </a>
          </p>
          
       </div>
      
      </div>
</div>


<?php

include('footer.php');

?>