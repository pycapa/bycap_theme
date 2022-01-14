<!-- Template para metadata de los post -->

<i class="icon-blog fa fa-calendar-o"></i>
<span class="blog-text-resume"> <?php the_time( get_option('date_format') );?></span>
<span><i class="icon-blog fa fa-user"></i> 
<a href="<?php 
    echo get_author_posts_url( get_the_author_meta('ID'), get_the_author_meta( 'user_nicename' ) );

?>" class="blog-text-resume">Written by <?php the_author( )?></a></span>
<?php 
    $comments = get_comments( 'count' );
    if($comments){ ?>   
        <i class="icon-blog fa fa-comment"></i> 
        <span class="blog-text-resume"><?php echo get_comments_number( )?> comment(s)</span>
    <?php }?>