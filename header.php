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

    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a id="whyBtn" class="nav-link " aria-current="page" href="#">Why Choose Us</a>
                        </li>
                        <li class="nav-item">
                            <a id="servicesBtn" class="nav-link" href="#">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a id="industiesBtn" class="nav-link" href="#">Industries</a>
                        </li>
                        <li class="nav-item">
                            <a id="moreBtn" class="nav-link disabled" aria-disabled="true">More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <script>
        jQuery(document).ready(function($) {
            // console.log("ready")

            function getRandomInt(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            //do 

            $("#splashTitle").css({
                "transform": "translateX(0px)"
            });
            $("#splashMoto").css({
                "transform": "translateY(0px)"
            });

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
                setTimeout(function() {
                    keyPunch()
                }, 30000)

            }
            setTimeout(function() {
                keyPunch()
            }, 13000)

            setTimeout(function() {
                $("#imageback").css({
                    "transition": "opacity 6s",
                    "opacity": "1"
                })
            }, 16000)


            const whyUsText = `<?php the_field('why_us'); ?>`
            for (let n in whyUsText.split(" ")) {
                x = Math.random() * 2 - 1
                y = Math.random() * 2 - 1
                r = Math.random() * 2 - 1
                let wrd = whyUsText.split(" ")[n]
                wrd = wrd + "&nbsp;"
                $("#whyUsWords").append('<div class="whyUsWord flutter" data-x=' + x + ' data-y=' + y + ' data-r=' + r + '><span>' + wrd + '</span></div>')
            }


            //Observe
            //setup observe on about and contactForm
            let options = {
                root: null,
                threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1.00],
                rootMargin: '-8% 0% -10% 0%',
            };

            let showMain = function(entries, observer) {
                entries.forEach(entry => {

                    const ratio = entry.intersectionRatio //entry.isIntersecting
                    entry.target.style.opacity = ratio

                    let ele = entry.target
                    if ($(ele).hasClass("flutter")) {
                        const x = $(ele).attr("data-x")
                        const y = $(ele).attr("data-y")
                        const r = $(ele).attr("data-r")

                        var eWidth = $(window).width() * x / 10 * (1 - ratio)
                        var eHeight = $(window).height() * y / 10 * (1 - ratio)
                        var rotate = r * 180 * (1 - ratio)

                        $(ele).find("span").css({
                            "transform": "translate(" + (eWidth).toString() + "px, " + (eHeight).toString() + "px) scale(" + ratio + ")  rotate3d(" + (Math.abs(x)).toString() + ", " + (Math.abs(y)).toString() + ", " + (Math.abs(r)).toString() + ", " + (rotate).toString() + "deg)",
                            "opacity": ratio
                        })

                        if (entry.intersectionRatio > .90) {
                            let x = Math.random() * 2 - 1
                            let y = Math.random() * 2 - 1
                            $(ele).attr("data-x", x)
                            $(ele).attr("data-y", y)
                        }

                    }
                });
            }

            let observeShowMain = new IntersectionObserver(showMain, options)

            setTimeout(function() {

                let target = '.whyUsWord';
                document.querySelectorAll(target).forEach((i) => {
                    if (i) {
                        observeShowMain.observe(i);
                    }
                });

            }, 1000)


            $("#whyBtn").on("click", function() {

                $("#main").animate({
                    scrollTop: $("#whyUsWords").offset().top
                }, 1000);
                $("#whyBtn").addClass("active");
                $("#servicesBtn").removeClass("active");
                $("#industryBtn").removeClass("active");
            });

            $("#servicesBtn").on("click", function() {

                $("#main").animate({
                    scrollTop: $("#whyUsWords").offset().top
                }, 1000);
                $("#servicesBtn").addClass("active");
                $("#whyBtn").removeClass("active");
                $("#industryBtn").removeClass("active");
            });

            $("#industryBtn").on("click", function() {

                $("#main").animate({
                    scrollTop: $("#whyUsWords").offset().top
                }, 1000);
                $("#industryBtn").addClass("active");
                $("#whyBtn").removeClass("active");
                $("#industryBtn").removeClass("active");
            });

            const servicesList = `<?php the_field('services'); ?>`
            const servicesArr = servicesList.split("\n")

            let twoDeeArr = [];
            while (servicesArr.length) twoDeeArr.push(servicesArr.splice(0, 2));

            if (servicesArr.length % 2 == 0) {
                for (let x in twoDeeArr) {

                    let sName = twoDeeArr[x][0]
                    let sDesc = twoDeeArr[x][1]


                    const itemHTML = "<div class='serviceItem'><div class='serviceItemName'>" + sName + "</div><div class='serviceItemDesc'>" + sDesc + "</div></div>"
                    const itemEle = $($.parseHTML(itemHTML))

                    $("#serviceList").append(itemEle)

                }
            }



        });
    </script>