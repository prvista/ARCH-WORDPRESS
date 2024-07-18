<?php get_header()?>



    <section class="project__banner">
        <div class="container">
            <div class="project__banner__wrapper">
            <h1><?php the_title()?></h1>
            <!-- <img src="./images/banner.jpg" alt="" /> -->
            <img src="<?php the_field('thumbnail')?>" alt="" />
            </div>
        </div>
    </section>

    <section class="project__blurb">
      <div class="container">
        <div class="project__container">
          <h2>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem
            veritatis sunt rem officiis? Veritatis, harum
          </h2>
        </div>
      </div>
    </section>

    <section class="project__about">
      <div class="project__container">
        <div class="project__about__grid">
          <h3><?php the_field('category')?></h3>
          <div class="project__about__content">
            <p>
            <?php the_content()?>
            </p>

          </div>
        </div>
      </div>
    </section>




    <?php get_template_part('partials/part', 'quote')?>
<?php get_footer()?>