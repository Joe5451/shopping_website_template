<?php include('php/head.php'); ?>

<div class="page_head_banner">
    <img src="img/img2.png" alt="聯絡我們" class="page_head_banner_img">
    <div class="page_head_banner_content">
        <h1 class="page_head_banner_title">聯絡我們</h1>
        <h2 class="page_head_banner_subtitle">Contact Us</h2>
    </div>
</div>

<section class="page_section container mx-auto">
    <nav class="page_breadcrumb">
        <a href="welcome.php" class="page_breadcrumb_link">首頁</a>
        <span class="page_breadcrumb_separator">〉</span>
        <a href="contact.php" class="page_breadcrumb_link active">聯絡我們</a>
    </nav>

    <form action="" class="contact_form">
        <div class="contact_form_group">
            <label class="contact_form_label">姓名</label>
            <input type="text" class="contact_form_control" name="name" >
        </div>
        <div class="contact_form_group">
            <label class="contact_form_label">Email</label>
            <input type="text" class="contact_form_control" name="email" >
        </div>
        <div class="contact_form_group">
            <label class="contact_form_label">連絡電話</label>
            <input type="text" class="contact_form_control" name="phone" >
        </div>
        <div class="contact_form_group">
            <label class="contact_form_label self-start">內容</label>
            <textarea name="content" class="contact_form_textarea custom_scrollbar"></textarea>
        </div>
        <div class="contact_form_submit_wrap">
            <input type="submit" value="送出" id="contact_form_submit">
        </div>
    </form>
    
</section>

<?php include('php/foot.php'); ?>
