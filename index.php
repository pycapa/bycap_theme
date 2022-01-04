<?php get_header( );?>

<div class="container d-flex flex-column justify-content-center mt-5">
<div><?php the_category('&bull'   );?></div>
<?php while(have_posts(  )): the_post(  ); ?>
    <div class="p-2 d-flex flex-nowrap img-blog">
        <div class="col-md-4">
            <img class="img-fluid" src=<?php the_post_thumbnail( 'medium')?> alt="">
        </div>
        <div class="col-md-8">
            <h3 class="title mt-4"><?php the_title( )?></h3>
            <p><?php echo the_excerpt(  ) ?></p>
            <a href="#" class="cssbuttons-io-button"> Read more? click me!
                <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path fill="currentColor"
                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13pv-2z">
                            </path>
                        </svg>
                </div>
            </a>
        </div>
    </div>
    <?php endwhile; ?>
</div>


<?php get_footer( );?>