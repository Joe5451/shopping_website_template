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

    <form action="" class="form">
        <h2 class="form_title">會員註冊</h2>

        <div class="form_group">
            <label class="form_label form_label_sm">帳號</label>
            <input type="text" class="form_control" name="email" >
        </div>
        <div class="form_group">
            <label class="form_label form_label_sm">密碼</label>
            <input type="password" class="form_control" name="password" >
        </div>

        <div class="form_submit_wrap">
            <input type="submit" value="註冊" id="form_submit">
        </div>
    </form>

</section>

<?php include('php/foot.php'); ?>
