<?php


function bycap_query_portfolio($qty = -1){
    $args = array(
        'post_type' => 'portfolio',
        'post_per_page' => $cantidad
    );

    $portfolio = new WP_Query($args);
    

    while($portfolio->have_posts(  )): $portfolio->the_post(  );?>
    <div class="post-entry">
        <div class="d-flex p-5 ">
            <div class="col-md-4">
                <!-- get image-->
                <?php the_post_thumbnail( 'medium',  array('class' => 'img-fluid'))?>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <h2 class="title"><?php the_title( )?></h2>
                    <p><?php the_excerpt(  );?></p>
                </div>
                <a href=<?php the_permalink(  )?> class="cssbuttons-io-button m-0"> go there!
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
        <hr>
    
    </div>

    <?php
         endwhile; wp_reset_postdata(  ); 

}