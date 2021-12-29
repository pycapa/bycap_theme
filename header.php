<?php wp_head(  );?>

<header id="navbar-menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid navbar-menu">
                  <h1 class="navbar-title">BYCAP</h1>
                  <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                              <li class="nav-item nav-item-box"><a class="nav-link active" aria-current="page"
                                          onclick="active_item(href)" href="#home">HOME</a></li>
                              <li class="nav-item nav-item-box"><a class="nav-link" onclick="active_item(href)"
                                          href="#blog">BLOG</a></li>
                              <li class="nav-item nav-item-box"><a class="nav-link" onclick="active_item(href)"
                                          href="#thoughts">THOUGHTS</a></li>
                              <li class="brand"><a class="navbar-brand" onclick="active_item(href)" href="#">BYCAP</a>
                              </li>
                              <li class="nav-item nav-item-box"><a class="nav-link" onclick="active_item(href)"
                                          href="#portfolio">PORTFOLIO</a></li>
                              <li class="nav-item nav-item-box"><a class="nav-link" onclick="active_item(href)"
                                          href="#About">ABOUT</a></li>
                              <li class="nav-item nav-item-box"><a class="nav-link" onclick="active_item(href)"
                                          href="#contact">CONTACT</a>
                              </li>
                        </ul>
                  </div>
            </div>
      </nav>
</header>