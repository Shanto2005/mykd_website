<?php
$main_logo = get_field('site_logo', 'options');
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('cherset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <div class="header_content">
                <div class="header_logo">
                    <a href="<?php echo site_url(); ?>"><img src="<?php
                        if($main_logo){
                            echo $main_logo;
                        }
                    ?>" alt="My e-sports"></a>
                </div>
                <div class="header_menu">
                    <div class="dmenu_box">
                        <?php
                        $main_menu = wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'mainMenu', 'menu_class' => 'dskMenu', 'echo' => false));
                        $main_menu = str_replace(array('<div class="menu-main-menu-container">', '</div>'), '', $main_menu);
                        echo $main_menu;
                        ?>
                    </div>
                </div>
                <div class="search_wrepper">
                    <div class="mmenu_box">
                        <a href="#mykd_menu" class="mmenuButton"><i class="fa-solid fa-bars"></i></a>
                        <nav id="mykd_menu">
                            <?php echo $main_menu;?>
                        </nav>
                    </div>
                    <div class="inputBox lg-ms-3 lg-me-3">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="signup_box">
                        <button class="bttn">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- searchModalStart -->
    <div class="search_modal">
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="modal_form d-flex" role="search">
                            <input class="form-control searchInput" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- searchModalEnd -->