<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>中国·支教联盟</title>
    <!--
    至看到这段文字的你：
    Hi~
    中国支教联盟网站急缺建设志愿者&维护志愿者，如果你对维护联盟网站感兴趣，即使因为现实的原因你不能投身偏远地区，
    但是你的行为一样可以帮助到所有的有志于支教的人们，如果你心动了，不妨用页面中的联系方式联系我们。
    当然，如果你发现了网站的缺陷或者漏洞，也不妨告知我们。
                                                                    @soulteary
                                                                    2013/07/20
    -->
    <meta name="keywords" content="中国支教联盟,志愿者招募,志愿者,招募,支教,支教网,中国支教网,支教联盟,中国支教,中国支教联盟网,支教网站,go9999,中国支教联盟官网,云南支教网,支教中国,全国支教网,支教 中国,中华支教,短期支教,长期支教,支教志愿者,四川支教网,贵州四川广西湖南支教">
    <meta name="description" content="中国•支教联盟(CNAEF)，创办于2006年4月。自成立以来，长期致力于为发达地区爱心咨询寻找资助对象，为欠发达地区教育引入社会各界力量。">
    <meta name="author" content="soulteary inspire by Thomas Park">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl?>/assets/go9999v0/css/core.min.css?v=20150806">
    <meta property="wb:webmaster" content="c6eb3350438219e9">
    <!--[if lt IE 9]>
    <script src="assets/js/html5.js"></script>
    <![endif]-->
</head>
<body class="go9999" id="<?php echo $this->bodyId;?>" data-spy="scroll" data-target=".subnav" data-offset="80">
<!-- nav bar -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">中国·支教联盟</a>

            <div class="nav-collapse collapse" id="main-menu">
                <ul class="nav" id="main-menu-left">
                    <?php if ($this->action->id == 'index'): //only show this 4 for index page?>
                        <li><a href="#about">关于</a></li>
                        <li><a href="#we-arrived-title">支教足迹</a></li>
                        <li><a href="#conditions">志愿者须知</a></li>
                        <li><a href="#our-album">支教掠影</a></li>
                    <?php endif;?>
                    <li><a href="/contact">留言墙</a></li>
                    <li><a href="http://bbs.go9999.com" target="_blank" id="our-bbs" style="opacity: 0.506603;">联盟论坛</a></li>
                </ul>
                <ul class="nav pull-right" id="main-menu-right">
                    
                        <li><a rel="tooltip" href="/join" title="我要报名参加">我要报名 <i class="icon-tasks"></i></a></li>
                        <li><a rel="tooltip" href="/process" title="查询报名进度">查询报名进度 <i class="icon-search"></i></a></li>
                    
                    <li><a rel="tooltip" href="http://bbs.go9999.com/forum.php?mod=forumdisplay&amp;fid=118" title="我要反馈建议" target="_blank">反馈建议 <i class="icon-share-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
<!-- body -->
<?php echo $content;?>

<!-- footer -->
<footer id="footer">
    
    <hr>
    <ul class="nav nav-pills">
        <li class="active"><a href="http://www.go9999.com/links/">友情链接</a></li>
        <li><a class="btn-mini" href="http://bbs.hfly.net/" target="_blank">庐阳教育论坛</a></li>
        <li><a class="btn-mini" href="http://bbs.cnbayue.com/" target="_blank" title="滴水公益论坛">滴水公益论坛</a></li>
        <li><a class="btn-mini" href="http://www.bmf-sc.com/" target="_blank" title="四川仁爱医疗基金会">四川仁爱医疗基金会</a></li>
        <li><a class="btn-mini" href="http://www.ew125.com/" target="_blank" title="成都抗癌协会">成都抗癌协会</a></li>
        <li><a class="btn-mini" href="http://xzszhc.2008red.com/" target="_blank" title="进藏教师家园">进藏教师家园</a></li>
        <li><a class="btn-mini" href="http://www.ricedonate.com/" target="_blank" title="米公益">米公益</a></li>
    </ul>
    
    <hr>
    <p class="pull-right"><a id="go-top" href="#top">返回顶部</a></p>

    <div class="links">
        <a href="http://bbs.go9999.com">论坛</a>
        <a href="http://blog.go9999.com">博客</a>
        <a href="http://e.weibo.com/go9999">微博</a>
        <a href="http://about.go9999.com">关于</a>
        <a href="http://site.douban.com/118628/">豆瓣小站</a>
        <a href="http://www.douban.com/group/go9999/">豆瓣小组</a>
        <a href="http://zhan.renren.com/go9999">人人小站</a>
        <a href="http://page.renren.com/601714744">人人主页</a>
        <a href="http://tieba.baidu.com/f?kw=%D6%D0%B9%FA%D6%A7%BD%CC%C1%AA%C3%CB">百度贴吧</a>
        <a href="/admin" id="admin-login-disabled">管理后台</a>
    </div>
    <!--
    Rebuild by <a href="http://www.soulteary.com">soulteary</a>, inspired by <a href="http://thomaspark.me">Thomas
        Park</a>.<br>
        -->
    Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.<br>
    Based on <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>. Hosted on <a href="http://pages.github.com/">GitHub</a>.
    Icons from <a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald
        Hiller</a>.<p></p>

    <p>Copyright ©2005-2015 Go9999.com All Rights Reserved. 原备案号
        <del style="color: #A8A3A3;">浙ICP备07022599号</del>
        ，现备案号<a href="http://www.miibeian.gov.cn/" target="_blank">浙ICP备12032988号-1</a>
        </p><div class="logo-container">
            <a class="logo-pic" href="http://sae.sina.com.cn" target="_blank" title="中国支教联盟网站正运行在Sina App Engine上。">
                <img border="0" src="<?php echo Yii::app()->baseUrl;?>/assets/img/sae-support.png?v=20150610">
            </a>
            <a class="logo-pic" href="http://mos.meituan.com" target="_blank" title="美团云赞助联盟一年运行时间。">
                <img border="0" src="<?php echo Yii::app()->baseUrl;?>/assets/img/mt-logo.png?v=20150610">
            </a>
            <a class="logo-pic" href="http://webscan.360.cn/index/checkwebsite/url/www.go9999.com">
                <img border="0" src="http://img.webscan.360.cn/status/pai/hash/48769dbd5f34f2752487196d0b70a0ea?v=20150610">
            </a>
        </div>
    <p></p>
</footer>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/go9999v0/js/core.min.js?20150806"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/assets/go9999v0/js/app.min.js?20150806"></script>
<script src="http://hm.baidu.com/h.js?724519214f055ce821d3d1235c7e3621" type="text/javascript"></script>
<script type="text/html" id="common-modal-tpl">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body"></div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</script>

</body></html>