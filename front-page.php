<?php get_header()?>

    <section class="banner">
        <div class="container">
            <h2 class="banner__header">
            Architecture is in the details—and they matter
            </h2>
            <h3 class="banner__body">
            It takes many forms, as unique as the people that use and surround it
            and show the path that not been taken and new ways of doing things
            </h3>

            <picture>
            <source srcset="<?php echo get_template_directory_uri() ?>/images/banner.jpg" media="(min-width: 521px)" />
            <source srcset="<?php echo get_template_directory_uri() ?>/images/banner_sm.jpg" media="(max-width: 520px)" />
            <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="banner image" />
            </picture>
        </div>
    </section>


    <section class="about">
        <div class="container">
            <div class="block__header">
            <h2 class="block__title" data-number="01">About</h2>
            </div>

            <div class="about__wrapper grid">
            <div class="about__body">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Dignissimos quo esse, vel voluptatem recusandae molestias veniam
                nesciunt a eius dolorum optio illo omnis accusamus ea animi
                voluptatum molestias veniam nesciunt a eius dolorum
                </p>
                <ul class="about__info">
                <li>
                    <p>Type</p>
                    <p>
                    Building, Spaces, Infrastructure, Interior Design, Exterior
                    Design
                    </p>
                </li>

                <li>
                    <p>Recent Awards</p>
                    <p>
                    Architecture of the Year - 2020 <br />
                    Buiding of the Year - 2020 <br />
                    </p>
                </li>
                </ul>
            </div>

            <div class="about__stats">
                <div class="about__stats__block">
                <h3><?php the_field('count_projects')?></h3>
                <p>Finished Project</p>
                </div>

                <div class="about__stats__block">
                <h3><?php the_field('count_experience')?></h3>
                <p>Industry Experience</p>
                </div>

                <div class="about__stats__block">
                <h3><?php the_field('count_awards')?></h3>
                <p>Awards & Recognition</p>
                </div>

                <div class="about__stats__block">
                <h3><?php the_field('count_locations')?></h3>
                <p>Locations</p>
                </div>
            </div>
            </div>
        </div>
    </section>
  

    <section class="services">
      <div class="container">
        <div class="services__wrapper grid">
          <div class="services__outline">
            <span>02</span>
          </div>
          <div class="services__content">
            <div class="block__header">
              <h2 class="block__title" data-number="02">Services</h2>
            </div>

            <?php 
                $services = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page' => -1
                ))
            ?>

            <?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post()?>

            <div class="service__block">
              <h3><?php the_title()?></h3>
              <p>
                <?php the_content()?>
              </p>
            </div>

            <?php endwhile; 
                else:
                    echo "No more service";
                endif;
                wp_reset_postdata();
            ?>

          </div>
        </div>
      </div>
    </section>


    <section class="projects">
      <div class="container">
        <div class="block__header">
          <h2 class="block__title" data-number="03">Projects</h2>
        </div>
        <?php 
                $projects = new WP_Query(array(
                    'post_type' => 'projects',
                    'posts_per_page' => -1
                ))
            ?>

        <?php if($projects->have_posts()) : while($projects->have_posts()) : $projects->the_post()?>


        <div class="project__block">
          <h3 class="project__code"><?php the_field('code')?></h3>
          <img
            src="<?php echo get_field('thumbnail')?>"
            alt="thumb"
            class="project__thumbnail"
          />
          <div class="project__content">
            <div>
              <h4 class="project__category"><?php the_field('category')?></h4>
              <p class="project__desc">
              <?php the_field('description')?>
              </p>
            </div>
            <a href="<?php the_permalink()?>" class="project__link"
              ><img src="<?php echo get_template_directory_uri()?>/images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div>

        <?php endwhile; 
            else:
                echo "No more service";
            endif;
            wp_reset_postdata();
        ?>

      </div>
    </section>

    <?php get_template_part('partials/part', 'quote')?>

    <section class="video">
      <div class="video__wrapper">
        <video class="main__video" loop>
          <source src="<?php the_field('vid')?>"/>
        </video>

        <div class="overlay"></div>
        <button class="btn__play" id="playbtn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="47"
            height="54"
            viewBox="0 0 47 54"
          >
            <path
              id="Polygon_1"
              data-name="Polygon 1"
              d="M22.664,7.547a5,5,0,0,1,8.671,0L49.7,39.509A5,5,0,0,1,45.361,47H8.639A5,5,0,0,1,4.3,39.509Z"
              transform="translate(47) rotate(90)"
              fill="#fff"
            />
          </svg>
        </button>

        <button class="btn__pause hide" id="pausebtn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="48"
            viewBox="0 0 42 48"
          >
            <g
              id="Group_17"
              data-name="Group 17"
              transform="translate(-944 -2930)"
            >
              <rect
                id="Rectangle_7"
                data-name="Rectangle 7"
                width="15"
                height="48"
                rx="3"
                transform="translate(944 2930)"
                fill="#fff"
              />
              <rect
                id="Rectangle_8"
                data-name="Rectangle 8"
                width="15"
                height="48"
                rx="3"
                transform="translate(971 2930)"
                fill="#fff"
              />
            </g>
          </svg>
        </button>
      </div>
    </section>

<?php get_footer() ?>



