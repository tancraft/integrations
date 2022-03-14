<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body>
    <div class="container">
        <nav id="menu-haut">
        <div>
          <a href="" class="logo"
            ><img src="<?=get_template_directory_uri() ?>/assets/imgs/logo.svg" alt="logo du site" />
          </a>
          <div id="burger">
            <div class="trait"></div>
          </div>

        <?php

          wp_nav_menu([
              'theme_location' => 'main_nav',
              "menu_id" => 'navbar',
              "menu_class" => 'navbar',
              "container" => false,
              "link_before" => '<span>',
              "link_after" => '</span>',
          ]);
        ?>

        </div>
      </nav>