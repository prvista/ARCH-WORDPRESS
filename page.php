<?php get_header()?>


    <section class="page-banner">
        <div class="container">
            <div class="page-banner__wrapper grid">
                <h1 class="page-banner__header"><?php the_field('header')?></h1>
                <p class="page-banner__content"><?php the_field('description')?></p>
            </div>
            <img src="<?php the_field('image')?>" alt="">
        </div>
    </section>


<!-- FOR ABOUT PAGE ONLY -->
    <?php if(is_page('about')) {?>

    <section class="page-about vision ">
        <div class="container">
            <div class="page-about__block ">
                <h2 class="about__block__header">Vision</h2>
                <?php the_field('vission')?>
            </div>
            <p class="outline__text">Vision</p>
        </div>
    </section>

        <?php get_template_part('partials/part', 'quote')?>

    <section class="page-about mission ">
        <div class="container">
            <div class="page-about__block ">
                <h2 class="about__block__header">Our Compary Goal</h2>
                <?php the_field('mission')?>
            </div>
            <p class="outline__text">Mission</p>
        </div>
    </section>

    <?php }?>


<!-- FOR SERVICES PAGE ONLY -->
    <?php if(is_page('services')) {?>

        <section class="page-services">
            <div class="container">
                <div class="page-services__wrapper grid">
                    <div class="page-services__img lg--only">
                        <img src="./images/services-img-sm.jpg" alt="">
                    </div>

                    <div class="page-services__accordion">
                    

                    <?php $services = new WP_Query(array(
                        'post_type' => 'services'
                    ))?>
                    <?php while($services->have_posts()) : $services->the_post()?>


                <div class="accordion__block">
                    <div class="accordion__header">
                        <h2><?php the_title()?></h2>
                        <img src="<?php echo get_template_directory_uri() ?>/images/accordion-arrow.png" alt="">
                    </div>
                    <div class="accordion__body">
                        <?php the_content()?>
                    </div>
                </div>

            

                <?php endwhile; 
                    wp_reset_postdata();
                ?>


                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('partials/part', 'quote')?>


    <?php }?>



<!-- FOR CONTACT PAGE ONLY -->
    <?php if(is_page('contact')) {?>

        <section class="page-contact">
            <div class="container">
            <div class="page-contact__form">
                <form action="">
                    <div class="form__group">
                        <label for="">Fullname</label>
                        <input type="text" required>
                    
                    </div>
                    <div class="form__group">
                        <label for="">Email Address</label>
                        <input type="text" required>
                        
                    </div>

                    <div class="form__group">
                        <label for="">Phone/Mobile</label>
                        <input type="text" required>
                    
                    </div>

                    <div class="form__group">
                        <label for="">Subject</label>
                        <input type="text" required>
                    
                    </div>

                    <div class="form__group message">
                        <label for="">Message</label>
                        <textarea></textarea>
                    
                    </div>
                    <button class="btn btn--dark">Submit</button>
                </form>

                <div class="location">
                    <div class="location__block">
                        <h3>Manila</h3>
                        <p>Courtyard Dr, Makati, <br/>
                            1223 Metro Manila<br/>
                            (024) 123 1321</p>
                    </div>

                    <div class="location__block">
                        <h3>Laguna</h3>
                        <p>National Hwy, <br />
                            San Pablo City, 4000  <br/>
                            (049) 123 1234</p>
                    </div>

                    <div class="location__block">
                        <h3>Batangas</h3>
                        <p>Pastor Village, <br/>
                            Brgy Batangas, 4200 <br />
                            (043) 123 1234</p>
                    </div>
                </div>
            </div>
            </div>
        </section>

    <?php }?>

<?php get_footer() ?>