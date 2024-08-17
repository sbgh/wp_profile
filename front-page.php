<?php get_header(); ?>

<!-- <script>
var emailSent;
var emailError;
</script> -->
front page wwwwwwwwwwwwwwwwwwwwwww
<section class='main front-page'>
    <a name="services"></a>
    <!-- Paragraph 1 -->
    <div class="row para1row">
        <div class="col">
            <span class="para1-holder"><?php the_field('first_paragraph');?></span>
        </div>
    </div>

    <!-- slideBoxRow 1&2 -->
    <div id="slideBoxRow1" class="row justify-content-center slideBoxRow">
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 slideShowBoxCol">
            <div class="slideShowBoxContainer">
                <div id="slideShowBox1_s0" class="slideShowBox"></div>
                <div id="slideShowBox1_s1" class="slideShowBox"></div>
                <div id="slideShowBox1_s2" class="slideShowBox"></div>
                <div id="slideShowBox1_s3" class="slideShowBox"></div>
            </div>
            <div class='slideShowBoxTitle'><?php the_field('slideshowboxtitle1');?></div>
            <div class='slideShowBoxText'><?php the_field('slideshowboxtext1');?></div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 slideShowBoxCol">
            <div class="slideShowBoxContainer">
                <div id="slideShowBox2_s0" class="slideShowBox"></div>
                <div id="slideShowBox2_s1" class="slideShowBox"></div>
                <div id="slideShowBox2_s2" class="slideShowBox"></div>
                <div id="slideShowBox2_s3" class="slideShowBox"></div>
            </div>
            <div class='slideShowBoxTitle'><?php the_field('slideshowboxtitle2');?></div>
            <div class='slideShowBoxText'><?php the_field('slideshowboxtext2');?></div>
        </div>
    </div>

    <!-- polygon1row -->
    <div class="row polygon1row">
        <div class="col">
            <div id="polygon1-holder">
                <div id="polygon1-title"><?php the_field('poly1title');?></div>
                <div id="polygon1-text"><?php the_field('poly1text');?></div>
                <div id="iconText-holder">
                    <div id="iconText1" class="iconText">
                        <div id="iconTextIcon1" class="iconTextIcon"></div>
                        <div id="iconTextText1" class="iconTextText"><?php the_field('icon_text_text_1');?></div>
                    </div>
                    <div id="iconText2" class="iconText">
                        <div id="iconTextIcon2" class="iconTextIcon"></div>
                        <div id="iconTextText2" class="iconTextText"><?php the_field('icon_text_text_2');?></div>
                    </div>
                    <div id="iconText4" class="iconText">
                        <div id="iconTextIcon4" class="iconTextIcon"></div>
                        <div id="iconTextText4" class="iconTextText"><?php the_field('icon_text_text_4');?></div>
                    </div>
                </div>
                <div id="iconText-holder2">
                    <div id="iconText3" class="iconText">
                        <div id="iconTextIcon3" class="iconTextIcon"></div>
                        <div id="iconTextText3" class="iconTextText"><?php the_field('icon_text_text_3');?></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- slideBoxRow 3&4 -->
    <a name="amenities"></a>
    <div id="slideBoxRow2" class="row justify-content-center slideBoxRow">
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 slideShowBoxCol">
            <div class="slideShowBoxContainer">
                <div id="slideShowBox3_s0" class="slideShowBox"></div>
                <div id="slideShowBox3_s1" class="slideShowBox"></div>
                <div id="slideShowBox3_s2" class="slideShowBox"></div>
                <div id="slideShowBox3_s3" class="slideShowBox"></div>
            </div>
            <div class='slideShowBoxTitle'><?php the_field('slideshowboxtitle3');?></div>
            <div class='slideShowBoxText'><?php the_field('slideshowboxtext3');?></div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 slideShowBoxCol">
            <div class="slideShowBoxContainer">
                <div id="slideShowBox4_s0" class="slideShowBox"></div>
                <div id="slideShowBox4_s1" class="slideShowBox"></div>
                <div id="slideShowBox4_s2" class="slideShowBox"></div>
                <div id="slideShowBox4_s3" class="slideShowBox"></div>
            </div>
            <div class='slideShowBoxTitle'><?php the_field('slideshowboxtitle4');?></div>
            <div class='slideShowBoxText'><?php the_field('slideshowboxtext4');?></div>
        </div>
    </div>

    <!-- polygon2row -->
    <div class="row polygon2row">
        <div class="col">
            <div id="polygon2-holder">
                <div id="polygon2-title"><?php the_field('poly2title');?></div>
                <div id="polygon2-text"><?php the_field('poly2text');?></div>
                <div id="grid1-holder">
                    <div id="grid1-header"><?php the_field('grid_header_1');?></div>
                    <div id="grid1-items"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- slideStripRow -->
    <div class="slideStripRow">
        <div class="slideShowStripContainer">
            <div id="slideShowStrip1_s3" class="slideShowStrip"></div>
            <div id="slideShowStrip1_s2" class="slideShowStrip"></div>
            <div id="slideShowStrip1_s1" class="slideShowStrip"></div>
            <div id="slideShowStrip1_s0" class="slideShowStrip"></div>
        </div>
    </div>

    <!-- polygon3row -->
    <a name="location"></a>
    <div class="row polygon3row">
        <div class="col">
            <div id="polygon3-holder">
                <div id="polygon3-title"><?php the_field('poly3title');?></div>
                <div id="polygon3-text"><?php the_field('poly3text');?></div>
                <div id="grid2-holder">
                    <div id="grid2-header"><?php the_field('grid_header_2');?></div>
                    <div id="grid2-items"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us form -->
    <div class="contactBuffer">
        <a name="contact"></a>
        <div class="contactHolder">
            <div id="contactTitle"><?php the_field('contact_us_title');?></div>
            <div id="contactText"><?php the_field('contact_us_text');?></div>


            <div id="mainContactContainer">

                <div id="contactFormTitle"><?php the_field('contact_us_form_title');?></div>

                <div id="content" class="contactContent">
                    <div class="thanksContactMessage">
                        <?php the_field('thank_you_contact_message'); ?>
                    </div>
                    <div class="entry-content-contact">

                        <p class="formError"></p>

                        <div class=" contactInput ">
                            <label class="inquiringLabel fieldLabel">I am inquiring for:</label>
                            <div class="checkHolder">
                                <input class="contactCheckbox" type="checkbox" value='myself' name="myselfCh"
                                    id="myselfCh">
                                <label class="form-check-label" for="FacebookCh">myself</label>
                                <input class="contactCheckbox" type="checkbox" value='loved' name="lovedCh"
                                    id="lovedCh">
                                <label class="form-check-label" for="FacebookCh">a loved-one</label>
                            </div>

                        </div>

                        <div class=" contactInput ">
                            <label for="contactName" class="fieldLabel">Name<span
                                    class="mandatoryAsterisk">*</span>:</label>
                            <div class="inputHolder">
                                <input type="text" name="contactName" id="contactName"
                                    class="required requiredField field" />
                                <div id="nameError" class="formError formItemError"></div>
                            </div>
                        </div>
                        <div class=" contactInput ">
                            <label for="email" class="fieldLabel">Email<span class="mandatoryAsterisk">*</span>:</label>
                            <div class="inputHolder">
                                <input type="email" name="email" id="email"
                                    class="required requiredField field email" />
                                <div id="emailError" class="formError formItemError"></div>
                            </div>
                        </div>
                        <div class=" contactInput ">
                            <label for="phone" class="fieldLabel">Phone Number:</label>
                            <div class="inputHolder">
                                <input type="text" name="phone" class="field" id="phone" />
                            </div>
                        </div>
                        <div class=" contactInput ">
                            <label for="message" class="fieldLabel">Message<span
                                    class="mandatoryAsterisk">*</span>:</label> 
                            <div class="messageHolder">
                                <textarea name="message" id="message"
                                    class="required requiredField txtField"></textarea>
                                <div id="messageError" class="formError formItemError"></div>
                                <div class="contactSubmit">
                                    <div id="contactSubmit">Send</div><div class="loader"></div>
                                </div>
                            </div>

                        </div>

                    </div><!-- .entry-content -->
                </div><!-- #content -->
            </div><!-- #container -->
        </div>
    </div>

    <!-- Bottom banner -->
    <div id="bottomBannerHolder">
        <div id="bottomBanner"><?php the_field('bottom_banner_text');?></div>
    </div>
</section>
<?php get_footer(); ?>