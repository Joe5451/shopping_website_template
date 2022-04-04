<?php include('head.php'); ?>

<nav class="admin_nav">
    <a href="news_list.php" class="admin_nav_link">最新消息列表</a>
    <a href="news_category.php" class="admin_nav_link active">最新消息類別</a>
</nav>

<div class="container mx-auto px-4">

    <nav class="admin_sub_nav custom_horizontal_scrollbar">
        <a href="news_category_list.php" class="admin_sub_nav_link">列表</a>
        <a href="news_category_add_form.php" class="admin_sub_nav_link active">新增</a>
    </nav>
    
    <form action="" method="post" class="admin_form max-w-screen-sm">
        <div class="form_group">
            <label class="form_label">分類名稱</label>
            <input type="text" name="category_name" class="form_control">
        </div>

        <div class="form_group">
            <label class="form_label">順序</label>
            <input type="number" name="sequence" class="form_control" value="0">
        </div>

        <div class="flex">
            <button class="form_btn_primary ml-auto">新增</button>
        </div>
    </form>
</div>

<?php include('foot.php'); ?>
