<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <?php wp_head();?>

    <style>
    .title{
        background:  linear-gradient(to bottom, #000080 0, #000080 33%, #ffff00 34%, #ffff00 66%,  #ff0000 67%, #ff0000 100%);
        -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    }

    </style>
</head>

<body <?php body_class();?>>
    <header>
    <div class="d-flex justify-content-center align-items-center">
        <h1 class="title m-0">பாட்டாளி மக்கள் கட்சி</h1>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light app-navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav nav-fill w-100">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    </header>
    <div id="wrapper" class="hfeed">
        <header id="header">
            <div id="branding">
                <div id="site-title">
                    <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {echo '<h1>';}?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        title="<?php echo esc_html(get_bloginfo('name')); ?>"
                        rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
                    <?php if (is_front_page() || is_home() || is_front_page() && is_home()) {echo '</h1>';}?>
                </div>
                <div id="site-description"><?php bloginfo('description');?></div>
            </div>
            <nav id="menu">
                <div id="search"><?php get_search_form();?></div>
                <?php wp_nav_menu(array('theme_location' => 'main-menu'));?>
            </nav>
        </header>
        <div id="container">