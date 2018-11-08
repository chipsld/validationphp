<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="index.php">
        Qui sommes nous
      </a>

      <a class="navbar-item" href="produit.php">
        Nos produits
      </a>

      <a class="navbar-item" href="contact.php">
        Contactez-nous 
      </a>
    </div>  
    <div class="navbar-end">
      <?php
            if(isset($_COOKIE['client']) && !empty($_COOKIE['client']))
            {
                $template = '<div class="navbar-item">';
        
                $template .= '<p>'.$_COOKIE['client'].'</p>';

                $template .= '</div>';

                $template .= '<div class="navbar-item">';

                $template .= '<div class="buttons">
                              <a class="button is-info" href="logout.php">Log out</a>
                              </div>';

                $template .= '</div>';

                $template .= '<div class="navbar-item">';

                $template .= '<a href="buy.php"><i class="fas fa-shopping-cart"></i></a>';

                $template .= '</div>';
          

                echo $template;
            }
            else
            {
              $template = '<div class="navbar-item">';

              $template .= '<div class="buttons">
                              <a class="button is-info" href="login.php">Log in</a>
                           </div>';

              $template .= '</div>';
              

              echo $template;
            }
         ?>
  
      </div>
    </div>
  </div>
</nav>