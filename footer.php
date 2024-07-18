


<?php if(is_front_page()) { ?>


    <section class="contact">
        <div class="container">
            <div class="block__header">
            <h2 class="block__title" data-number="04">Get in Touch</h2>
            </div>

            <div class="contact__wrapper grid">
            <div class="contact__info">
                <div class="contact__info__block">
                <h3>Manila</h3>
                <p>
                    Courtyard Dr, Makati,<br />
                    1223 Metro Manila<br />
                    (024) 123 1321
                </p>
                </div>

                <div class="contact__info__block">
                <h3>Laguna</h3>
                <p>
                    National Hwy, <br />
                    San Pablo City, 4000 <br />
                    (049) 123 1234
                </p>
                </div>
                <div class="contact__info__block">
                <h3>Batangas</h3>
                <p>
                    Pastor Village,<br />
                    Brgy Batangas, 4200<br />
                    (043) 123 1234
                </p>
                </div>
            </div>

            <div class="contact__info__form">
                <p>
                Please fill in the form below to contact us. We try our best to
                respond to any questions in less than 24 hours
                </p>

                <form action="">
                <div class="form__group">
                    <input type="text" required />
                    <label for="">Fullname</label>
                </div>
                <div class="form__group">
                    <input type="Email" required />
                    <label for="">Email</label>
                </div>
                <div class="form__group">
                    <input type="tel" required />
                    <label for="">Phone</label>
                </div>
                <button>Submit</button>
                </form>
            </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2021 All Right Reserve</p>
        </div>
    </section>


<?php  } else { ?>

    
    <footer class="page-footer">
        <div class="container">
            <div class="page-footer__img align--right lg--only">
                <img src="./images/footer-img.jpg" alt="">
            </div>

            <div class="page-footer__wrapper grid">
                <div class="page-footer__navigation">
                    <nav class="footer__nav">
                        <h3 class="footer__nav__header">Navigation</h3>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer_menu'
                        ))?>
                    </nav>
                    <nav class="footer__nav">
                        <h3 class="footer__nav__header">Connect</h3>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="newletter">
                    <form action="">
                        <div class="form__group">
                            <input type="text" required>
                            <label for="">Subscribe to our newsletter</label>
                        </div>
                        <button class="btn btn--dark">Subcribe</button>
                    </form>

                    <div class="footer__email">
                        <h4>Have a project in mind</h4>
                        <a href="#">info@arcph.com</a>
                    </div>
                </div>
            
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2021 All Right Reserve</p>
        </div>
    </footer>


<?php }?>
<?php wp_footer()?>

  </body>
</html>
