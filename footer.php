        <footer id="main-footer" class="container">
            <div class="footer-content section">
                <ul class="contact-footer">
                    <li><a href="mailto:<?php echo get_theme_mod('email_office', 'contacto@chanovera.com'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" viewBox="0 0 16 16"><path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z"/><path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z"/></svg><?php echo get_theme_mod('email_office', 'contacto@chanovera.com'); ?></a></li>
                    <li><a href="tel:<?php echo get_theme_mod('phone_number', '9211243148'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg><?php echo get_theme_mod('phone_number', '(921) 124 3148'); ?></a></li>
                </ul>
                <?php
                
                    include(TEMPLATEPATH . '/parts/header/brand.php');

                    wp_nav_menu(
                        array(
                            'container' => 'nav', 
                            'container_class' => 'social', 
                            'theme_location' => 'social',
                        ) 
                    ); /* social navigation footer */

                    echo '<p>©'.date("Y").' • '.__('Todos los Derechos Reservados', 'renata').'</p>';

                    wp_nav_menu(
                        array(
                            'container' => 'nav',
                            'container_class' => 'secondary', 
                            'theme_location' => 'secondary',
                        )
                    );
                ?>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>