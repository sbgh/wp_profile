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
    hi
    <style>

    </style>

    <script>
    jQuery(document).ready(function($) {

        $.fn.isInViewport = function() {
            if (this) {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();

                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                return elementBottom > viewportTop && elementTop < viewportBottom;
            } else {
                return false
            }
        };
        $(".loader").fadeOut(0);
        $("#contactSubmit").on("click", function() {

            focus = focus | 1;
            $(".loader").fadeIn(200);
            postForm();
        })

        var focus = 0;

        function postForm() {

            $('input').prop("readonly", true).attr("disabled", true);
            $('textarea').prop("readonly", true).attr("disabled", true);

            $(".formError").text('');
            $("#nameError").text('');
            $("#emailError").text('');
            $("#messageError").text('')

            $.ajax({
                type: "POST",
                url: "/wp-admin/admin-ajax.php",
                data: {
                    action: 'post_contact',
                    contactName: $('#contactName').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    message: $('#message').val(),
                    myselfCh: $('#myselfCh').is(':checked'),
                    lovedCh: $('#lovedCh').is(':checked'),
                    focus: focus
                },
                success: function(data) {
                    var cObj = JSON.parse(data);
                    $(".loader").fadeOut(0);

                    if (cObj.hasError) {
                        $(".formError").text("Sorry, an error occured.");

                        if (cObj.hasOwnProperty("nameError")) {
                            $("#nameError").text(cObj.nameError)
                        }
                        if (cObj.hasOwnProperty("emailError")) {
                            $("#emailError").text(cObj.emailError)
                        }
                        if (cObj.hasOwnProperty("messageError")) {
                            $("#messageError").text(cObj.messageError)
                        }

                        $('input').prop("readonly", false).attr("disabled", false);
                        $('textarea').prop("readonly", false).attr("disabled", false);

                    } else if(cObj.emailSent){

                        focus = 0;
                        $(".formError").text("");
                        $("#contactFormTitle").hide();

                        function spinolgy(query, startMs) {
                            setTimeout(function() {
                                $(query).css({
                                    "transition": "all 1000ms",
                                    "transform": "rotate3d(" + (Math.random() -
                                            .5) +
                                        "," + (Math.random() -
                                            .5) + "," + (Math.random() - .5) +
                                        ",720deg) scale(0.5)"
                                });

                                setTimeout(function() {
                                    $(query).css({
                                        "transition": "transform 300ms",
                                        "transform": "translate(70vw,-20vh)"
                                    })
                                }, 500)

                                setTimeout(function() {
                                    $(query).css({
                                        "transition": "transform 0ms",
                                        "transform": "translate(0,0)",
                                        "opacity": "0"
                                    });
                                }, 800)
                            }, startMs)
                        }
                        spinolgy(".contactInput:eq(0)", 2000);
                        spinolgy(".contactInput:eq(1)", 2100);
                        spinolgy(".contactInput:eq(2)", 2200);
                        spinolgy(".contactInput:eq(3)", 2300);
                        spinolgy(".contactInput:eq(4)", 2400);
                        spinolgy("#contactSubmit", 2500);
                        setTimeout(function() {
                            $(".thanksContactMessage").fadeIn(500);
                        }, 3000)
                    }else{
                        $('input').prop("readonly", false).attr("disabled", false);
                        $('textarea').prop("readonly", false).attr("disabled", false);
                    }
                }
            });
        }

        $('#contactName').focusin(function() {
            focus = focus | 2
        })
        $('#email').focusin(function() {
            focus = focus | 4
        })
        $('#message').focusin(function() {
            focus = focus | 8
        })

        $(".popupHeaderIcon, .main-icon-image").click(function() {
            window.location.href = '<?php echo get_home_url(); ?>';
        })

        $(".footer-logo").click(function() {
            window.location.href = '<?php echo get_home_url(); ?>';
        })

        $("#altTitle").click(function() {
            window.location.href = '<?php echo get_home_url(); ?>';
        })

        //Load image urls into main_background_slide array
        var main_background_slide = ['<?php getMyImage(get_field("main_background_image"), "large"); ?>']
        main_background_slide.push('<?php getMyImage(get_field("main_background_slide_1"), "large"); ?>')
        main_background_slide.push('<?php getMyImage(get_field("main_background_slide_2"), "large"); ?>')
        main_background_slide.push('<?php getMyImage(get_field("main_background_slide_3"), "large"); ?>')

        //Load first header slide into memory and then configure and load all the remaining slides 
        $('#backImageMem').attr('src', main_background_slide[0]).on(
            'load',
            function() {
                //set initial conditions for header slides
                setSlide('#main_background_slide_', main_background_slide, 0, 1)

                //setup image for first slide box 1 slide image
                setSlide('#slideShowBox1_s', slideshowbox1imageAr, 0, 1)
                //setup image for second slide box 2 slide image
                setSlide('#slideShowBox2_s', slideshowbox2imageAr, 0, 1)
                //setup image for second slide box 3 slide image
                setSlide('#slideShowBox3_s', slideshowbox3imageAr, 0, 1)
                //setup image for second slide box 4 slide image
                setSlide('#slideShowBox4_s', slideshowbox4imageAr, 0, 1)

                //setup image for first slide strip 1 slide image
                setSlide('#slideShowStrip1_s', slideshowstrip1imageAr, 0, 1)

                //10.0 seconds later the header image is changed
                setTimeout(() => {
                    changeSlide('#main_background_slide_', main_background_slide, 1, 0)
                }, 10000);

                //3 seconds later setup images for the rest of the slides
                setTimeout(() => {

                    setSlide('#main_background_slide_', main_background_slide, 1, 0)
                    setSlide('#main_background_slide_', main_background_slide, 2, 0)
                    setSlide('#main_background_slide_', main_background_slide, 3, 0)

                    //7.5 seconds later the first slide box image is changed
                    setSlide('#slideShowBox1_s', slideshowbox1imageAr, 1, 0);
                    setSlide('#slideShowBox1_s', slideshowbox1imageAr, 2, 0);
                    setSlide('#slideShowBox1_s', slideshowbox1imageAr, 3, 0);
                    setTimeout(() => {
                        changeSlide('#slideShowBox1_s', slideshowbox1imageAr, 1, 0)
                    }, 7500);

                    //8.0 seconds later the second slide box image is changed
                    setSlide('#slideShowBox2_s', slideshowbox2imageAr, 1, 0)
                    setSlide('#slideShowBox2_s', slideshowbox2imageAr, 2, 0)
                    setSlide('#slideShowBox2_s', slideshowbox2imageAr, 3, 0)
                    setTimeout(() => {
                        changeSlide('#slideShowBox2_s', slideshowbox2imageAr, 1, 0)
                    }, 8000);

                    //8.5 seconds later the third slide box image is changed
                    setSlide('#slideShowBox3_s', slideshowbox3imageAr, 1, 0)
                    setSlide('#slideShowBox3_s', slideshowbox3imageAr, 2, 0)
                    setSlide('#slideShowBox3_s', slideshowbox3imageAr, 3, 0)
                    setTimeout(() => {
                        changeSlide('#slideShowBox3_s', slideshowbox3imageAr, 1, 0)
                    }, 8500);

                    //9.0 seconds later the fourth slide box image is changed
                    setSlide('#slideShowBox4_s', slideshowbox4imageAr, 1, 0)
                    setSlide('#slideShowBox4_s', slideshowbox4imageAr, 2, 0)
                    setSlide('#slideShowBox4_s', slideshowbox4imageAr, 3, 0)
                    setTimeout(() => {
                        changeSlide('#slideShowBox4_s', slideshowbox4imageAr, 1, 0)
                    }, 9000);

                    //9.5 seconds later the first slide strip image is changed
                    setSlide('#slideShowStrip1_s', slideshowstrip1imageAr, 1, 1)
                    setSlide('#slideShowStrip1_s', slideshowstrip1imageAr, 2, 1)
                    setSlide('#slideShowStrip1_s', slideshowstrip1imageAr, 3, 1)
                    setTimeout(() => {
                        changeSlideStrip('#slideShowStrip1_s', slideshowstrip1imageAr, 1)
                    }, 9500);



                }, 3000);
            });

        //function to set initial slide css for slide boxes
        function setSlide(targetId, array, index, opacity) {
            $(targetId + index).css({
                'opacity': opacity,
                'background-image': 'url(' + array[index] + ')'
            });
        }

        //function to change slide css for slide boxes and then repeat every 4 seconds
        function changeSlide(targetId, array, index, lastIndex) {
            $(targetId + lastIndex).css({
                'transition': 'opacity 1s',
                'opacity': '0'
            });
            $(targetId + index).css({
                'transition': 'opacity 1s',
                'opacity': '1'
            });
            lastIndex = index;
            index = index + 1 > array.length - 1 ? 0 : index + 1;
            setTimeout(() => {
                changeSlide(targetId, array, index, lastIndex)
            }, 4000, index, lastIndex);
        }

        //function to change slide css for slide strip and then repeat every 4 seconds
        function changeSlideStrip(targetId, array, index) {

            var nextIndex = index + 1 > array.length - 1 ? 0 : index + 1;
            $(targetId + index).css({
                'transition': 'transform 1s ease-in',
                'transform': 'translate3d(-' + $(targetId + index).width() + 'px, 0px, 0px)'
            });
            setTimeout(() => {
                var stripParent = $(targetId + index).parent();
                var strip = $(targetId + index).detach();
                stripParent.prepend(strip);
                $(targetId + index).css({
                    'transition': 'none',
                    'transform': 'translate3d(0px, 0px, 0px)'
                });

            }, 1000, targetId, index);

            setTimeout(() => {
                changeSlideStrip(targetId, array, nextIndex)

            }, 4000, array, nextIndex);

        }

        //Transform header off screen
        $(".shapeContainer").css({
            'transform': 'translate(-' + $(".shapeContainer").width() + 'px, 0px)'
        });

        //In .5 second, transform header to initial position and raise opacity transitioned over 1 sec
        setTimeout(() => {
            $(".shapeContainer").css({
                'transition': "all 1s ease-out",
                'opacity': '1',
                'transform': 'translate(0px, 0px)'
            });
        }, 500);

        //In 1.5 second, transition polygon drop shadow to 0 over 2 seconds
        setTimeout(() => {
            $(".shapeContainer").css({
                'transition': "all 0.5s ease-out",
                'filter': 'drop-shadow(0px 0px 0px rgba(0, 0, 0, 1))'
            });
            $(".popupHeaderIcon").show();
        }, 1500);

        //Load image urls into slideshowbox1imageAr array
        var slideshowbox1imageAr = ['<?php getMyImage(get_field('slideshowbox1image1'), "medium_large"); ?>'];
        slideshowbox1imageAr.push('<?php getMyImage(get_field('slideshowbox1image2'), "medium_large"); ?>');
        slideshowbox1imageAr.push('<?php getMyImage(get_field('slideshowbox1image3'), "medium_large"); ?>');
        slideshowbox1imageAr.push('<?php getMyImage(get_field('slideshowbox1image4'), "medium_large"); ?>');

        //Load image urls into slideshowbox2imageAr array
        var slideshowbox2imageAr = ['<?php getMyImage(get_field('slideshowbox2image1'), "medium_large"); ?>'];
        slideshowbox2imageAr.push('<?php getMyImage(get_field('slideshowbox2image2'), "medium_large"); ?>');
        slideshowbox2imageAr.push('<?php getMyImage(get_field('slideshowbox2image3'), "medium_large"); ?>');
        slideshowbox2imageAr.push('<?php getMyImage(get_field('slideshowbox2image4'), "medium_large"); ?>');

        //Apply background icons in first 'iconText' section
        $("#iconTextIcon1").css({
            "background-image": "url(<?php getMyImage(get_field('icon_text_icon_1'), "medium"); ?>)"
        })
        $("#iconTextIcon2").css({
            "background-image": "url(<?php getMyImage(get_field('icon_text_icon_2'), "medium"); ?>)"
        })
        $("#iconTextIcon3").css({
            "background-image": "url(<?php getMyImage(get_field('icon_text_icon_3'), "medium"); ?>)"
        })
        $("#iconTextIcon4").css({
            "background-image": "url(<?php getMyImage(get_field('icon_text_icon_4'), "medium"); ?>)"
        })

        //Load image urls into slideshowbox3imageAr array
        var slideshowbox3imageAr = ['<?php getMyImage(get_field('slideshowbox3image1'), "medium_large"); ?>'];
        slideshowbox3imageAr.push('<?php getMyImage(get_field('slideshowbox3image2'), "medium_large"); ?>');
        slideshowbox3imageAr.push('<?php getMyImage(get_field('slideshowbox3image3'), "medium_large"); ?>');
        slideshowbox3imageAr.push('<?php getMyImage(get_field('slideshowbox3image4'), "medium_large"); ?>');

        //Load image urls into slideshowbox4imageAr array
        var slideshowbox4imageAr = ['<?php getMyImage(get_field('slideshowbox4image1'), "medium_large"); ?>'];
        slideshowbox4imageAr.push('<?php getMyImage(get_field('slideshowbox4image2'), "medium_large"); ?>');
        slideshowbox4imageAr.push('<?php getMyImage(get_field('slideshowbox4image3'), "medium_large"); ?>');
        slideshowbox4imageAr.push('<?php getMyImage(get_field('slideshowbox4image4'), "medium_large"); ?>');

        //Populate grid items
        function populateGridItems(gridItems, targetDivId) {
            var gridItemsArr = gridItems.split(";")
            for (var x = 0; x < gridItemsArr.length; x++) {
                var htm = '<div class="gridItem">' + gridItemsArr[x] + '</div>';
                $('#' + targetDivId).append(htm);

            }

        }

        populateGridItems('<?php the_field('grid_items_1'); ?>', 'grid1-items');

        //Load image urls into slideshowstrip1imageAr array
        var slideshowstrip1imageAr = [
            '<?php getMyImage(get_field('slideshowstrip1image1'), "large"); ?>'];
        slideshowstrip1imageAr.push('<?php getMyImage(get_field('slideshowstrip1image2'), "large"); ?>');
        slideshowstrip1imageAr.push('<?php getMyImage(get_field('slideshowstrip1image3'), "large"); ?>');
        slideshowstrip1imageAr.push('<?php getMyImage(get_field('slideshowstrip1image4'), "large"); ?>');

        populateGridItems('<?php the_field('grid_items_2'); ?>', 'grid2-items');

        //Add scroll to top menu items
        $("#popupHeader .menu-item").each(function(index) {
            $(this).find("a").click(function(e) {
                e.preventDefault();
                var url = $(this).attr("href");
                var hash = url.substring(url.indexOf('#')+1);
                var ele = $("a[name*='"+hash+"']");
                if(ele.length > 0){
                    $('html, body').stop();
                    $('html, body').animate({
                        scrollTop: ele.first().offset().top - 80
                    }, 800, function() {});
                    window.history.replaceState({}, hash, '#'+hash);
                }
            })

        });

        //scroll to a on load
        setTimeout(() => {
            var hash = window.location.hash.substr(1);
            var ele = $("a[name*='"+hash+"']");
            if(ele.length > 0){
                $('html, body').stop();
                $('html, body').animate({
                    scrollTop: ele.first().offset().top - 80
                }, 800, function() {});
            }
        }, 2000);

    });
    </script>

 