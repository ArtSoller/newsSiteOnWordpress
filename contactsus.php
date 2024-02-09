<!DOCTYPE html>
<?php  get_header() ?>
    <main class="d-flex">
    <aside class="col-12 col-lg-2 navbar-expand-lg navbar-light" id="sidebar">
        <?php
            wp_nav_menu( array(

                'theme_location'    => 'primary',
                'container' => 'div',
                'container_class'   => ' ms-3',
                'depth' => 1,
                'items_wrap' => '<ul class="list-unstyled navbar-nav nav nav-pills flex-column mb-auto my-4">%3$s</ul>'
            )   );
        ?>                        
        <hr>            
    </aside>
        <div class="col-12 col-lg-9">
            <div class="item" style="margin-top:10px;">
                <h2 style="margin-left: 50px;">
                        Группа: ПМ-02
                    </h2>
                    <h2 style="margin-left: 50px;">
                        Состав бригады:
                    </h2>

                    <div class="Artyom">
                        <center>
                            <img src="img/Artyom.jpg" style="margin-top: 18px;" class="imgUs" title="Саляев Артём Андреевич" />
                            <h4 id="carusel"><u>Саляев Артём Андреевич</u></h4>
                            <hr>
                        </center>

                        <p>
                            <!--<img align="left" style="margin-left: 0.9vw; margin-right: 2%; " class="imgpict" src="img/phone.jpg" />-->
                            <b style="margin-left: 0.8vw; font-size: 0.9vw; white-space: nowrap; ">+7 (923) 123-70-02 </b>
                        </p>

                        <p>
                            <!--<img align="left" style="margin-left: 0.9vw; margin-right: 2%; width: 0.9vw; " src="img/pochta.jpg" />-->
                            <u style="margin-left: 0.8vw; font-size: 0.9vw; white-space: nowrap; ">salyaev.2020@stud.nstu.ru</u>
                        </p>
                    </div>

                    <div class="Yegor">
                        <center>
                            <img src="img/Yegor.jpg" style="margin-top: 18px;" class="imgUss" title="Янковский Егор Вадимович" />
                            <h4 id="carusel" style=" font-size: 1.665vw; "><u>Янковский Егор Вадимович</u></h4>
                            <hr>
                        </center>

                        <p>
                            <!--<img align="left" style="margin-left: 0.9vw; margin-right: 2%;" class="imgpict" src="img/phone.jpg" />-->
                            <b style="margin-left: 0.8vw; font-size: 0.9vw; white-space: nowrap; ">+7 (913) 945-98-00 </b>
                        </p>

                        <p>
                            <!--<img align="left" style="margin-left: 0.9vw; margin-right: 2%; " class="imgpict" src="img/pochta.jpg" />-->
                            <u style="margin-left: 0.8vw; font-size: 0.9vw; white-space: nowrap; ">yankovskij.2019@stud.nstu.ru</u>
                        </p>
                    </div>
            </div>
        </div>
    </main>

<a href="#" title="Вернуться к началу страницы" class="topNubex icon" data-char="^"></a>

<?php
    include 'parts/footer.php';
 ?>    
</body>
</html>