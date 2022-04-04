<?php include('head.php'); ?>

<nav class="admin_nav">
    <a href="news_list.php" class="admin_nav_link active">最新消息列表</a>
    <a href="#" class="admin_nav_link">最新消息類別</a>
</nav>

<div class="container mx-auto px-4">
    <nav class="admin_sub_nav custom_horizontal_scrollbar">
        <a href="news_list.php" disabled class="admin_sub_nav_link active">列表</a>
        <a href="news_add_form.php" class="admin_sub_nav_link">新增</a>
    </nav>

    <div class="table_container overflow-x-auto custom_horizontal_scrollbar">
        <table class="custom_table table-auto w-full border-collapse border border-slate-400">
            <thead class="bg-slate-100 text-slate-700">
                <tr>
                    <th class="border border-slate-300" width="80">序列</th>
                    <th class="border border-slate-300" width="120">日期</th>
                    <th class="border border-slate-300" width="100">分類</th>
                    <th class="border border-slate-300">標題</th>
                    <th class="border border-slate-300" width="80">動作</th>
                </tr>
            </thead>
            <tbody class="text-slate-700">
                <tr>
                    <th class="border border-slate-300">1</th>
                    <th class="border border-slate-300">2022/01/05</th>
                    <th class="border border-slate-300">好康優惠</th>
                    <th class="border border-slate-300 text-left">最新商品快報</th>
                    <th class="border border-slate-300">
                        <a href="#" class="link_btn">設定</a>
                    </th>
                </tr>
                <tr>
                    <th class="border border-slate-300">2</th>
                    <th class="border border-slate-300">2022/01/04</th>
                    <th class="border border-slate-300">好康優惠</th>
                    <th class="border border-slate-300 text-left">最新商品快報</th>
                    <th class="border border-slate-300">
                        <a href="#" class="link_btn">設定</a>
                    </th>
                </tr>
                <tr>
                    <th class="border border-slate-300">3</th>
                    <th class="border border-slate-300">2022/01/03</th>
                    <th class="border border-slate-300">好康優惠</th>
                    <th class="border border-slate-300 text-left">最新商品快報</th>
                    <th class="border border-slate-300">
                        <a href="#" class="link_btn">設定</a>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include('foot.php'); ?>
