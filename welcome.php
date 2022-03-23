<?php include('php/head.php'); ?>

<div class="home_slider_block">
    <div class="home_slider_container">
        <a href="" class="home_slider_link">
            <div class="home_slider_content"></div>
        </a>
        <a href="" class="home_slider_link">
            <div class="home_slider_content"></div>
        </a>
        <a href="" class="home_slider_link">
            <div class="home_slider_content"></div>
        </a>
    </div>
    <span class="home_slider_arrow home_slider_arrow_prev"><i class="fas fa-angle-left"></i></span>
    <span class="home_slider_arrow home_slider_arrow_next"><i class="fas fa-angle-right"></i></span>
    <div class="home_slider_dots_container"></div>
</div>


<script>
    $('.home_slider_container').slick({
        arrows: true,
        prevArrow: $('.home_slider_arrow_prev'),
        nextArrow: $('.home_slider_arrow_next'),
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:4000,
        speed:800,
        dots: true,
        appendDots: $('.home_slider_block'),
    })
</script>


<?php include('php/foot.php'); ?>