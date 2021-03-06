<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="author" content="Dusan Ivanovic">
        <meta name="description" content="Zavrsni projekat">
        <title>PORTFOLIO</title>

        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <!--Font Awesome-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/fa-svg-with-js.css" rel="stylesheet" type="text/css"/>
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/fontawesome-all.min.js"></script>

        <!--Style i responsive-->
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body style="background-color: #e3e3e3;">

        <nav class="menu">
            <ul class="side-menu list-unstyled">
              <?php
              $top_menu = wp_get_nav_menu_items('MainMenu');
              foreach ($top_menu as $menu) {
                ?>
                <li><a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?><a/></li>
                <?php } ?>


            </ul>
            <span class="fa fa-close text-white"></span>
        </nav>
        <div class="menu-overlay">

        </div>
        <div class="container">

            <div class="row">
                <!--Personal-->
                <div class="col-md-4 px-0">
                    <aside class="personal-info">

                        <!--                        MENU-->
                        <div class="toggle-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <figure class="personal-img m-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/example.jpg" alt="me"/>
                            <div class="hover">
                                <h1>Dusan Ivanovic</h1>
                                <h4>Front End Developer</h4>
                            </div>
                        </figure>
                        <div class="personal-info-text">
                            <section class="about-me">
                                <div class="row">
                                    <div class="col-3">
                                        <article class="text-center">
                                            <span class="far fa-user"></span>
                                        </article>
                                    </div>
                                    <div class="col-9">
                                        <article class="text-justify">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt ut labor et dolore magna aliqua.
                                                Ut enim ad minim veniamnt in culpa quie officia deserunt mollit.
                                            </p>
                                        </article>
                                    </div>
                                </div>
                            </section>
                            <section class="phone">
                                <div class="row">
                                    <div class="col-3">
                                        <article class="text-center">
                                            <span class="fa fa-phone" data-fa-transform="rotate-180"></span>
                                        </article>
                                    </div>
                                    <div class="col-9">
                                        <article>
                                            <p class="lead">(880) 1737-662662</p>
                                            <p class="pale mb-4">Personal</p>
                                            <p class="lead">(880) 1737-662662</p>
                                            <p class="pale">Work</p>
                                        </article>
                                    </div>
                                </div>
                            </section>
                            <section class="email">
                                <div class="row">
                                    <div class="col-3">
                                        <article class="text-center">
                                            <span class="fa fa-envelope"></span>
                                        </article>
                                    </div>
                                    <div class="col-9">
                                        <article>
                                            <p class="lead"><a href="mailto:dusanivanovic@mail.com">dusanivanovic@mail.com</a></p>
                                            <p class="pale mb-4">Personal</p>
                                            <p class="lead"><a href="mailto:dusanivanovic@mail.com">dusanivanovic@mail.com</a></p>
                                            <p class="pale">Work</p>
                                        </article>
                                    </div>
                                </div>
                            </section>
                            <section class="address">
                                <div class="row">
                                    <div class="col-3">
                                        <article class="text-center">
                                            <span class="fa fa-map"></span>
                                        </article>
                                    </div>
                                    <div class="col-9">
                                        <article>
                                            <address>
                                                24 Golden Tower <sup class="pale">(2nd floor)</sup><br>
                                                Amberkhana, Sylhet
                                            </address>
                                            <p class="pale">SYL-3RF87W</p>
                                        </article>
                                    </div>
                                </div>
                            </section>
                            <section class="skills">
                                <div class="row">
                                    <div class="col-3">
                                        <article class="text-center">
                                            <span class="fa fa-tasks "></span>
                                        </article>
                                    </div>
                                    <div class="col-9">
                                        <article>
                                            <h2>Professional Skills</h2>

                                            <?php $args = array(
                                              "numberposts" => -1,
                                              "post_type" => 'skills',
                                            );
                                             $skills = get_posts($args);
                                             ?>

                                             <?php foreach($skills as $s) {?>

                                            <?php $num = get_field("skill_percentage", $s->ID); ?>

                                          <?php } ?>

                                            <div class="skill" data-progress="<?php echo $num; ?>">
                                                <h4><?php echo $s->post_title; ?></h4>
                                                    <div class="bar">
                                                        <div class="bar-progress">
                                                            <span class="dot"></span>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="skill" data-progress='70'>
                                                <h4>Adobe Illustrator</h4>
                                                    <div class="bar">
                                                        <div class="bar-progress">
                                                            <span class="dot"></span>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="skill" data-progress='77'>
                                                <h4>HTML5 &amp; CSS3</h4>
                                                    <div class="bar">
                                                        <div class="bar-progress">
                                                            <span class="dot"></span>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="skill" data-progress='69'>
                                                <h4>JavaScript</h4>
                                                    <div class="bar">
                                                        <div class="bar-progress">
                                                            <span class="dot"></span>
                                                        </div>
                                                    </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </aside>
                </div>
                <!-- End Aside -->
