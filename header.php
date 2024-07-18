<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php is_front_page() ? bloginfo('title') : wp_title('')?></title>
    <?php wp_head() ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper grid">
          <h1><a href="<?php echo site_url('/')?>">Arch</a></h1>
          <nav>
              <?php wp_nav_menu(array(
                'theme_location' => 'header_menu'
              ))?>
          </nav>

          <div class="toggle__menu">
            <p>Menu</p>
          </div>
        </div>
      </div>
    </header>

