<?php  get_header(); the_post(); ?>

<main class="d-flex">
    <<aside class="col-12 col-lg-2 navbar-expand-lg navbar-light" id="sidebar">
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
<div class="">
            <div class="col-12 col-lg-8"> 
                <div class="card my-4">
                    <div>
                        <span> <?php the_time() ?> </span>
                    </div>
                    <div class="card-body">
                    <h2 id="h2" style="margin-left: 25px; margin-right: 25px;"> <?php the_title() ?> </h2>
                        <?php the_content() ?>
                     </div>
                </div>
            </div>
        </div>
    </main>
        

    <?php get_footer() ?>