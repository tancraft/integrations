
<?php get_header()?>

      <main>
        <section class="single-post page">
          <div>
            <h1>Resultats de Recherche</h1>
            <?=get_search_form()?>
            <?php echo $wp_query->found_posts; ?> <?php _e('Résultats pour votre recherche', 'locale');?>: "<?php the_search_query();?>"
            <?php if ($wp_query->have_posts()): ?>

                <?php while ($wp_query->have_posts()): $wp_query->the_post();?>
			                <article>
			                    <div>
			                        <h3 class="card-title"><?php the_title()?></h3>
			                        <p>
			                            <?php the_excerpt()?>
			                        </p>
	                                <a href="<?php the_permalink()?>">Lire plus</a>
			                    </div>
			                </article>
							<?php endwhile?>
                <?php project_name_pagination();?>
<?php else: ?>
    <h3>Il n'y a pas d'articles a afficher</h3>
<?php endif;?>
          </div>
        </section>
      </main>
      <?php get_footer()?>