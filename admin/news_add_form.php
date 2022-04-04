<?php include('head.php'); ?>

<nav class="admin_nav">
    <a href="news_list.php" class="admin_nav_link active">最新消息列表</a>
    <a href="#" class="admin_nav_link">最新消息類別</a>
</nav>

<div class="container mx-auto px-4">
    <nav class="admin_sub_nav custom_horizontal_scrollbar">
        <a href="news_list.php" class="admin_sub_nav_link">列表</a>
        <a href="news_add_form.php" class="admin_sub_nav_link active">新增</a>
    </nav>

    <form action="" method="post" class="admin_form max-w-screen-sm">
        <div class="form_group">
            <label class="form_label">標題</label>
            <input type="text" name="title" class="form_control">
        </div>

        <div class="form_group">
            <label class="form_label">分類</label>
            <select name="category" class="form_select">
                <option value="">無</option>
                <option value="好康優惠">好康優惠</option>
            </select>
        </div>

        <div class="form_group">
            <label class="form_label">日期</label>
            <input type="text" name="date" class="form_control">
        </div>

        <div class="form_group">
            <label class="form_label">摘要</label>
            <textarea name="summary" class="form_textarea"></textarea>
        </div>

        <div class="form_group">
            <label class="form_label">內容</label>
            <textarea name="content" class="form_textarea"></textarea>
        </div>

        <div class="flex">
            <button class="form_btn_primary ml-auto">新增</button>
        </div>
    </form>
</div>

<?php include('foot.php'); ?>
