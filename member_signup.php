<?php include('php/head.php'); ?>

<div class="page_head_banner">
    <img src="img/img2.png" alt="會員註冊" class="page_head_banner_img">
    <div class="page_head_banner_content">
        <h1 class="page_head_banner_title">會員註冊</h1>
        <h2 class="page_head_banner_subtitle">Sign Up</h2>
    </div>
</div>

<section class="page_section container mx-auto">
    <nav class="page_breadcrumb">
        <a href="welcome.php" class="page_breadcrumb_link">首頁</a>
        <span class="page_breadcrumb_separator">〉</span>
        <a href="member_signup.php" class="page_breadcrumb_link active">會員註冊</a>
    </nav>

    <form action="" method="post" class="form">
        <h2 class="form_title">會員註冊</h2>

        <div class="form_group">
            <label class="form_label">帳號</label>
            <div class="form_control_wrap">
                <input type="text" class="form_control" name="email" >
                <span class="form_control_border_top_left"></span>
                <span class="form_control_border_bottom_right"></span>
            </div>
            <div class="form_control_notify">請輸入您的 Email</div>
        </div>

        <div class="form_group">
            <label class="form_label">姓名</label>
            <div class="form_control_wrap">
                <input type="password" class="form_control" name="name" >
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
                <input type="text" class="form_control" name="address" >
                <span class="form_control_border_top_left"></span>
                <span class="form_control_border_bottom_right"></span>
            </div>
        </div>

        <div class="form_group">
            <label class="form_label">密碼</label>
            <div class="form_control_wrap">
                <input type="password" class="form_control" name="password" >
                <span class="form_control_border_top_left"></span>
                <span class="form_control_border_bottom_right"></span>
            </div>
            <div class="form_control_notify">密碼須為8-25碼英文或數字</div>
        </div>

        <div class="form_group">
            <label class="form_label">確認密碼</label>
            <div class="form_control_wrap">
                <input type="password" class="form_control" name="password" >
                <span class="form_control_border_top_left"></span>
                <span class="form_control_border_bottom_right"></span>
            </div>
            <div class="form_control_notify">請再次輸入密碼</div>
        </div>

        <div class="form_submit_wrap">
            <input type="submit" value="註冊" id="form_submit">
        </div>
    </form>

</section>

<?php include('php/foot.php'); ?>
