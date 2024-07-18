<?php get_header()?>

    <div class="projects">
      <div class="container">
        <h1>Projects</h1>

        <div class="projects__grid">
          <div class="grid__left">

          <?php $projectsL = new WP_Query(array(
                'post_type' => 'projects',
                'posts_per_page' => 4
            ))?>
        <?php while($projectsL->have_posts()) : $projectsL->the_post()?>
        
            <div class="project__card">
              <img src="<?php the_field('thumbnail')?>" alt="" />
              <a href="<?php the_permalink()?>"><?php the_title()?></a>
            </div>

            <?php 
                endwhile;
                 wp_reset_postdata();
            ?>

          </div>

          <?php $projectsR = new WP_Query(array(
                'post_type' => 'projects',
                'posts_per_page' => 3,
                'offset' => 4
            ))?>
        <?php while($projectsR->have_posts()) : $projectsR->the_post()?>

          <div class="grid__right">
            <div class="project__card">
            <img src="<?php the_field('thumbnail')?>" alt="" />
              <a href="<?php the_permalink()?>"><?php the_title()?></a>
            </div>

            <?php 
                endwhile;
                 wp_reset_postdata();
            ?>


          </div>
    </div>




    



<?php get_footer()?>