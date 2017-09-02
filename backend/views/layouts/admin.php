<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>
    <link href="/images/index.css" type="text/css" rel="stylesheet"/>
    <script src="/images/jquery.js"></script>
</head>
<body>
<header>
    <h1>网站后台管理系统</h1>
    <p>
        <a href="index.php?r=index/index"><span class="icon home"></span>系统首页</a>
        <a href="#"><span class="icon quit"></span>安全退出</a>
    </p>
</header>
<section>
    <nav>
        <h3>欢迎您来到管理后台</h3>
        <p>登陆名：<strong>Admin</strong><br/>身　份：<strong>超级管理员</strong></p>
        <dl>
            <dt><span class="icon board"></span>文章分类</dt>
            <dd>
                <a href="/index.php?r=category/add">-&emsp;新增单页</a>
                <a href="/index.php?r=category/index">-&emsp;单页列表</a>
            </dd>
            <dt><span class="icon news"></span>新闻管理</dt>
            <dd>
                <a href="#">-&emsp;发布新闻</a>
                <a href="#">-&emsp;新闻列表</a>
                <a href="#">-&emsp;新闻分类</a>
            </dd>
            <dt><span class="icon pro"></span>产品管理</dt>
            <dd>
                <a href="#">-&emsp;新增产品</a>
                <a href="#">-&emsp;产品列表</a>
                <a href="#">-&emsp;产品分类</a>
            </dd>
            <dt><span class="icon book"></span>留言管理</dt>
            <dd>
                <a href="#">-&emsp;留言列表</a>
            </dd>
            <dt><span class="icon flink"></span>友情连接管理</dt>
            <dd>
                <a href="#">-&emsp;新增连接</a>
                <a href="#">-&emsp;连接列表</a>
            </dd>
            <dt><span class="icon admin"></span>管理员管理</dt>
            <dd>
                <a href="#">-&emsp;新增管理员</a>
                <a href="#">-&emsp;管理员列表</a>
            </dd>
        </dl>
    </nav>

    <div class="mainbox">
        <?= $content ?>
    </div>
</section>
<script>
    $(function(){
        $('dt').click(function(){
            var obj=$(this).next();
            if($(this).next().css('display')=='block'){
                obj.hide('fast');
                $(this).removeClass('on');
            }else{
                obj.show('fast');
                $(this).addClass('on');
            }
        });
    });
</script>
</body>
</html>

