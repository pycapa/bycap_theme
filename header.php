<?php wp_head(  );?>


<nav id='navbar' class="navbar fixed-top">
      <div class="nav-container">
            <div class="nav-logo-box">
                  <a class="nav-logo" href=<?php echo esc_url( home_url( "/") )?>><?php echo get_bloginfo( 'name'); ?></a>
            </div>
            <label class="botton-toggler-icon" id="label-toggle-button" for="toggle-button">
                  <i class="fa fa-ellipsis-v" id='icon-menu'></i></label>
            <input id="toggle-button" type='checkbox'></input>
            
            
            <?php
            
                  $args = array(
                        'container_id'                => 'navbarNav',
                        'container_class'             => 'menu-collapse',
                        'menu_class'                  => 'nav',
                        'theme_location'              => 'primary'
                  );
                  wp_nav_menu( $args );
            
            ?>

      </div>
</nav>
