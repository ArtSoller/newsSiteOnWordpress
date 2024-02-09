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

<div class="slider col-12 col-lg-8">
                <?php
                if ( have_posts() ) : 
                    while( have_posts() ): the_post(); ?>
                    <div class="card my-4 ">
                        <div>
                            <span> <?php the_time( 'j F Y' ) ?> </span>
                        </div>
                        <div class="card-body div">
                            <h2 id="h2" style="margin-left: 25px; margin-right: 25px;"><?php the_title() ?></h2>                            
                            <?php the_excerpt() ?>
                        </div>
                        <?php if( has_post_thumbnail() ) : ?>
                            <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
                            <?php endif; ?>
                            <div class="card-footer py-3">
                                <a href="<?php the_permalink() ?>" class="btn btn-primary stretched-link w-100">Читать полностью</a>
                            </div>
                        </div>
                        
                        <?php endwhile;
                endif; ?>
            </div>

            </main>


        <div class="container-lg d-flex justify-content-center">
            
        <div class="col-12 col-lg-10">
            <?php 
            if ( have_posts() ) : 
                while( have_posts() ): the_post(); ?>
                <div class="card my-4" style="margin-top:10px;">
                    <div>
                        <span> <?php the_time( 'j F Y' ) ?> </span>
                    </div>
                    <div class="card-body">
                            <h2 id="h2" style="margin-left: 25px; margin-right: 25px;"><?php the_title() ?></h2>                            
                            <span style="margin-left: 50px; margin-right: 50px;"> <?php the_excerpt() ?> </span>
                        </div>
                    <?php if( has_post_thumbnail() ) : ?>
                        <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
                    <?php endif; ?>
                    <div class="card-footer">
                        <a href="<?php the_permalink() ?>" class="btn btn-primary stretched-link w-100">Читать полностью</a>
                    </div>
                </div>
                <?php endwhile;
                endif; ?>
                
                <?php the_posts_pagination(); ?>

            </div>
        </div>
<?php get_footer() ?>