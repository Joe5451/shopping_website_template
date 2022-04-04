<?php include('head.php'); ?>

<nav class="admin_nav">
    <a href="member_list.php" class="admin_nav_link active">會員管理</a>
</nav>

<div class="container mx-auto px-4 pb-8">
    <nav class="admin_sub_nav custom_horizontal_scrollbar">
        <a href="member_list.php" disabled class="admin_sub_nav_link active">列表</a>
        <a href="member_add_form.php" class="admin_sub_nav_link">新增</a>
    </nav>

    <form action="" method="post" class="admin_form max-w-screen-sm">
        <div class="form_group">
            <label class="form_label">加入時間</label>
            <input type="text" class="form_control" value="2022/01/05 13:15:30" readonly>
        </div>
        
        <div class="form_group">
            <label class="form_label">帳號</label>
            <input type="text" name="account" class="form_control" value="tester01@email.com">
        </div>

        <div class="form_group">
            <label class="form_label">姓名</label>
            <input type="text" name="name" class="form_control" value="測試員">
        </div>

        <div class="form_group">
            <label class="form_label">縣市</label>
            <select name="city" class="form_select">
                <option value="">請選擇縣市</option>
            </select>
        </div>

        <div class="form_group">
            <label class="form_label">區域</label>
            <select name="town" class="form_select">
                <option value="">請選擇鄉鎮市區</option>
            </select>
        </div>

        <div class="form_group">
            <label class="form_label">地址</label>
            <input type="text" name="address" class="form_control" value="測試地址">
        </div>

        <div class="form_group">
            <label class="form_label">密碼</label>
            <input type="password" name="password" class="form_control" placeholder="若不更改則留空">
        </div>

        <div class="form_group">
            <label class="form_label">狀態</label>
            <select name="display" class="form_select">
                <option value="true" selected>啟用</option>
                <option value="false">停用</option>
            </select>
        </div>

        <div class="form_group">
            <label class="form_label">管理員備註</label>
            <textarea name="remark" class="form_textarea custom_scrollbar">測試會員</textarea>
        </div>

        <div class="flex">
            <button class="form_btn_primary ml-auto">更新</button>
        </div>
    </form>
</div>

<?php include('foot.php'); ?>
