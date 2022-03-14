
<?php get_header()?>
      <header>
        <div>
          <h3>GET READY</h3>
          <div class="header-logo">
            <img src="<?=get_template_directory_uri()?>/assets/imgs/logo.svg" alt="logo du site" />
          </div>
          <p>
            Lorem ipsum dolor sit amet, libero turpis non cras ligula, id
            commodo, aenean est in volutpat amet sodales, porttitor bibendum
            facilisi suspendisse, aliquam ipsum ante
          </p>
          <div class="mouse_icon"></div>
        </div>
      </header>
      <main>
        <!-- <section class="about-us">
          <div>
            <div>
              <h2><span>A</span> Propos</h2>
              <h4>Tout faire par passion</h4>
            </div>
            <p>
              Lorem ipsum dolor sit amet, libero turpis non cras ligula, id
              commodo, aenean est in volutpat amet sodales, porttitor bibendum
              facilisi suspendisse
            </p>
          </div>
        </section>
        <section id="js-pagination" class="pagination">
          <div>
            <nav>
              <ul id="paginate">
                <li><a href="" class="btn">Bienvenue</a></li>
                <li><a href="" class="btn">Portfolio</a></li>
                <li><a href="" class="btn">Mes services</a></li>
                <li><a href="" class="btn">Mes clients</a></li>
              </ul>
            </nav>
          </div>
        </section>
        <section class="skills">
          <div>
            <h2>Our <span>skills</span></h2>
            <p>
              Lorem ipsum dolor sit amet, libero turpis non cras ligula, id
              commodo, aenean est in volutpat amet sodales, porttitor bibendum
              facilisi suspendisse
            </p>
            <div class="icons-skills">
              <figure>
                <img src="imgs/skills/php-brands.svg" alt="logos" />
              </figure>
              <figure>
                <img src="imgs/skills/js-square-brands.svg" alt="logos" />
              </figure>
              <figure>
                <img src="imgs/skills/css3-brands.svg" alt="logos" />
              </figure>
              <figure>
                <img src="imgs/skills/wordpress-brands.svg" alt="logos" />
              </figure>
              <figure>
                <img src="imgs/skills/database-solid.svg" alt="logos" />
              </figure>
              <figure>
                <img src="imgs/skills/code-branch-solid.svg" alt="logos" />
              </figure>
            </div>
          </div>
        </section>
        <section>
          <div></div>
        </section>
        <section class="gallery">
          <div>
            <h2><span>Mes</span> Travaux</h2>
            <h4>Tout faire par passion</h4>
          </div>
          <div class="carousel__container">
            <div class="carousel" id="carousel"></div>
          </div>
          <div class="buttons">
            <button id="prev">Previous</button>
            <button id="next">Next</button>
          </div>
        </section> -->
        <section class="last-articles">
          <div>
            <h2>Derniers <span>articles</span></h2>
            <?php if (have_posts()): ?>
            <article>
                <?php while (have_posts()): the_post();?>
							    <div>
							        <h3 class="card-title"><?php the_title()?></h3>
				                    <p>
			                            <?php the_excerpt()?>
			                        </p>
							    </div>
			                    <a href="<?php the_permalink()?>">Lire plus</a>
							<?php endwhile?>
            </article>
<?php else: ?>
    <h3>Il n'y a pas d'articles a afficher</h3>
<?php endif;?>
          </div>
        </section>
      </main>
      <?php get_footer()?>
