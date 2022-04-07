<?php include('php/head.php'); ?>

<div class="page_head_banner">
    <img src="img/img2.png" alt="會員中心" class="page_head_banner_img">
    <div class="page_head_banner_content">
        <h1 class="page_head_banner_title">會員資料</h1>
        <h2 class="page_head_banner_subtitle">Member Data</h2>
    </div>
</div>

<section class="page_section container mx-auto">
    <nav class="page_breadcrumb">
        <a href="welcome.php" class="page_breadcrumb_link">首頁</a>
        <span class="page_breadcrumb_separator">〉</span>
        <a href="member_update_form.php" class="page_breadcrumb_link">會員中心</a>
        <span class="page_breadcrumb_separator">〉</span>
        <a href="member_update_form.php" class="page_breadcrumb_link active">會員資料</a>
    </nav>

    <div class="flex items-start flex-wrap">
        <div class="w-full md:w-1/4 mb-8">
            <button class="member_sidebar_toggle_btn_mobile">
                <i class="fas fa-caret-down"></i>
                會員中心
            </button>
            <div class="member_sidebar_content w-full md:w-72 max-w-full">
                <a href="member_update_form.php" class="member_sidebar_link">會員資料</a>
                <a href="#" class="member_sidebar_link">訂單記錄</a>
            </div>

            <script>
                $('.member_sidebar_toggle_btn_mobile').click(function() {
                    $(this).find('i').toggleClass('fa-rotate-180');
                    $('.member_sidebar_content').stop().slideToggle();
                });
            </script>
        </div>
        <div class="w-full md:w-3/4 px-4">
            <form action="" method="post" class="form">
                <h2 class="form_title">會員資料</h2>
        
                <div class="form_group">
                    <label class="form_label">帳號</label>
                    <div class="form_control_wrap">
                        <input type="text" class="form_control" value="developer01@email.com" readonly >
                        <span class="form_control_border_top_left"></span>
                        <span class="form_control_border_bottom_right"></span>
                    </div>
                </div>
        
                <div class="form_group">
                    <label class="form_label">姓名</label>
                    <div class="form_control_wrap">
                        <input type="text" class="form_control" name="name" value="測試員">
                        <span class="form_control_border_top_left"></span>
                        <span class="form_control_border_bottom_right"></span>
                    </div>
                </div>
        
                <div class="form_group">
                    <label class="form_label">縣市</label>
                    <div class="form_control_wrap">
                        <select name="city" class="form_select">
                            <option value="">請選擇縣市</option>
                        </select>
                        <span class="form_control_border_top_left"></span>
                        <span class="form_control_border_bottom_right"></span>
                    </div>
                </div>
        
                <div class="form_group">
                    <label class="form_label">區域</label>
                    <div class="form_control_wrap">
                        <select name="town" class="form_select">
                            <option value="">請選擇鄉鎮市區</option>
                        </select>
                        <span class="form_control_border_top_left"></span>
                        <span class="form_control_border_bottom_right"></span>
                    </div>
                </div>
        
                <div class="form_group">
                    <label class="form_label">地址</label>
                    <div class="form_control_wrap">
                        <input type="text" class="form_control" name="address" value="測試地址">
                        <span class="form_control_border_top_left"></span>
                        <span class="form_control_border_bottom_right"></span>
                    </div>
                </div>
        
                <div class="form_group">
                    <label class="form_label">更改密碼</label>
                    <div class="form_control_wrap">
                        <input type="password" class="form_control" name="password" >
                        <span class="form_control_border_top_left"></span>
                        <span class="form_control_border_bottom_right"></span>
                    </div>
                    <div class="form_control_notify">不更改請留空，密碼須為8-25碼英文或數字</div>
                </div>
        
                <div class="form_group">
                    <label class="form_label">確認密碼</label>
                    <div class="form_control_wrap">
                        <input type="password" class="form_control" >
                        <span class="form_control_border_top_left"></span>
                        <span class="form_control_border_bottom_right"></span>
                    </div>
                    <div class="form_control_notify">請再次輸入密碼</div>
                </div>
        
                <div class="form_submit_wrap">
                    <input type="submit" value="變更" id="form_submit">
                </div>
            </form>
        </div>
    </div>


</section>

<?php include('php/foot.php'); ?>
