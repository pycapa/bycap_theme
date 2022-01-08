<?php get_header();


?>
    <div class="container d-flex justify-content-center p-5">
        <div class="col-md-6 d-flex flex-column justfy-content-center">
            <?php
                the_post_thumbnail( 'medium', array('class' => 'img-fluid'))
            ?>     

            <h1 class="title mt-5"><?php the_title(  )?></h1>
            <?php the_content(  );?>
    <!--       <div class="d-flex justify-content-between m-5 page-counter">
                <span>Previous   <i class='fa fa-chevron-left'></i></span>
                <span><i class='fa fa-chevron-right'></i>   Next</span>
            </div> -->
        </div>

    </div>


<?php 

get_footer( );
?>