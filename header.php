<!DOCTYPE html>
<html lang="en" style="background-color:black;">

<head>

    <!-- main Header -->
    <title><?php the_field('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php the_field('title'); ?>">
    <!-- <link rel="icon" type="image/png" href="<?php getMyImage(get_field('icon_image'), "thumbnail"); ?>"> -->

    <?php wp_head(); ?>

</head>

<body class='home'>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
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


    <script>
        jQuery(document).ready(function($) {
            // console.log("ready")

            function getRandomInt(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            //do 
            let target = '.key'
            document.querySelectorAll(target).forEach((i) => {
                if (i) {

                    let x = Math.random(),
                        y = Math.random(),
                        z = Math.random()
                    let x2 = Math.random(),
                        y2 = Math.random(),
                        z2 = Math.random()

                    let scopeX = $(window).width(),
                        scopeY = $(window).height(),
                        scopeZ = $(window).width()

                    let maxRotationsDeg = 3500

                    $(i).css({
                        "transition": 'transform 0s',
                        "transform": 'perspective(1000px) rotate3d(' + (x).toString() + ', ' + (y).toString() + ', ' + (z).toString() + ', ' + (x2 * maxRotationsDeg).toString() + 'deg) translate3d(' + ((x - .5) * scopeX).toString() + 'px, ' + ((y - .5) * scopeY).toString() + 'px, ' + ((z - .5) * scopeZ).toString() + 'px) rotate3d(' + (x2).toString() + ', ' + (y2).toString() + ', ' + (z2).toString() + ', ' + (x * maxRotationsDeg / 5).toString() + 'deg)'
                    });
                }
            });
            setTimeout(function() {
                let target = '.key'

                document.querySelectorAll(target).forEach((i) => {
                    if (i) {
                        $(i).addClass("inPlace")
                    }
                });

            }, 3000)

            setTimeout(function() {
                $("#keyboard-base").addClass("inPlace")
            }, 13000)

            function keyPunch() {

                let target = '.key'
                document.querySelectorAll(target).forEach((i) => {
                    if (i) {
                        setTimeout(function(i) {

                            $(i).css({
                                "background-color": "white"
                            })

                            setTimeout(function(i) {

                                $(i).css({
                                    "background-color": "black"
                                })

                            }, 50, i)

                        }, 2000 + 4000 * Math.random(), i)

                    }
                });

            }
            setTimeout(function() {
                keyPunch()
            }, 13000)

            setTimeout(function() {
                $("#imageback").css({
                    "opacity": "1"
                })
            }, 16000)





        });
    </script>