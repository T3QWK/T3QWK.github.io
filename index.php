<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>T3Q维基</title>

<style>
#box{
	/* [disabled]margin:auto; */	
}

h1{
	font-size: 95px;
}


p{
	font-size: 50px;
}

big{
	font-size: 72px;
}


#wanzheng{
	font-size: 50px;
}

#toc3{
	font-size: 65px;
}
#wanzheng2{
	font-size: 50px;
	color:red;
	
}

#wanzheng2:active{
	font-size: 50px;
	color:#00F;
	
}


:root,[data-bs-theme=light]{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-black:#000;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-gray-100:#f8f9fa;--bs-gray-200:#e9ecef;--bs-gray-300:#dee2e6;--bs-gray-400:#ced4da;--bs-gray-500:#adb5bd;--bs-gray-600:#6c757d;--bs-gray-700:#495057;--bs-gray-800:#343a40;--bs-gray-900:#212529;--bs-primary:#0d6efd;--bs-secondary:#6c757d;--bs-success:#198754;--bs-info:#0dcaf0;--bs-warning:#ffc107;--bs-danger:#dc3545;--bs-light:#f8f9fa;--bs-dark:#212529;--bs-primary-rgb:13,110,253;--bs-secondary-rgb:108,117,125;--bs-success-rgb:25,135,84;--bs-info-rgb:13,202,240;--bs-warning-rgb:255,193,7;--bs-danger-rgb:220,53,69;--bs-light-rgb:248,249,250;--bs-dark-rgb:33,37,41;--bs-primary-text-emphasis:#052c65;--bs-secondary-text-emphasis:#2b2f32;--bs-success-text-emphasis:#0a3622;--bs-info-text-emphasis:#055160;--bs-warning-text-emphasis:#664d03;--bs-danger-text-emphasis:#58151c;--bs-light-text-emphasis:#495057;--bs-dark-text-emphasis:#495057;--bs-primary-bg-subtle:#cfe2ff;--bs-secondary-bg-subtle:#e2e3e5;--bs-success-bg-subtle:#d1e7dd;--bs-info-bg-subtle:#cff4fc;--bs-warning-bg-subtle:#fff3cd;--bs-danger-bg-subtle:#f8d7da;--bs-light-bg-subtle:#fcfcfd;--bs-dark-bg-subtle:#ced4da;--bs-primary-border-subtle:#9ec5fe;--bs-secondary-border-subtle:#c4c8cb;--bs-success-border-subtle:#a3cfbb;--bs-info-border-subtle:#9eeaf9;--bs-warning-border-subtle:#ffe69c;--bs-danger-border-subtle:#f1aeb5;--bs-light-border-subtle:#e9ecef;--bs-dark-border-subtle:#adb5bd;--bs-white-rgb:255,255,255;--bs-black-rgb:0,0,0;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue","Noto Sans","Liberation Sans",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));--bs-body-font-family:var(--bs-font-sans-serif);--bs-body-font-size:1rem;--bs-body-font-weight:400;--bs-body-line-height:1.5;--bs-body-color:#212529;--bs-body-color-rgb:33,37,41;--bs-body-bg:#fff;--bs-body-bg-rgb:255,255,255;--bs-emphasis-color:#000;--bs-emphasis-color-rgb:0,0,0;--bs-secondary-color:rgba(33, 37, 41, 0.75);--bs-secondary-color-rgb:33,37,41;--bs-secondary-bg:#e9ecef;--bs-secondary-bg-rgb:233,236,239;--bs-tertiary-color:rgba(33, 37, 41, 0.5);--bs-tertiary-color-rgb:33,37,41;--bs-tertiary-bg:#f8f9fa;--bs-tertiary-bg-rgb:248,249,250;--bs-heading-color:inherit;--bs-link-color:#0d6efd;--bs-link-color-rgb:13,110,253;--bs-link-decoration:underline;--bs-link-hover-color:#0a58ca;--bs-link-hover-color-rgb:10,88,202;--bs-code-color:#d63384;--bs-highlight-bg:#fff3cd;--bs-border-width:1px;--bs-border-style:solid;--bs-border-color:#dee2e6;--bs-border-color-translucent:rgba(0, 0, 0, 0.175);--bs-border-radius:0.375rem;--bs-border-radius-sm:0.25rem;--bs-border-radius-lg:0.5rem;--bs-border-radius-xl:1rem;--bs-border-radius-xxl:2rem;--bs-border-radius-2xl:var(--bs-border-radius-xxl);--bs-border-radius-pill:50rem;--bs-box-shadow:0 0.5rem 1rem rgba(0, 0, 0, 0.15);--bs-box-shadow-sm:0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);--bs-box-shadow-lg:0 1rem 3rem rgba(0, 0, 0, 0.175);--bs-box-shadow-inset:inset 0 1px 2px rgba(0, 0, 0, 0.075);--bs-focus-ring-width:0.25rem;--bs-focus-ring-opacity:0.25;--bs-focus-ring-color:rgba(13, 110, 253, 0.25);--bs-form-valid-color:#198754;--bs-form-valid-border-color:#198754;--bs-form-invalid-color:#dc3545;--bs-form-invalid-border-color:#dc3545}[data-bs-theme=dark]{color-scheme:dark;--bs-body-color:#adb5bd;--bs-body-color-rgb:173,181,189;--bs-body-bg:#212529;--bs-body-bg-rgb:33,37,41;--bs-emphasis-color:#fff;--bs-emphasis-color-rgb:255,255,255;--bs-secondary-color:rgba(173, 181, 189, 0.75);--bs-secondary-color-rgb:173,181,189;--bs-secondary-bg:#343a40;--bs-secondary-bg-rgb:52,58,64;--bs-tertiary-color:rgba(173, 181, 189, 0.5);--bs-tertiary-color-rgb:173,181,189;--bs-tertiary-bg:#2b3035;--bs-tertiary-bg-rgb:43,48,53;--bs-primary-text-emphasis:#6ea8fe;--bs-secondary-text-emphasis:#a7acb1;--bs-success-text-emphasis:#75b798;--bs-info-text-emphasis:#6edff6;--bs-warning-text-emphasis:#ffda6a;--bs-danger-text-emphasis:#ea868f;--bs-light-text-emphasis:#f8f9fa;--bs-dark-text-emphasis:#dee2e6;--bs-primary-bg-subtle:#031633;--bs-secondary-bg-subtle:#161719;--bs-success-bg-subtle:#051b11;--bs-info-bg-subtle:#032830;--bs-warning-bg-subtle:#332701;--bs-danger-bg-subtle:#2c0b0e;--bs-light-bg-subtle:#343a40;--bs-dark-bg-subtle:#1a1d20;--bs-primary-border-subtle:#084298;--bs-secondary-border-subtle:#41464b;--bs-success-border-subtle:#0f5132;--bs-info-border-subtle:#087990;--bs-warning-border-subtle:#997404;--bs-danger-border-subtle:#842029;--bs-light-border-subtle:#495057;--bs-dark-border-subtle:#343a40;--bs-heading-color:inherit;--bs-link-color:#6ea8fe;--bs-link-hover-color:#8bb9fe;--bs-link-color-rgb:110,168,254;--bs-link-hover-color-rgb:139,185,254;--bs-code-color:#e685b5;--bs-border-color:#495057;--bs-border-color-translucent:rgba(255, 255, 255, 0.15);--bs-form-valid-color:#75b798;--bs-form-valid-border-color:#75b798;--bs-form-invalid-color:#ea868f;--bs-form-invalid-border-color:#ea868f}*,::after,::before{box-sizing:border-box}{:root{scroll-behavior:smooth}}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:.875em;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote>:last-child{margin-bottom:0}.blockquote-footer{margin-top:-1rem;margin-bottom:1rem;font-size:.875em;color:#6c757d}.blockquote-footer::before{content:"— "}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:var(--bs-body-bg);border:var(--bs-border-width) solid var(--bs-border-color);border-radius:var(--bs-border-radius);max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:.875em;color:var(--bs-secondary-color)}root{--bs-breakpoint-xs:0;--bs-breakpoint-sm:576px;--bs-breakpoint-md:768px;--bs-breakpoint-lg:992px;--bs-breakpoint-xl:1200px;--bs-breakpoint-xxl:1400px}.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(-1 * var(--bs-gutter-y));margin-right:calc(-.5 * var(--bs-gutter-x));margin-left:calc(-.5 * var(--bs-gutter-x))}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y)}.col{flex:1 0 0%}.navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}.navbar-expand-sm .offcanvas{position:static;z-index:auto;flex-grow:1;width:auto!important;height:auto!important;visibility:visible!important;background-color:transparent!important;border:0!important;transform:none!important;transition:none}.navbar-expand-sm .offcanvas .offcanvas-header{display:none}.navbar-expand-sm .offcanvas .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:768px){.navbar-expand-md{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-md .navbar-nav{flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:var(--bs-navbar-nav-link-padding-x);padding-left:var(--bs-navbar-nav-link-padding-x)}.navbar-expand-md .navbar-nav-scroll{overflow:visible}.navbar-expand-md .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}.navbar-expand-md .offcanvas{position:static;z-index:auto;flex-grow:1;width:auto!important;height:auto!important;visibility:visible!important;background-color:transparent!important;border:0!important;transform:none!important;transition:none}.navbar-expand-md .offcanvas .offcanvas-header{display:none}.navbar-expand-md .offcanvas .offcanvas-body{display:flex;flex-grow:0;padding:0;overflow-y:visible}}@media (min-width:992px){.navbar-expand-lg{flex-wrap:nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:var(--bs-navbar-nav-link-padding-x);padding-left:var(--bs-navbar-nav-link-padding-x)}.navbar-expand-lg .navbar-nav-scroll{overflow:visible}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}.navbar-expand-lg .offcanvas{position:static;z-index:auto;flex-grow:1;width:auto!important;height:auto!important;visibility:visible!important;background-color:transparent!important;border:0!important;transform:none!important;transition:none}.card{--bs-card-spacer-y:1rem;--bs-card-spacer-x:1rem;--bs-card-title-spacer-y:0.5rem;--bs-card-title-color: ;--bs-card-subtitle-color: ;--bs-card-border-width:var(--bs-border-width);--bs-card-border-color:var(--bs-border-color-translucent);--bs-card-border-radius:var(--bs-border-radius);--bs-card-box-shadow: ;--bs-card-inner-border-radius:calc(var(--bs-border-radius) - (var(--bs-border-width)));--bs-card-cap-padding-y:0.5rem;--bs-card-cap-padding-x:1rem;--bs-card-cap-bg:rgba(var(--bs-body-color-rgb), 0.03);--bs-card-cap-color: ;--bs-card-height: ;--bs-card-color: ;--bs-card-bg:var(--bs-body-bg);--bs-card-img-overlay-padding:1rem;--bs-card-group-margin:0.75rem;position:relative;display:flex;flex-direction:column;min-width:0;height:var(--bs-card-height);color:var(--bs-body-color);word-wrap:break-word;background-color:var(--bs-card-bg);background-clip:border-box;border:var(--bs-card-border-width) solid var(--bs-card-border-color);border-radius:var(--bs-card-border-radius)}.card-subtitle{margin-top:calc(-.5 * var(--bs-card-title-spacer-y));margin-bottom:0;color:var(--bs-card-subtitle-color)}.card-text:last-child{margin-bottom:0}.card-link+.card-link{margin-left:var(--bs-card-spacer-x)}.card-header{padding:var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);margin-bottom:0;color:var(--bs-card-cap-color);background-color:var(--bs-card-cap-bg);border-bottom:var(--bs-card-border-width) solid var(--bs-card-border-color)}


#tiantuanbiaotiwenzi {
	font-size: 50px;
}
.my-0.fw-normal {
	font-size: 60px;
}



.fangwenliang{
	color:#03F;
}



</style>

</head>

<body>
<div id="box">

<img src="素材/首页标志.png"width="300" height="450" class="mw-file-element" decoding="async" top: 0; align="right">

<div>
<h1 id="firstHeading">首页-T3Q维基</h1>
</div>
<div id="baikediyi" style="background:linear-gradient(to bottom right, #0F0, #0F9); box-shadow:grey 0px 0px 5px; border-radius:20px; color: #000; font-size:1em; text-shadow:white 0px 0px 10px,white 0px 0px 10px;padding:10.865px;" ><b><big><big><big>T3Q维基</big></big></big></b>
<p>揭露国漫圈黑幕的百科全书 
 <?php include 'count_pages.php'; ?>
</span> &nbsp;

</p>
</div>

</div>




<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">公告</th>
</tr><tr>
<td style="padding:20px; padding-top:5px;"><big><big><big>Welcome to <b>T3Q维基</b>！</big></big></big>
  <p><big><big><b><a href="概念/概念·T3Q.html" >T3Q</a>维基旨在记录国漫圈反动分子人肉搜索、网络暴力、敲诈勒索等犯罪行为。</b></big></big></p>
  <h2 id="toc3">本站不止发布国漫人员内容，也会介绍其他污染互联网的毒瘤人物的信息，例如主播等 </h2>
  <p>考虑到不少初来本站的人士，可能尚未客观了解这些反动分子的所作所为，因而产生同情，在此简要介绍一些<a href="国漫圈不为人知的黑幕.html">国漫圈不为人知的黑幕</a>。
</p>
  <p>官方投稿邮箱tqwk53358@gmail.com</p>
  <p><big><a href="T3Q维基常见问题解答.html">答疑</a> | <a href="概念/概念·T3Q.html" >关于</a></big></p></td>
</tr>
</tbody></table>


<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">C位出道</th>
</tr><tr>
<td style="padding:20px; padding-top:5px;"><img src="素材/吴佳彧/吴佳彧.jpg" width="320" height="455" align="right">
  <p align="left"><p align="left"><span style="border:solid thin black;"><b>吴佳彧</b></span>，上海市嘉定区华亭镇的底层窝囊废，出生于2009年11月30日。圈名为随风。  </p>
  <p align="left">吴佳彧早期还只是熊出没吧一个平平无奇的弱智，直到有一天在新黑熊出没吧对当地原住民进行骚扰，彼时吴佳彧的昵称为六脚鸡。吴佳彧在与同期恶俗熊痴分子西域古国、幸运熊二等人于黑熊吧大肆破坏，此时的吴佳彧年仅13岁，便已经在百度贴吧创下了这段传奇神话。<br>
    2023年春夏之交，随着幸运熊二和西域古国退出了随风集团，吴佳彧开始转为巴结各路势力，先是和郑雨柃合作去国漫圈爆吧，在郑雨柃洗白投降之后，又巴结上了杨舒予，周泽忠，冯旭等恶俗腐朽势力，在巴结的途中，吴佳彧进入了喷系。吴佳彧便是在此时更换了自己的新身份“打倒一栏烟雨”，开始了自己的送妈巴结之路。 <br>
    吴佳彧在巴结之路中结交了不少国漫圈中臭名昭著的低能蛆，其中就有冯旭所带领的曦曦会团体。对开心超人联盟动画的导演、粉丝等进行挂人和骚扰，据部分受害者表示甚至因此患上抑郁症症状，更有出现受害者自杀未遂的情况，行为十分恶劣。<br>
    2023年5月13日，吴佳彧因到新黑熊出没吧闹事，被反熊元老痛批。随后，吴佳彧不得不连忙说道：“我是熊粉不是反熊”来解释自己来路。
    
  <p align="center"><img src="素材/吴佳彧/25dacd4a88462884e9cf3f926a5f231.jpg" width="750" height="700" align="middle">
  <p align="left" id="wanzheng">
  (<a href="人物/人物·吴佳彧.html">完整文章</a>)</td></p>
  </tr>
</tbody></table>

    
    
    
<table>
<tr>
<td class="MainPageBG" style="width:50%; vertical-align:top; padding:0;">
<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">国际巨星</th>
</tr>
<tr>
<td style="padding:20px; padding-top:5px;"><p><img src="素材/王子宸/王子宸大头.jpg" width="320" height="445" align="right"></p>
  <p>&nbsp; </p>
  <p align="left">
  <p align="left"><span style="border:solid thin black;"><b>王子宸</b></span>，网名包括但不限于，熊粉监控，喜羊羊与一条辉，一条辉xiao号等等名字，多次在熊出没吧四处瞎骂，得罪的人不计其数。</p>
  <p align="left"><strong>2022年，王子宸借用反熊的名称</strong>建立了二代反熊组织。建立的目的是&ldquo;用喷人的方式来打击一切&lsquo;熊痴势力&rsquo;&rdquo;。</p>
  <p align="left">2022年6月19日：<em>熊粉监控</em> 在网络上的种种恶劣行为早已被<em>熊粉监控的家长</em> 所知。上午10时，<em>熊粉监控的家长</em> 已经表示会限制其在网络上的活动，同时会手动清理所有<em>熊粉监控</em> 的帖子。目前为止<em>熊粉监控</em> 本人已处于退网状态，而伴随着<em>熊粉监控</em> 的退网，<strong>二代反熊组织</strong>也走向了落幕。<br>
    有趣的是，截至2022/6/19 ，<strong>二代反熊组织</strong>的活跃人士仍然只有<em>熊粉监控</em>一人。</p>
  <p align="center">
  <p align="left" id="wanzheng">
  (<a href="人物/人物·王子宸.html">完整文章</a>)</td></p>
  </tr>
</tbody></table>

</td>
<td style="width:10px; border:1px solid transparent;"></td>
<td class="MainPageBG" style="width:50%; vertical-align:top; padding:0;">
<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">万众瞩目</th></tr>
<tr>
<td style="padding:20px; padding-top:5px;"><img src="素材/焦典/焦典.jpg" width="320" height="445" align="right">
  <p align="left">
  <p align="left"><span style="border:solid thin black;"><b>焦典</b></span>，河北石家庄赞皇县的底层窝囊废，论战小鬼一枚，圈名多变，曾叫过裴行俨，暴风赤红，绝迹重生，北萧夜月等。</p>
  <p align="left"> 焦典早期便有恶俗经历，曾经在贴吧天天高强度喷人，并且曾经出道过别人，也差点被别人出道，而焦典却反以为荣，并且成为了熊出没吧的一名弱智，后来焦典去了汪峰在吧，被那些论战圈的人们深深影响，于是焦典希望自己喜欢的熊出没战斗力能够凌驾于其他作品之上，在熊吧腐朽集团上台后，焦典也立刻站队并巴结雨哥为首的熊吹腐朽势力，开始了不可一世的送妈弱智之路。为了造势，焦典要求别人跟他一起吹团子，并且在投票帖子投团子能打赢赛罗等角色，焦典为此不惜花钱请水军，只要跟他一起吹团子，就能得到2～20不等的工资，而如果拿了钱不吹团子，则会使用恶俗手段将其出道。</p>
  <p align="center">
  <p align="left" id="wanzheng">
  (<a href="人物/人物·焦典.html">完整文章</a>)</td></p>
  </tr>
</tbody></table>
</tr>
</table>
</td>
</tr>
</table>  
    
    
    
    
    
<table>
<tr>
<td class="MainPageBG" style="width:50%; vertical-align:top; padding:0;">
<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">超级巨星</th>
</tr>
<tr>
<td style="padding:20px; padding-top:5px;"><img src="素材/冯旭/冯旭.jpg" width="320" height="445" align="right">
  <p align="left">  
  <p align="left">
  <p align="left"><span style="border:solid thin black;"><b>冯旭</b></span>，生于1995年11月28日，开联圈知名装老资历瞎骂废物、巴结蛆。</p>
  <p align="left">拥有多个知名马甲，包括九日》，祝融号指挥舰等。<br>
    开心超人吧的恶俗战神之一，现开心超人吧大吧主。</p>
  <p align="left">此人以发布甜心超人的黄色内容出名，再此后又带着一众支持者到喜羊羊与灰太狼吧闹事，引发了&ldquo;九日浩劫&rdquo;，事后被打败后，在2014年以&ldquo;祝融号指挥舰&rdquo;在开联圈与紫夜海儿、丑猫咕喵、糖果梦幻、江湖刀子、凌思烁等一众网络暴徒组建了&ldquo;曦曦会&rdquo;，时任首领为曦曦，即紫夜海儿。</p>
  <p align="left">后来冯旭同伙一个个退网，只剩下冯旭和小部分死忠在苦撑。</p>
  <p align="left">2024年8月19日，冯旭解散了天皇群组，理由是&ldquo;开联也不再有复兴的希望&rdquo;。</p>
  <p align="left">然而在近日，此人依旧发布与甜心超人相关的内容，显然是贼心不死。</p>
  <p align="left">同时，有爆料人称近日其爪牙莉波作为甜心超人吧的吧主，删除他在数年前在甜心超人吧发布的与甜心超人饭圈相关的帖子并将爆料人封禁，但是爆料人现在已经退圈多年，莉波的超时空警察行为实在是让人笑掉大牙。</p>
  <p align="center">
  <p align="left" id="wanzheng">
  (<a href="人物/人物·冯旭.html">完整文章</a>)</td></p>
  </tr>
</tbody></table>

</td>
<td style="width:10px; border:1px solid transparent;"></td>
<td class="MainPageBG" style="width:50%; vertical-align:top; padding:0;">
<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">年度硬汉</th></tr>
<tr>
<td style="padding:20px; padding-top:5px;"><img src="素材/周泽忠/周泽忠.jpg" width="320" height="445" align="right">
  <p align="left">
  <p align="left"><span style="border:solid thin black;"><b>周泽忠</b></span>，1998年06月02日生。</p>
  <p align="left">在讲述周泽忠在国漫圈的丝麻事迹之前，先讲述他的现实的出身。</p>
  <p align="left">……</p>
  <p align="left">没人知道他是如何存活下来并且成功上学的，而在学校里因为他贫困的家庭和超雄综合征的缺陷基因，产生了报复社会的心态，加上他那一副僵尸一样的面容，在学校里也就被同学们排斥，于是便去欺负一些更弱小的同学。他有个爱好就是留下印记，具体方式跟狗一样，四处大小便，吐口水，吐痰，用这种方式证明自己来过这个世界。因此他又被称为云南癞皮狗，他的同学说他中学时候还会把流浪狗里抓到小巷子里交配。</p>
  <p align="left">自周泽忠上学起，就喜欢到处留所谓的印记。最过分的一次是周泽忠中学的时候，在教室里当众打胶，还将其抹到女同学和女老师的脸上；于是，周泽忠惨遭真人快打，并被学校劝退。</p>
  <p align="left">……</p>
  <p align="left">随着被周泽忠迫害的某个吧务退网，周泽忠开始说一些幸灾乐祸的话庆祝，然而这反倒引起了喷圈人士的憎恨，被喷圈人士骂了一句后，周泽忠暂时龟缩了一阵子，在喷圈人士走后，又重新出来犯病，贯彻硬汉本质。</p>
  <p align="center">
  <p align="left" id="wanzheng">
  (<a href="人物/人物·周泽忠.html">完整文章</a>)</td></p>
  </tr>
</tbody></table>
</tr>
</table>
</td>
</tr>
</table>      
    
    
    
    
    
    
    
    
    
    
    
    
<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">熊圈巨星</th></tr>
</tr><tr>
<td style="padding:20px; padding-top:5px;"><span style="padding:20px; padding-top:5px;"><img src="素材/蔡文恺/蔡文恺.png" width="320" height="445" align="right"></span>
<p align="left"><span style="border:solid thin black;"><b>蔡文恺</b></span>，生于1998年10月27日，多圈知名装老资历瞎骂废物、巴结蛆。</p>
  <p align="left">作为内蒙古自治区包头市昆都仑区恩和小区四区2栋52号的底层无业游民，熊出没吧吧务兼QQ群主，蔡文恺到哪都是鼻孔朝天的样子，甚至他的证件照亦是如此。<br>
    蔡文恺本为京剧猫粉丝，后因为对京剧猫感到乏味，转去加入熊出没贴吧圈子，并且靠跪舔惢心当上了知名吧友。在惢心倒台后，骑墙派的蔡文恺嗅到了机会，又立刻对惢心，天启等人反攻倒算，并且跪舔月儿明，雨哥，幽酱等腐朽巨头，成为了腐朽势力头号红棍打手兼QQ群主，和月儿明等人开始了统治熊痴帝国的恶俗生涯，从此开启了一条弱智不归路。<br>
    蔡文恺这条狗在腐朽三巨头身边疯狂咬人，听月儿明，幽酱等的狗哨，很快就被腐朽三巨头视为了御用宠物。在一次偶然的机会，雨哥发现了蔡文恺作为卧底的能力，逐步提拔了蔡文恺在熊痴帝国中的地位。随着熊痴帝国成立腐朽体系，红棍打手头子一职空缺，蔡文恺这条忠犬就如愿以偿的成为了打手头子听从三巨头狗哨。<br>
    作为腐朽势力手下最大舔狗的蔡文恺如愿以偿成为了三人之下，万人之上的存在，天天在群里发癫，吹牛逼，骂街，宣传反智言论，因为其貌不扬并且没有学历，蔡文恺便借着发酒疯的幻想，给自己捏造了一个“研究生毕业，实习教师”的虚幻身份，并且以此哄骗反羊吧吧主plat，但是蔡文恺在上位之后天天装逼疯咬，并没有意识到熊痴的强大是因为三巨头到笨熊苹果的核心体系，而不是熊痴本身。蔡文恺在这之后被正义人士出道，几乎每天都被瞎骂，成为了熊吧著名受气包。<br>
    由于蔡文恺在一次卧底欺骗反羊吧后，居然直接大言不惭声称要求plat单方面无条件投降。然而，蔡文恺和熊痴集团平时的弱智行为使得他们被很多人所看不爽，就在此时，plat和吴佳彧，寒冰等人决定正式和蔡文恺撕破脸，蔡文恺仿使是亲妈被杀一般的悲愤交加，并且在被出道时，蔡文恺一度崩溃到企图辞职吧务群主跑路，后来选择拉黑反羊吧众人当缩头乌龟，在此之后人人都知道了熊吧有个叫蔡文恺的意淫弱智受气包，人人都可瞎骂。<br>
    评语：<br>
    废物东西以为继承了熊痴群主的位置就可以肆意瞎骂了，殊不知腐朽三巨头成为熊痴皇帝靠的还有权谋，蔡文恺这条蠢狗人人喊打完全咎由自取。</p>
  <p align="center">
  <p align="left" id="wanzheng">
  (<a href="人物/人物·蔡文恺.html">完整文章</a>)</td></p>
 </tr>
</tbody></table>


<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">八方天团</th></tr>
  <tr><td>


<h2 style="text-align: center; font-size: 75px;">死倔天团</h2>
<div class="row row-cols-3 mb-3 text-center">
<div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
<div class="card-header py-1">
<h4 class="my-0 fw-normal">吴佳彧</h4>
</div>
<div class="card-body">
<p><img src="素材/吴佳彧/吴佳彧.jpg" width="300px"></p>
<p align="left"><span style="border:solid thin black;"><b>吴佳彧</b></span>，上海市嘉定区华亭镇的底层窝囊废。圈名为随风。  </p>
<p><a class="button" href="人物/人物·吴佳彧.html">查看详情</a></p>
</div>
</div>
</div>
<div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
<div class="card-header py-1">
<h4 class="my-0 fw-normal">王子宸</h4>
</div>
<div class="card-body">
<p><img class="image_resized" style="width:300px;" src="素材/王子宸/王子宸大头.jpg"></p>
<p><span style="border:solid thin black;"><b>王子宸</b></span>，网名包括但不限于，熊粉监控，喜羊羊与一条辉，一条辉xiao号等等名字，多次在熊出没吧四处瞎骂，得罪的人不计其数。</p>
<p><a class="button" href="人物/人物·王子宸.html">查看详情</a></p>
</div>
</div>
</div>
<div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
<div class="card-header py-1">
<h4 class="my-0 fw-normal">曾锦超</h4>
</div>
<div class="card-body">
<p><img class="image_resized" style="width:300px;" src="素材/曾锦超/曾锦超大头.png"></p>
<p align="left"><span style="border:solid thin black;"><b>曾锦超</b></span>，圈名西域古国，是反复横跳的出生贱种一枚。</p>
<p><a class="button" href="人物/人物·曾锦超.html">查看详情</a></p>
</div>
</div>
</div>
</div>





<h2 style="text-align: center; font-size: 75px; font-family: var(--bs-body-font-family);">战螂天团</h2>
<div class="row row-cols-3 mb-3 text-center">
<div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
<div class="card-header py-1">
<h4 class="my-0 fw-normal">焦典</h4>
</div>
<div class="card-body">
<p><img class="image_resized" style="width:300px;" src="素材/焦典/焦典.jpg"></p>
<p><span style="border:solid thin black;"><b>焦典</b></span>，河北石家庄赞皇县的底层窝囊废，论战小鬼一枚</p>
<p><a class="button" href="人物/人物·焦典.html">查看详情</a></p>
</div>
</div>
</div>
<div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
<div class="card-header py-1">
<h4 class="my-0 fw-normal">杨舒予</h4>
</div>
<div class="card-body">
<p><img class="image_resized" style="width:300px;" src="素材/杨舒予/杨舒予大头.jpg"></p>
<p align="left"><span style="border:solid thin black;"><b>杨舒予</b></span>，海南省直辖县级行政区划乐东黎族自治县的底层窝囊废</p>
<p><a class="button" href="人物/人物·杨舒予.html">查看详情</a></p>
</div>
</div>
</div>
<div class="col">
<div class="card mb-4 rounded-3 shadow-sm">
<div class="card-header py-1">
<h4 class="my-0 fw-normal">冯旭</h4>
</div>
<div class="card-body">
<p><img class="image_resized" style="width:300px;" src="素材/冯旭/冯旭.jpg"></p>
<p align="left"><span style="border:solid thin black;"><b>冯旭</b></span>，开联圈知名装老资历瞎骂废物、巴结蛆。</p>
<p><a href="人物/人物·冯旭.html" class="button">查看详情</a></p>
</div>
</div>
</div>
</div>



<style>
.button {
  background-color: #06F;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 50px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
  box-shadow: 0 0 10px #0F0;
}
</style>

</td>
 </tr>
</tbody></table>














<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap"><div align="center">腐朽人员</div></th>
</tr>


<tr>
  <td align="center" style="padding: 20px; padding-top: 5px; font-size: 55px;"><table width="600" height="800" border="1">
    <caption>
      <div align="center" id="toc3">人物</div>
      </caption>
    <tr>

      <td><div id="wanzheng" align="center"><a href="人物/人物·吴佳彧.html">吴佳彧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·王子宸.html">王子宸</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·曾锦超.html">曾锦超</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·周泽忠.html" >周泽忠</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">戴宇航</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·于江硕.html" >于江硕</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">赵博龙</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·杨舒予.html">杨舒予</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">李海诚</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·冯旭.html">冯旭</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">王亦鹤</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">张文通</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">泽舰</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·焦典.html">焦典</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·蔡文恺.html">蔡文恺</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">唐勇</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">赵达亿</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·王启浩.html">王启浩</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">段斌</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">古竞轩</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">路义圣</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·刘伟伟.html">刘伟伟</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·吕政博.html">吕政博</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·谢钟伟.html">谢钟伟</a></div></td>
    </tr>    
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·郭东阳.html">郭东阳</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">蔡佳航</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">卢志新</a></div></td>
    </tr>     
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">余俊辉</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·胡肖飞.html">胡肖飞</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">陈喻虎</a></div></td>
    </tr>   
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">冀彬</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">卜凡群</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">李舸</a></div></td>
    </tr>    
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·付兴豪.html" >付兴豪</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">蔡郑豪</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·陈宇欣.html">陈宇欣</a></div></td>
    </tr>              
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">邵宇杰</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">白崇煜</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·范一满.html" >范一满</a></div></td>
    </tr>    
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·陈子龙.html">陈子龙</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·秦宇豪.html" >秦宇豪</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·王嘉豪.html" >王嘉豪</a></div></td>
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·胥凯为.html" >胥凯为</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·于子尧.html" >于子尧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·张明春.html" >张明春</a></div></td>
    </tr>              
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">熊雪毅</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">邓艾玛</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">于义鑫</a></div></td>
    </tr>    
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·曾佳伟.html">曾佳伟</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">孔钰夫</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">邵凯</a></div></td>      
    </tr>   
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">颜开</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">李葱</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">王壬俊</a></div></td>      
    </tr> 
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">胡玉麒</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">李佳琦</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">张庆杨</a></div></td>      
    </tr>     
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">陈翔宇</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">郑哲航</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">唐凯</a></div></td>      
    </tr>   
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">王硕</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">张成豪</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·施遇卿.html" >施遇卿</a></div></td>      
    </tr> 
    <tr>
      <td><div id="wanzheng" align="center"><a href="人物/人物·柳成儒.html" >柳成儒</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·杨志平.html" >杨志平</a></div></td>
      <td><div id="wanzheng" align="center"><a href="人物/人物·黄先敏.html">黄先敏</a></div></td>    </tr>   
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">后英杰</a></div></td>  
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>  
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>    </tr>      
  </table> 
 
 
 <tr>
  <td align="center" style="padding: 20px; padding-top: 5px; font-size: 55px;"><table width="600" height="200" border="1">
    <caption>
      <div align="center" id="toc3"><a href="人物/人物·词条合集.html">词条合集</a></div>
      </caption>
      
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>        <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>  
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>   
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>        <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>  
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>   
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>        <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>  
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>    
      </tr>      
  </table> 
 
 
 
 
 
 
 

  </table>  </tr>
























<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap"><div align="center">腐朽分支</div></th>
</tr><tr>
  <td align="center" style="padding: 20px; padding-top: 5px; font-size: 55px;">
  <p><strong>腐朽据点</strong></p>
  <table width=90% height=100% border="1">

  

      
    <tbody><tr>
<th colspan="15" bgcolor="#66FFFF">贴吧
</th></tr>
  
  
  
  

    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">熊出没吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">开心超人吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">京剧猫吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">猪猪侠吧</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">喜羊羊与灰太狼吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">六学吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">反六学吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">吞食鱼吧</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">天下有敌灰太狼吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">双凹椎龙吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">catfight帝国吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">女斗帝国吧</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">克隆斗吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">龙珠gt吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">popcap吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">北城王建涛吧</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">熊出没战力比较吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">catfight新帝国吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">吞食鱼rpg吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">龙之城吧</a></div></td>
    </tr>
    
    
    <tbody><tr>
<th colspan="15" bgcolor="#66FFFF">社交平台群体
</th></tr>
      <tr>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·和平精英对掏圈.html" >和平精英对掏圈</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·和平精英挂圈.html">和平精英挂圈</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·MC挂圈.html" >	MC挂圈</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·仙家军.html">仙家军</a></div></td>
    </tr>  
    <tr>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·中文键政圈.html" >中文键政圈</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·逃跑吧少年挂圈.html" >逃跑吧少年挂圈</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·MCPVP圈.html" >	MCPVP圈</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">孙笑川吧军队</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">论战痴群体</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">鞠婧祎饭圈</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">破解小鬼圈	</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">开盒小鬼圈</a></div></td>
    </tr>  

  
  
  
  

    <tr>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·龙的天空.html" >龙的天空</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/狗窝·NGA.html" >NGA</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"></a></div></td>
    </tr>


  </table>
  
  
  
   <p><strong>反动组织</strong></p>  

  <table width=90% height=100% border="1">
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">熊出没贴吧腐朽势力</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">吞食鱼腐朽集团</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/组织·曦曦会.html">	曦曦会</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">归乡联盟</a></div></td>
    </tr>
     <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">六学流氓</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·色情人.html" >色情人集团</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">随风集团</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">王启浩集团</a></div></td>
    </tr>   
     <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">面馆集团</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">后期反熊组织</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/组织·二代反熊组织.html" >二代反熊组织</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">喜灰矩阵</a></div></td>
    </tr>      
     <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">喜羊羊与灰太狼吧贴吧腐朽势力</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">赵杰多集团</a></div></td>
      <td><div id="wanzheng" align="center"><a href="腐朽分支/组织·伪反熊.html" >魔家军</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">惢心集团</a></div></td>
    </tr>        
    </table>

  
  </tr>
</tbody></table>







<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap"><div align="center">腐朽相关</div></th>
</tr><tr>
  <td align="center" style="padding: 20px; padding-top: 5px; font-size: 55px;">
  <p><strong>概念</strong></p>
  <table width=90% height=100% border="1">

  

      
    <tbody><tr>
<th colspan="15" bgcolor="#66FFFF">
基本概念
</th></tr>
  
  
  
  

    <tr>
      <td><div id="wanzheng" align="center"><a href="概念/概念·恶俗.html">恶俗</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·恶俗化.html">恶俗化</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·古典恶俗.html">古典恶俗</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·恶俗狗.html">恶俗狗</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="概念/概念·出道.html">出道</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·炒作.html">	炒作</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·语录.html">	语录</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·找乐子.html">	找乐子</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="概念/概念·小鬼.html">小鬼</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·硬度.html">硬度</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·DSSQ.html">	DSSQ</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·钦点.html">钦点/黑屁/指点江山</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="概念/概念·真人快打.html">真人快打</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·钓鱼.html">	钓鱼</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·关键词污染.html">关键词污染</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">打喷</a></div></td>
          <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">封</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·色情人.html">色情人</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·挖坟.html">挖坟</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·爆吧.html">爆吧</a></div></td>
       <tbody><tr>
<th colspan="15" bgcolor="#66FFFF">漫圈概念</th>   
    </tr>
        <tr>
      <td><div id="wanzheng" align="center"><a href="概念/概念·熊痴.html" >熊痴</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·羊批.html" >	羊批</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·真夏の夜の淫夢.html">真夏の夜の淫夢	</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">战力痴	</a></div></td>
    </tr>
    <tr>

    
    
    <tbody><tr>
<th colspan="15" bgcolor="#66FFFF">恶俗系黑话</th>
    <tr>
      <td><div id="wanzheng" align="center"><a href="概念/概念·辱骂.html" >辱骂</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·雷霆系黑话.html">	雷霆系黑话</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·音mad系黑话.html" >	音mad系黑话</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·孙系黑话.html" >孙系黑话</a></div></td>
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="概念/概念·喷系黑话.html" >喷系黑话</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·网哲黑话.html" >	网哲黑话</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·键政系黑话.html" >	键政系黑话</a></div></td>
      <td><div id="wanzheng" align="center"><a href="概念/概念·抽象黑话.html" >抽象黑话</a></div></td>
    </tr>  

  </table>
  
  
   <p><strong>事件</strong></p>  

  <table width=90% height=100% border="1">
    <tr>
      <td width="37%"><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">杰斯之乱</a></div></td>
      <td width="36%"><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">画师事变</a></div></td>
      <td width="26%" ><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 腐朽势力上台
</a></div></td>

      
      
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">2020年熊出没吧挖坟事件 </a></div></td>
      <td><div id="wanzheng" align="center"><a href="事件/事件·221事件.html" >221事件</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">囧89拆吧</a></div></td>
      
      
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 熊猫战争
</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">腐朽之变 </a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">世纪天成拆吧</a></div></td>

      
      
    </tr>   
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">轻骑之战</a></div></td>      
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 释6拆吧
</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">米币币之战 </a></div></td>
    </tr>  
    <tr>      
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">追秒乱政</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">仁斗独裁</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 神仙之乱
</a></div></td>
      
    </tr>      
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">神仙集团大型拆吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">M爆吧事件</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">LS之乱</a></div></td>

      
    </tr>    
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 奇幻略路之乱
</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">汪峰在下台 </a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">王启浩之乱</a></div></td>

      
    </tr> 
    <tr>
            <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">轻骑之战</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 开盒泛滥期的汪吧
</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">摩登流年之乱 </a></div></td>
    </tr>
    <tr>  
      <td><div id="wanzheng" align="center"><a href="事件/事件·我们是大王事件.html">我们是大王事件</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">原谅神事件</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 路四之战
</a></div></td>
      
    </tr> 
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">铲车篡位 </a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">李商湮拆吧</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">恭子挖坟事件</a></div></td>

    </tr> 
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 冀彬篡位
</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">六学内斗 </a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">匿名爆吧事件</a></div></td>
      </tr>
      <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">公众号拆吧事件</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2"> 满粥礼事件
</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">包荣俊事件 </a></div></td>
    </tr>       
    <tr>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">诺亚飞船事件</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">郭东阳战争</a></div></td>
      <td><div id="wanzheng" align="center"><a href="事件/事件·六一事件.html" >六一事件 
</a></div></td>      
    </tr>  
    <tr>
      <td><div id="wanzheng" align="center"><a href="事件/事件·九日浩劫.html">九日浩劫</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">开心超人422事变</a></div></td>
      <td><div id="wanzheng" align="center"><a href="事件/事件·反熊·七月风暴.html" >反熊·七月风暴
</a></div></td>      
    </tr>
    <tr>
      <td><div id="wanzheng" align="center"><a href="事件/事件·反熊·728事件.html" >反熊·728事件</a></div></td>
      <td><div id="wanzheng" align="center"><a href="事件/事件·第二次反熊内战.html" >第二次反熊内战</a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">反羊吧分裂事件
</a></div></td>      
    </tr>    
    <tr>
      <td><div id="wanzheng" align="center"><a href="事件/事件·反熊·728事件.html" id="wanzheng2">熊汪冲突</a></div></td>
      <td><div id="wanzheng" align="center"><a href="事件/事件·第二次反熊内战.html"id="wanzheng2" ></a></div></td>
      <td><div id="wanzheng" align="center"><a href="此页面目前没有内容.html" id="wanzheng2">
</a></div></td>      
    </tr>              
    </table>

  
  </tr>
</tbody></table>















<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">高雅创作-文集</th>
</tr><tr>
<td style="padding:20px; padding-top:5px;"><p align="center">
《像我这样的人》<br>
  演唱：蔡文恺，原告：毛不易</p>
  <p>
  蔡文恺：像他这样瞎吹的人<br>
  本该阳痿过一生<br>
  为何到了论战圈子里<br>
  还敢到处来喷人(焦典)<br>
  像他这样瞎骂的人<br>
  狠话能有几分真<br>
  怎么还是用了一个妈<br>
  换得了不锈钢盆(周泽忠)<br>
  像他这样脑瘫的人(吴佳彧)<br>
  像她这样傻逼的人(杨舒予)<br>
  像他这样淫秽色情的人(吕政博)<br>
  你还见过多少人？<br>
  像他这样盗号的人<br>
  打个字都打不清<br>
  可是还敢大肆地域黑<br>
  招惹了无数的人(郭东阳)<br>
  像他这样蠢逼的人<br>
  舔狗舔得很殷勤<br>
  怎么到了现在只剩下<br>
  复制禁言低能(胡肖飞)<br>
  像他这样权限的人(冀彬)<br>
  像他这样中二的人(谢钟伟)<br>
  像他这样罪恶滔天的人(冯旭)<br>
  你还见过多少人？<br>
  像他这样逆天的人(王启浩)<br>
  像他这样傻的人(付兴豪)<br>
  像他这样毫无主见的人(曾锦超)<br>
  世界上有多少人？<br>
  若问我是什么类型的人<br>
  集以上于我一身 (蔡文恺)<br>
  </p>
  <p align="left">
(<a href="文集/文集·《像我这样的人》.html">原文章</a>)
  </p>

  
  <hr>
<p>《低能都笑了》<br>
演唱：蔡文恺，原告：单行道乐队<br>
原曲:猪都笑了</p>
<p>蔡文恺说他要撸管，刘马泽舰就笑了<br>
  蔡文恺说他要盗号，郭东阳就笑了<br>
  蔡文恺说他要坐牢，胡肖飞就笑了<br>
  蔡文恺说他是穷人，周泽忠就笑了<br>
  蔡文恺说他要卖淫，付兴豪就笑了<br>
  蔡文恺说敢得罪人，于江硕就笑了<br>
  蔡文恺说他爱色情，吕政博就笑了<br>
  蔡文恺说他能挣钱，邵宇杰就笑了<br>
  蔡文恺啊曾锦超啊<br>
  他们是熊痴啊<br>
  他们说自己是人啊，所有低能们都笑了<br>
  蔡文恺啊曾锦超啊<br>
  他们是熊痴啊<br>
  他们说自己是人啊，所有低能们都笑了<br>
  蔡文恺说他不如猪，王启浩就笑了<br>
  蔡文恺说他是皇帝，谢钟伟就笑了<br>
  蔡文恺说他玩权限，杨舒予就笑了<br>
  蔡文恺说他有学历，吴佳彧就笑了<br>
  蔡文恺啊曾锦超啊<br>
  他们是熊痴啊<br>
  他们说自己是人啊，所有低能们都笑了<br>
  蔡文恺啊曾锦超啊<br>
  他们是熊痴啊<br>
  他们说自己是人啊，所有低能们都笑了<br>
  蔡文恺啊曾锦超啊<br>
  他们是熊痴啊<br>
  他们说自己是人啊，所有低能们都笑了<br>
  蔡文恺啊曾锦超啊<br>
  他们是熊痴啊<br>
  他们说自己是人啊，所有低能们都笑了</p>
   <p align="left">
(<a href="文集/文集·《低能都笑了》.html">原文章</a>)
  </p> 
  
  
  
  
  </td></tr>
</tbody></table>














<table style="background-color:#f5faff; box-shadow:grey 0px 0px 5px; width:100%; margin-top:0em; margin-left:auto; margin-right:auto; border:1px solid #999; border-radius:20px; text-align:center; list-style-type:square;padding-bottom:10px;">
<tbody><tr>
<th style="background-color:#F96; color:#FFFFFF; padding:6px 3px; border-radius:20px; font-size:320%;" nowrap="nowrap">经典语录</th>
</th>
</tr><tr>
<td><b>
</b><div style="padding:1.5em;"><b>
<p class="mw-empty-elt">
</p><center>
<p><big><big><big><big><big>
熊吧新一任政府已经上任，吧的氛围也比以前好了很多
</big></big></big></big></big>
</p>
<p class="mw-empty-elt"></p>
</center>
<div style="text-align:right">
<p>--<a href="人物/人物·蔡文恺.html">蔡文恺</a>
</p>
</div>
<p class="mw-empty-elt">
</p><center>

<p><big><big><big><big><big>
反熊比父母更重要，因为被父母发现就不能反熊了
</big></big></big></big></big>
</p>
<p class="mw-empty-elt"></p>
</center>
<div style="text-align:right">
<p>--<a href="人物/人物·王子宸.html">王子宸</a>
</p>
</div>
<p class="mw-empty-elt">
</p><center>

<p><big><big><big><big><big>
我明天要秋游，你们羡慕吧
</big></big></big></big></big>
</p>
<p class="mw-empty-elt"></p>
</center>

<div style="text-align:right">
<p>--<a href="人物/人物·吴佳彧.html">吴佳彧</a>
</p>
<p class="mw-empty-elt">
</p><center>


<p><big><big><big><big><big>
我大舅是黑社会老大，二舅是警察局长
</big></big></big></big></big>
</p>
<p class="mw-empty-elt"></p>
</center>
<div style="text-align:right">
<p>--<a href="人物/人物·胡肖飞.html">胡肖飞</a></p>
<p class="mw-empty-elt">
</p><center>

<p><big><big><big><big><big>
你越骂我妈我越高兴，别骂猪猪侠就行
</big></big></big></big></big>
</p>
<p class="mw-empty-elt"></p>
</center>
<div style="text-align:right">
<p>--<a href="人物/人物·王启浩.html">王启浩</a>
<p class="mw-empty-elt">
</p><center>


<p><big><big><big><big><big>
朕是皇帝，要把你们剥皮充草
</big></big></big></big></big>
</p>
<p class="mw-empty-elt"></p>
</center>
<div style="text-align:right">
<p>--<a href="人物/人物·谢钟伟.html">谢钟伟</a>
<p class="mw-empty-elt">
</p>



</p></div></div>
</p>
</div></td>
</tr>
</tbody></table>






















</body>
</html>
