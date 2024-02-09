</body>
<div class="item-footer mt-4">
    <footer class="py-2 page-footer container">
        <center>
            <a href="index.php" class="btnimg" id="vk"><img width="20" height="20" src="http://localhost:8080/wordpress/wp-content/uploads/2023/05/vk.jpg"></a>
            <a href="index.php" class="btnimg" id="telega"><img width="20" height="20" src="http://localhost:8080/wordpress/wp-content/uploads/2023/05/telega.jpg"></a>
            <a href="index.php" class="btnimg" id="twiter"><img width="20" height="20" src="http://localhost:8080/wordpress/wp-content/uploads/2023/05/twiter.jpg"></a>
            <a href="index.php" class="btnimg" id="tiktok"><img width="20" height="20" src="http://localhost:8080/wordpress/wp-content/uploads/2023/05/tiketok.jpg"></a>
            <a href="index.php" class="btnimg" id="instagram"><img width="20" height="20" src="http://localhost:8080/wordpress/wp-content/uploads/2023/05/instagram.jpg"></a>
        </center>    


<?php 
            wp_nav_menu( array(
                'theme_location' => 'footer_menu',
                'container' => 'div',
                'container_class' => 'nav justify-content-center border-bottom pb-2 mb-2',
                'depth' => 1,
                'items_wrap' => '%3$s'
            )); 
            ?>
            <p class="text-center" style="color:black">© <?php echo date( 'Y' ) ?> <?php bloginfo('name')?></p>
                <p class="text-center">
                    <a href="contactsus.php" class="contact" style="color:black">© Новостной портал двух отчаянных студентов: Саляева Артема и Янковского Егора</a>
                </p> 
    </footer>
    
    </div>
    <?php wp_footer() ?> <!-- подключает стили и скрипты -->
</html>

