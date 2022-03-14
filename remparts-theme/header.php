<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body>
    <div class="container">
      <nav id="size-ref" class="main-nav">
        <div>
          <a href="#" class="logo"><img src="<?=get_template_directory_uri()?>/assets/imgs/logo.svg" alt="" /></a>
          <div id="burger"><div class="trait"></div></div>
          <?php wp_nav_menu([
            'theme_location' => 'main_nav',
            "menu_id" => 'main-nav',
            "menu_class" => "navbar",
            'container' => false,
            'link_before' => '<span>',
            'link_after' => '</span>',
          ]);

?>
      </div>
    </nav>