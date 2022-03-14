      <footer>
        <?php
if (is_home()) {

    echo get_search_form();
}
?>
        <div>
          <!-- <ul class="sociaux">
            <li>
              <a href="https://github.com/tancraft" target="blank"
                ><img src="<?=get_template_directory_uri();?>/assets/imgs/sociaux/github-brands.svg" alt="icone github"
              /></a>
            </li>
            <li>
              <a href="https://codepen.io/tancraft" target="blank"
                ><img src="<?=get_template_directory_uri();?>/assets/imgs/sociaux/codepen-brands.svg" alt="icone codepen"
              /></a>
            </li>
            <li>
              <a href="www.linkedin.com/in/tancraftwork" target="blank"
                ><img
                  src="<?=get_template_directory_uri();?>/assets/imgs/sociaux/linkedin-brands.svg"
                  alt="icone linkedin"
              /></a>
            </li>
            <li>
              <a href="https://twitter.com/Tancraft_work" target="blank"
                ><img
                  src="<?=get_template_directory_uri();?>/assets/imgs/sociaux/twitter-square-brands.svg"
                  alt="icone twitter"
              /></a>
            </li>
            <li>
              <a href="https://www.facebook.com/tancraft" target="blank"
                ><img
                  src="<?=get_template_directory_uri();?>/assets/imgs/sociaux/facebook-brands.svg"
                  alt="icone facebook"
              /></a>
            </li>
          </ul> -->

                  <?php

                    wp_nav_menu([
                        'theme_location' => 'menu_sociaux',
                        "menu_id" => 'sociaux',
                        "menu_class" => 'sociaux',
                        "container" => false,
                    ]);
                  ?>
        </div>
        <div class="copyright">@2022 tancraftwork</div>
      </footer>
    </div>
    <?php wp_footer()?>

  </body>
</html>