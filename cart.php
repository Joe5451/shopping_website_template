<?php include('php/head.php'); ?>

<div class="page_head_banner">
    <img src="img/img2.png" alt="購物車" class="page_head_banner_img">
    <div class="page_head_banner_content">
        <h1 class="page_head_banner_title">購物車</h1>
        <h2 class="page_head_banner_subtitle">Cart</h2>
    </div>
</div>

<section class="page_section container mx-auto">
    <nav class="page_breadcrumb">
        <a href="welcome.php" class="page_breadcrumb_link">首頁</a>
        <span class="page_breadcrumb_separator">〉</span>
        <a href="cart.php" class="page_breadcrumb_link active">購物車</a>
    </nav>

    <div class="custom_container">
        <div class="cart_container">
            <div class="cart_head">
                <div class="cart_head_item cart_head_name">品項</div>
                <div class="cart_head_item cart_head_specification">規格</div>
                <div class="cart_head_item cart_head_amount">數量</div>
                <div class="cart_head_item cart_head_subtotal border-r-0">小記</div>
                <div class="cart_head_item cart_head_btn border-r-0"></div>
            </div>

            <div class="cart_head_mobile">購物車</div>
            
            <div class="cart_body">
                <div class="cart_list">
                    <div class="cart_list_item cart_list_product_img_wrap">
                        <img src="img/img2.png" alt="千人人參" class="cart_list_product_img">
                    </div>
                    <div class="cart_list_product_name">千年人參</div>
                    <div class="cart_list_item cart_list_specification">
                        <div class="cart_list_specification_title">規格：</div>
                        <div class="cart_list_specification_content">一千年</div>
                    </div>
                    <div class="cart_list_item cart_list_amount">
                        <div class="cart_list_amount_control">
                            <button class="cart_list_amount_btn minus"><i class="fas fa-minus"></i></button>
                            <input type="number" name="amount" value="1" class="cart_list_amount_input">
                            <button class="cart_list_amount_btn plus"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="cart_list_item cart_list_subtotal">
                        $1,100
                    </div>
                    <button class="cart_list_delete_btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="cart_list">
                    <div class="cart_list_item cart_list_product_img_wrap">
                        <img src="img/img2.png" alt="千人人參" class="cart_list_product_img">
                    </div>
                    <div class="cart_list_product_name">千年人參</div>
                    <div class="cart_list_item cart_list_specification">
                        <div class="cart_list_specification_title">規格：</div>
                        <div class="cart_list_specification_content">一千年</div>
                    </div>
                    <div class="cart_list_item cart_list_amount">
                        <div class="cart_list_amount_control">
                            <button class="cart_list_amount_btn minus"><i class="fas fa-minus"></i></button>
                            <input type="number" name="amount" value="1" class="cart_list_amount_input">
                            <button class="cart_list_amount_btn plus"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="cart_list_item cart_list_subtotal">
                        $1,100
                    </div>
                    <button class="cart_list_delete_btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="cart_list">
                    <div class="cart_list_item cart_list_product_img_wrap">
                        <img src="img/img2.png" alt="千人人參" class="cart_list_product_img">
                    </div>
                    <div class="cart_list_product_name">千年人參</div>
                    <div class="cart_list_item cart_list_specification">
                        <div class="cart_list_specification_title">規格：</div>
                        <div class="cart_list_specification_content">一千年</div>
                    </div>
                    <div class="cart_list_item cart_list_amount">
                        <div class="cart_list_amount_control">
                            <button class="cart_list_amount_btn minus"><i class="fas fa-minus"></i></button>
                            <input type="number" name="amount" value="1" class="cart_list_amount_input">
                            <button class="cart_list_amount_btn plus"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="cart_list_item cart_list_subtotal">
                        $1,100
                    </div>
                    <button class="cart_list_delete_btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include('php/foot.php'); ?>
