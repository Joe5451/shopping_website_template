<?php include('head.php'); ?>

<nav class="admin_nav">
    <a href="member_list.php" class="admin_nav_link active">會員管理</a>
</nav>

<div class="container mx-auto px-4 pb-8">
    <nav class="admin_sub_nav custom_horizontal_scrollbar">
        <a href="member_list.php" disabled class="admin_sub_nav_link active">列表</a>
        <a href="member_add_form.php" class="admin_sub_nav_link">新增</a>
        <a href="#" class="admin_sub_nav_link">勾選啟用</a>
        <a href="#" class="admin_sub_nav_link">勾選停用</a>
    </nav>

    <div class="table_container overflow-x-auto custom_horizontal_scrollbar">
        <form action="" method="post">
            <table class="custom_table table-auto w-full border-collapse border border-slate-400 min-w-max">
                <thead class="bg-slate-100 text-slate-700">
                    <tr>
                        <th class="border border-slate-300" width="80">
                            <label>
                                全選 <input type="checkbox" id="all_items_checked">
                            </label>
                        </th>
                        <th class="border border-slate-300" width="190">加入時間</th>
                        <th class="border border-slate-300">帳號</th>
                        <th class="border border-slate-300">姓名</th>
                        <th class="border border-slate-300" width="80">狀態</th>
                        <th class="border border-slate-300" width="80">動作</th>
                    </tr>
                    <script>
                        $('#all_items_checked').click(function() {
                            $('input[name="multiple_items_checked[]"]').prop('checked', $(this).prop('checked'));
                        });
                    </script>
                </thead>
                <tbody class="text-slate-700">
                    <?php
                        for ($i=1; $i<=10; $i++) {
                            echo <<<NewsList
                                <tr>
                                    <td class="border border-slate-300 text-right">
                                        $i <input type="checkbox" name="multiple_items_checked[]" class="mr-2">
                                    </td>
                                    <td class="border border-slate-300">2022/01/05 13:15:30</td>
                                    <td class="border border-slate-300">tester$i@email.com</td>
                                    <td class="border border-slate-300">測試員$i</td>
                                    <td class="border border-slate-300">啟用</td>
                                    <td class="border border-slate-300">
                                        <a href="member_update_form.php" class="link_btn">設定</a>
                                    </td>
                                </tr>
NewsList;
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</div>

<?php include('foot.php'); ?>
