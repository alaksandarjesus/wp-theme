<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <?php wp_head();?>

    <style>
    .title {
        background: linear-gradient(to bottom, #000080 0, #000080 33%, #ffff00 34%, #ffff00 66%, #ff0000 67%, #ff0000 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    </style>
</head>

<body <?php body_class();?>>
    <header>
        <div class="d-flex justify-content-between align-items-center top-nav">
            <div class="d-flex justify-content-start align-items-center">
                <img class="navbar-flag" src="<?php echo site_url('/wp-content/uploads/2020/08/pmk-flag.jpg'); ?>"
                    alt="">
                <h2 class="navbar-title mb-0">Pattali Makkal Katchi</h2>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <ul class="list-unstyled social-media-icons">
                    <li> <a href=""><?php getSvg('brand-facebook'); ?></a></li>
                    <li> <a href=""><?php getSvg('brand-twitter'); ?></a></li>
                </ul>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg app-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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