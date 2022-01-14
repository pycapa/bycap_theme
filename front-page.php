<?php get_header( );?>
<div class="container d-flex flex-column justify-content-center text-center">
            <section id="home" class="section-1">
                  <span class="tag">σξτψ</span>

                  <h1>HI! I'M</h1>
                  <h2 class="title mb-2">CARLOS ALBERTO</h2>
                  <h3 class="sub-title">I’D LOVE TO HELP YOU WITH YOUR WEB DESIGN</h3>
                  <div class="mb-3 mt-3 m-auto d-flex justify-content-md-evenly align-items-center section-button">
                        <input type="email" class="form-control" name="email" id="email-sender"
                              placeholder="email address" aria-describedby="emailHelpId" placeholder="">
                        <a class="cssbuttons-io-button">I WANT YOUR E-BOOK!
                              <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                          <path fill="none" d="M0 0h24v24H0z"></path>
                                          <path fill="currentColor"
                                                d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z">
                                          </path>
                                    </svg>
                              </div>
                        </a>

                  </div>
            </section>

            <hr>
            <section class="section-2">
                  <div class="col-md-5 text-start  mt-4  p-2 ">
                        <h3 class="tag">ABOUT ME</h3>
                        <h2 class="title">I'M A WORDPRESS THEME DEVELOPER</h2>
                  </div>
                  <div class="col-md-7 text-start p-2">
                        <p>Hello again!

                        You don't know but I am just a rookie developer but mi heart is exiting to learn every day.

                        At this moment my page is under construction.

                        I'll see you.
                        </p>
                        <span class="mb-3 mt-5 tag">FOLLOW ME</span>
                        <div class="social-icons d-flex flex-row">
                              <span><a href="https://www.linkedin.com/in/carlosperezazavache/" target="_blank"><i
                                                class="fa fa-linkedin"></i></a></span>
                              <span><a href="https://www.twitter.com/cpspacios" target="_blank"><i
                                                class="fa fa-twitter"></i></a></span>
                              <span><a href="https://github.com/pycapa" target="_blank"><i
                                                class="fa fa-github"></i></a></span>
                              <span><a href="https://instagram.com/justbycap" target="_blank"><i
                                                class="fa fa-instagram"></i></a></span>
                        </div>
                  </div>
            </section>
            <hr>

            <section class="section-3">

                  <?php
            
                        $lastes_posts = get_posts( array(
                        'numberposts' => 3,
                        ));                  
                  ?>
                  <div class="row ">
                        <h2 class="title">MY BLOG</h2>
                  </div>
                  <div class="row justify-content-center">

                        <?php
                        
                        if ($lastes_posts):
                              foreach($lastes_posts as $last_post):
                                    setup_postdata( $last_post );
                        ?>
                        <div class="col-md-4 p-2 d-flex flex-column justify-content-md-between align-content-center">
                              <?php echo get_the_post_thumbnail( $last_post-> ID, "medium", array(
                                    "class" => 'img-fluid post-img',
                              ) );
                              ?>
                              <h3 class="title mt-4">
                                   <?php echo get_the_title( $last_post -> ID );?>
                              </h3>
                              <p><?php echo get_the_excerpt( $last_post -> ID );?></p>
                              <a href=<?php echo get_permalink( $last_post -> ID);?> class="cssbuttons-io-button"> Read more? click me!
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

                        <?php endforeach;
                              wp_reset_postdata(  );
                              endif;
                        ?>


                        
                  </div>
            </section>
            <hr>

            <section class="section-4">
                  <div class="row">
                        <h2>MY PORTFOLIO</h2>
                  </div>
                  <div class="row justify-content-center">
                        <?php
                              $args = array(
                                    'post_type' => 'portfolio',
                                    'post_per_page' => 3
                              );
                              $portfolio = new WP_Query($args);
                              while($portfolio->have_posts(  )): $portfolio->the_post(  );

                        ?>
                        <div class="col-md-4 p-2 d-flex flex-column justify-content-md-between align-content-center">
                              <?php the_post_thumbnail( 'medium', "class='img-fluid'" )?>
                              <h3 class="title mt-4">
                                    <?php the_title(  );?>
                              </h3>
                              <p> <?php the_excerpt(  );?>
                              </p>
                              <a class="cssbuttons-io-button" href=<?php the_permalink( );?>> go there!
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

                        <?php endwhile;
                        wp_reset_postdata(  );?>
                  </div>
            </section>
            <hr>


           
      </div>

<?php get_footer()?>
