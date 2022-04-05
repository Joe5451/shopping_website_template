<?php include('head.php'); ?>

<nav class="admin_nav">
    <a href="product_list.php" class="admin_nav_link active">商品列表</a>
    <a href="product_category_list.php" class="admin_nav_link">商品類別</a>
</nav>

<div class="container mx-auto px-4 pb-8">
    <nav class="admin_sub_nav custom_horizontal_scrollbar">
        <a href="product_list.php" disabled class="admin_sub_nav_link active">列表</a>
        <a href="product_add_form.php" class="admin_sub_nav_link">新增</a>
    </nav>

    <form action="" method="post" class="admin_form max-w-screen-sm">
        <div class="form_group">
            <label class="form_label">商品名稱</label>
            <input type="text" name="product_name" class="form_control" value="千年人參">
        </div>

        <div class="form_group">
            <label class="form_label">分類</label>
            <select name="category" class="form_select">
                <option value="">無</option>
                <option value="天材地寶" selected>天材地寶</option>
            </select>
        </div>

        <div class="form_group">
            <label class="form_label">顯示/隱藏</label>
            <select name="display" class="form_select">
                <option value="true" selected>顯示</option>
                <option value="false">隱藏</option>
            </select>
        </div>

        <div class="form_group">
            <label class="form_label">價格</label>
            <input type="number" name="price" class="form_control" value="1100">
        </div>

        <div class="form_group">
            <label class="form_label">順序</label>
            <input type="number" name="sequence" class="form_control" value="0">
        </div>

        <div class="form_group">
            <label class="form_label">商品摘要</label>
            <textarea name="summary" class="form_textarea custom_scrollbar">強身健體，長命百歲，精力旺盛</textarea>
        </div>

        <div class="form_group">
            <label class="form_label">商品內容</label>
            <textarea name="content" class="form_textarea custom_scrollbar">商品內容</textarea>
        </div>

        <div class="flex">
            <button class="form_btn_primary ml-auto">更新</button>
        </div>
    </form>
</div>

<?php include('foot.php'); ?>
