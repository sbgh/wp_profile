<?php get_header(); ?>
<div id="main" class="main">
    <div class="splash">

        <div id="imageback" class="imageback"></div>
        <div class="splashItems">
            <div class="splashItem">
                <div id="splashTitle" class="splashTitle megrim-regular ucTitle">
                    <p><?php the_field('up_title'); ?></p>
                </div>
                <div id="splashMoto" class="splashMoto">
                    <p><?php the_field('moto'); ?></p>
                </div>
            </div>
            <div class="splashItem">

                <div id="keyboard-base" class="keyboard-base">
                    <div class="key">~</div>
                    <div class="key">1</div>
                    <div class="key">2</div>
                    <div class="key">3</div>
                    <div class="key">4</div>
                    <div class="key">5</div>
                    <div class="key">6</div>
                    <div class="key">7</div>
                    <div class="key">8</div>
                    <div class="key">9</div>
                    <div class="key">0</div>
                    <div class="key">-</div>
                    <div class="key">+</div>
                    <div class="key delete">Delete</div>
                    <div class="key tab">Tab</div>
                    <div class="key">Q</div>
                    <div class="key">w</div>
                    <div class="key">E</div>
                    <div class="key">R</div>
                    <div class="key">T</div>
                    <div class="key">Y</div>
                    <div class="key">U</div>
                    <div class="key">I</div>
                    <div class="key">O</div>
                    <div class="key">P</div>
                    <div class="key">[</div>
                    <div class="key">]</div>
                    <div class="key backslash">\</div>
                    <div class="key capslock">CapsLock</div>
                    <div class="key">A</div>
                    <div class="key">S</div>
                    <div class="key">D</div>
                    <div class="key">F</div>
                    <div class="key">G</div>
                    <div class="key">H</div>
                    <div class="key">J</div>
                    <div class="key">K</div>
                    <div class="key">L</div>
                    <div class="key">;</div>
                    <div class="key">'</div>
                    <div class="key return">Return</div>
                    <div class="key leftshift">Shift</div>
                    <div class="key">Z</div>
                    <div class="key">X</div>
                    <div class="key">C</div>
                    <div class="key">V</div>
                    <div class="key">B</div>
                    <div class="key">N</div>
                    <div class="key">M</div>
                    <div class="key">,</div>
                    <div class="key">.</div>
                    <div class="key">/</div>
                    <div class="key rightshift">Shift</div>
                    <div class="key leftctrl">Ctrl</div>
                    <div class="key">Alt</div>
                    <div class="key command">Command</div>
                    <div class="key space">Space</div>
                    <div class="key command">command</div>
                    <div class="key">Alt</div>
                    <div class="key">Ctrl</div>
                    <div class="key">Fn</div>

                </div>

            </div>
        </div>
        <!-- <div id="glassback" class="glassback"></div> -->

    </div>
    <div id="whyUs" class="whyUs">
        <div id="whyUsWords" class="whyUsWords"></div>
    </div>
    <div id="services" class="services">
        <div id="serviceList" class="serviceList"></div>
    </div>
</div>


<style>
    .imageback {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url(<?php getMyImage(get_field('background1'), 'large'); ?>);
    }
</style>

<?php get_footer(); ?>