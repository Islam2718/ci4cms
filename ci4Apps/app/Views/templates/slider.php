<!--== Banner // Slider Area Start ==-->
    <section id="banner-area">

        <div id="banner-carousel" class="owl-carousel">
            <!-- Banner Single Carousel Start -->
            <?php foreach($sliderArray as $slData){ ?>
            <a href="<?= base_url('products/all'); ?>">
                <div class="single-carousel-wrap item" style="background-image: url('<?= base_url("/uploads/".$slData["thumb"]); ?>');">
                </div>
            </a>
            <?php } ?>
            <!-- Banner Single Carousel End -->

            <!-- Banner Single Carousel Start -->
<!--             <a href="new.html">
                <div class="single-carousel-wrap item" style="background-image: url('./assets/img/slider/s2.jpg');">
                </div>
            </a> -->
            <!-- Banner Single Carousel End -->
        </div>

    </section>
<!--== Banner Slider End ==-->