<?php include('php/head.php'); ?>

<div class="page_head_banner">
    <img src="img/img2.png" alt="購物商城" class="page_head_banner_img">
    <div class="page_head_banner_content">
        <h1 class="page_head_banner_title">購物商城</h1>
        <h2 class="page_head_banner_subtitle">Shopping</h2>
    </div>
</div>

<section class="page_section container mx-auto">
    <nav class="page_breadcrumb">
        <a href="welcome.php" class="page_breadcrumb_link">首頁</a>
        <span class="page_breadcrumb_separator">〉</span>
        <a href="productList.php" class="page_breadcrumb_link">購物商城</a>
        <span class="page_breadcrumb_separator">〉</span>
        <a href="product.php" class="page_breadcrumb_link active">千年人參</a>
    </nav>

    <div class="product_container">
        <div class="product_top_block">
            <div class="product_img_block">
                <div class="product_img_wrap">
                    <img src="img/img2.png" alt="產品" class="product_img">
                </div>

                <div class="product_img_slider_container">
                    <div class="product_img_slider">
                        <img src="img/img2.png" alt="產品" class="product_img_slider_content">
                    </div>
                    <div class="product_img_slider">
                        <img src="img/img2.png" alt="產品" class="product_img_slider_content">
                    </div>
                    <div class="product_img_slider">
                        <img src="img/img2.png" alt="產品" class="product_img_slider_content">
                    </div>
                    <div class="product_img_slider">
                        <img src="img/img2.png" alt="產品" class="product_img_slider_content">
                    </div>
                </div>
            </div>
            
            <div class="product_summary_and_specification_block">
                <div class="product_title">千年人參</div>
                <div class="product_summary">
                    <p>強身健體</p>
                    <br>
                    <p>長命百歲</p>
                    <br>
                    <p>精力旺盛</p>
                    <br>
                </div>
                <div class="product_specification_title">商品規格</div>
                <div class="product_specification_container">
                    <div class="product_specification_btn">十年</div>
                    <div class="product_specification_btn">五十年</div>
                    <div class="product_specification_btn">一百年</div>
                    <div class="product_specification_btn">五百年</div>
                    <div class="product_specification_btn">一千年</div>
                </div>
                
            </div>
            
        </div>
    </div>
    

</section>

<?php include('php/foot.php'); ?>
