
<?php get_header()?>
    <main>
        <section class="single-post">
          <div>
            <?php if (have_posts()): ?>
                <?php if(has_post_thumbnail()):?>
                <figure>
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                </figure>
                <?php endif; ?>
            <article>
                <?php while (have_posts()): the_post();?>
	                <div>
	                    <h1><?php the_title()?></h1>
			                <p>
		                        <?php the_content()?>
		                    </p>
					 </div>
						<?php endwhile?>
            </article>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif;?>

          </div>
        </section>
    </main>
<?php get_footer()?>