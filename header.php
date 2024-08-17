<!DOCTYPE html>
<html lang="en">

<head>

    <!-- main Header -->
    <title><?php the_field('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php the_field('title'); ?>">
    <!-- <link rel="icon" type="image/png" href="<?php getMyImage(get_field('icon_image'), "thumbnail"); ?>"> -->

    <?php wp_head(); ?>

</head>

<body class='home'>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">KILANICORP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Why Choose Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Industries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">More</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    hi

    <script>
        jQuery(document).ready(function($) {
            console.log("ready")
            $("#keyboard-base").addClass("inPlace")
        });
    </script>