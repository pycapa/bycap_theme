<?php
    /**
     * Template Name: Portfolio template
     */
    get_header();?>



<div class="container-fluid blog-container">

    <?php 

        while(have_posts(  )): the_post(  );
            the_content( );
            $titulo = get_the_title(  );
        endwhile;   
        bycap_query_portfolio();

    ?>

</div>

<?php get_footer(  );?>