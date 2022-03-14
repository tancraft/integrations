<?php get_header()?>

<main>

<?php $menu = wp_get_nav_menu_items('menu haut');?>
<header>
  <div>
    <div class="hero">
      <h2>En ce moment</h2>
      <div></div>
    </div>
    <h4>Pizza Au Foie Gras</h4>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Perferendis aliquid, animi quas dolorum excepturi mollitia.
    </p>
    <div class="dateDuree">du 02/12/2021 au 31/12/2021</div>
    <a href="#" class="btn">En Savoir Plus</a>
  </div>
</header>
  <section id="carte" class="carteRestau">
    <h2>Notre Carte</h2>
    <nav class="navCarte">
<?php
if (is_plugin_active('plugin-directory/plugin-file.php')) {
    // code à mettre si le plugin est activé
}

wp_nav_menu([
    'theme_location' => 'carte-pizz',
    "menu_id" => 'navCarte',
    "menu_class" => "navCarte",
    'container' => false,
    'link_before' => '<span>',
    'link_after' => '</span>',
]);
?>
</nav>
    <!-- <div>
      <article>
        <table>
          <thead>
            <th><h4>Base Tomate</h4></th>
            <th>
              <label for="">Taille : </label>
              <select name="" id="">
                <option value="">1 pers</option>
                <option value="">2 pers</option>
                <option value="">3 pers</option>
              </select>
            </th>
          </thead>
          <tbody>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
          </tbody>
        </table>
      </article>
      <article>
        <table>
          <thead>
            <th><h4>Base Crème</h4></th>
            <th>
              <label for="">Taille : </label>
              <select name="" id="">
                <option value="">1 pers</option>
                <option value="">2 pers</option>
                <option value="">3 pers</option>
              </select>
            </th>
          </thead>
          <tbody>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage.</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage.</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage.</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage.</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
          </tbody>
        </table>
      </article>
      <article>
        <table>
          <thead>
            <th><h4>Fromagères</h4></th>
            <th>
              <label for="">Taille : </label>
              <select name="" id="">
                <option value="">1 pers</option>
                <option value="">2 pers</option>
                <option value="">3 pers</option>
              </select>
            </th>
          </thead>
          <tbody>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
            <tr>
              <td>
                <h4>Pizza Royale</h4>
                <ul>
                  <li>tomate,</li>
                  <li>champigons,</li>
                  <li>fromage</li>
                </ul>
              </td>
              <td>8,00€</td>
            </tr>
          </tbody>
        </table>
      </article>
      <article>
        <table>
          <tbody>
            <tr>
              <td class="menu-card">
                <figure><img src="<?=get_template_directory_uri()?>/assets/imgs/bambino.jpg" alt="" /></figure>
                <div>
                  <div class="hero">
                    <h4>Menu Bambino</h4>
                    <div></div>
                  </div>
                  <ul>
                    <li>
                      1 Pizza Reine (1 pers) ou 6 nuggets de poulet +
                      pommes de terre
                    </li>
                    <li>1 briquette de 20cl orange ou pomme</li>
                    <li>1 dessert enfant</li>
                    <li>1 cadeau</li>
                  </ul>
                  <span>8,00 €</span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </article>
    </div> -->
    <?php if (have_posts()): ?>
    <div>

        <?php while (have_posts()): the_post();?>
	            <div>
	                <div>
	                    <div>
	                        <h5><?php the_title()?></h5>
	                        <h6><?php the_category()?></h6>
	                        <a href="<?php the_permalink()?>" >Voir plus</a>
	                    </div>
	                </div>
	            </div>
	        <?php endwhile?>
    </div>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif;?>
  </section>
  <section id="infos" class="infos">
    <h2>Informations</h2>
    <article>
      <h3>A propos</h3>
      <h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit,
        at! Laboriosam dolore ducimus dignissimos velit sed maxime at
        voluptas et odit doloribus officiis inventore modi neque,
        praesentium similique numquam. Maiores voluptatibus debitis ex
        explicabo? Excepturi itaque suscipit error eaque cumque?
      </h1>
    </article>
    <div>
      <article class="horaires">
        <img src="<?=get_template_directory_uri()?>/assets/imgs/icons/date.svg" alt="" />
        <h3>Horaires D'ouverture</h3>
        <p>
          Ouvert du Lundi au Samedi de 11h à 13h30 et de 17h30 à 22h, le
          Dimanche de 17h30 à 22h00.
        </p>
      </article>
      <article>
        <img src="<?=get_template_directory_uri()?>/assets/imgs/icons/car.svg" alt="" />
        <h3>Livraisons</h3>
        <p>
          Supplément 1.00€ par pizza. À partir de 4 pizzas supplément fixe
          de 3.50€
        </p>
        <p>
          Par mesure de sécurité, nos livreurs n'ont pas plus de 15€ sur
          eux. Merci de faire l'appoint.
        </p>
      </article>
      <article>
        <img src="<?=get_template_directory_uri()?>/assets/imgs/icons/fid.svg" alt="" />
        <h3>Fidélité</h3>
        <ul>
          <li>1 pizza 1 pers. = 1 point</li>
          <li>1 pizza 2 pers. = 2 points</li>
          <li>1 pizza 4 pers. = 4 points</li>
          <li>30 points = 6.80€ de réduction.</li>
        </ul>
      </article>
    </div>
  </section>
  <section id="locate" class="locate">
    <h2>Nous trouver</h2>
    <div>
        <ul>
          <li>
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="137.01"
            height="137.01"
            viewbox="0 0 137.01 137.01"
          >
            <path
              d="M68.5,34.42A18.78,18.78,0,1,0,87.28,53.19,18.79,18.79,0,0,0,68.5,34.42Z"
            />
            <path
              d="M68.5,0A68.51,68.51,0,1,0,137,68.5,68.58,68.58,0,0,0,68.5,0Zm1.28,114.62-1.28,2.07-1.27-2.07C66,112.69,38,67.11,38,50.84a30.52,30.52,0,1,1,61,0C99,67.11,71,112.69,69.78,114.62Z"
            />
          </svg>
          <span>50 Rue Toto 59820 Dunkerque</span></li>
          <li>
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="137.01"
            height="137.01"
            viewbox="0 0 137.01 137.01"
          >
            <path
              d="M68.5,0A68.51,68.51,0,1,0,137,68.5,68.58,68.58,0,0,0,68.5,0Zm38.79,103.66a38.2,38.2,0,0,1-9.88,9c-.92.58-1.87,1.11-2.82,1.63a5.86,5.86,0,0,1-3,.75,6.14,6.14,0,0,1-2.91-.71A99.17,99.17,0,0,1,37,46.11a104.14,104.14,0,0,1-1.56-10.39,6.69,6.69,0,0,1,2.75-6.25,39,39,0,0,1,14.26-7.33A6.32,6.32,0,0,1,60,26c2.22,5.92,4.44,11.83,6.61,17.77A6.14,6.14,0,0,1,65.56,50q-2.41,3.06-4.84,6.1a.59.59,0,0,0-.11.7,79.92,79.92,0,0,0,14,22.34c1.18,1.33,2.43,2.58,3.64,3.87a.59.59,0,0,0,.69.19Q82.73,82.05,86.5,81a6.22,6.22,0,0,1,6.27,1.46l13.85,12.68A6.36,6.36,0,0,1,107.29,103.66Z"
            />
          </svg>
          <a href="tel:+337+++++++">01.01.01.01.01</a></li>
        </ul>
      <figure>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2052.6315875295463!2d2.4321681621407807!3d50.96937586932255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcf2befb58210f%3A0x9acce3e392f5f585!2s14%20Rue%20de%20l&#39;H%C3%B4tel%20de%20Ville%2C%2059380%20Bergues!5e0!3m2!1sfr!2sfr!4v1641903486619!5m2!1sfr!2sfr"
          width="600"
          height="450"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </figure>
    </div>
  </section>

<?php get_footer()?>