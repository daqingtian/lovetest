<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="window-target" content="_top">
    <meta content="telephone=no" name="format-detection">
    <title>我们一路走来爱的见证</title>
    <meta name="Keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/header.css"rel="stylesheet">
    <link rel="stylesheet" href="css/mreset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
{{--<section>--}}
    <div class="header">
        <ul>
            <li class="barleft"><a href="#">
                    <span>图片</span>
                    <span>照片墙</span>
                </a></li>
            <li><a href="#">留言板</a></li>
            <li><a href="#">我们</a></li>
            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
{{--</section>--}}
<section class="photo">
    <div class="mosaic">
        <link rel="stylesheet" href="css/baguettebox.min.css">
        <script src="js/baguettebox.min.js"></script>
        <div class="baguetteBoxOne gallery">
            <li><a href="img/photo.png" data-caption="标题"><em></em>
                    <i style="background-image: url(img/photo.png)"></i>
                </a></li>
            <li><a href="img/photo.png" data-caption="标题"><em></em>
                    <i style="background-image: url(img/photo.png)"></i>
                </a></li>
            <li><a href="img/photo2.png" data-caption="标题"><em></em>
                    <i style="background-image: url(img/photo2.png)"></i>
                </a></li>
            <li><a href="user/list-4.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(img/photo.png)"></i>
                </a></li>
            <li><a href="user/list-5.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-5.jpg)"></i>
                </a></li>
            <li><a href="user/list-6.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-6.jpg)"></i>
                </a></li>
            <li><a href="user/list-7.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-7.jpg)"></i>
                </a></li>
            <li><a href="user/list-1.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-1.jpg)"></i>
                </a></li>
            <li><a href="user/list-2.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-2.jpg)"></i>
                </a></li>
            <li><a href="user/list-3.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-3.jpg)"></i>
                </a></li>
            <li><a href="user/list-4.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-4.jpg)"></i>
                </a></li>
            <li><a href="user/list-5.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-5.jpg)"></i>
                </a></li>
            <li><a href="user/list-6.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-6.jpg)"></i>
                </a></li>
            <li><a href="user/list-7.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-7.jpg)"></i>
                </a></li>
            <li><a href="user/list-1.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-1.jpg)"></i>
                </a></li>
            <li><a href="user/list-2.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-2.jpg)"></i>
                </a></li>
            <li><a href="user/list-3.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-3.jpg)"></i>
                </a></li>
            <li><a href="user/list-4.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-4.jpg)"></i>
                </a></li>
            <li><a href="user/list-5.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-5.jpg)"></i>
                </a></li>
            <li><a href="user/list-6.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-6.jpg)"></i>
                </a></li>
            <li><a href="user/list-7.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-7.jpg)"></i>
                </a></li>
            <li><a href="user/list-1.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-1.jpg)"></i>
                </a></li>
            <li><a href="user/list-2.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-2.jpg)"></i>
                </a></li>
            <li><a href="user/list-3.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-3.jpg)"></i>
                </a></li>
            <li><a href="user/list-4.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-4.jpg)"></i>
                </a></li>
            <li><a href="user/list-5.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-5.jpg)"></i>
                </a></li>
            <li><a href="user/list-6.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-6.jpg)"></i>
                </a></li>
            <li><a href="user/list-7.jpg" data-caption="标题"><em></em>
                    <i style="background-image: url(user/list-7.jpg)"></i>
                </a></li>
        </div>
        <script>
            baguetteBox.run('.baguetteBoxOne', {
                animation: 'fadeIn'
            });
        </script>
    </div>
    <a href="" class="more">查看更多案例</a>
</section>
<section class="foot">
    <div class="main">
        <div class="foot-block fl">
            <div class="foot-title"><span>onnect</span> us</div>
            <ul>
                <li>QQ：2335836133</li>
                <li>Email：smetoo@aliyun.com</li>
                <li>地址：北京市朝阳区望京西北京香颂235号楼101室</li>
            </ul>
        </div>
        <div class="foot-block fl">
            <div class="foot-title"><span>other</span> info</div>
            <ul>
                <li>服务时间：周一至同日 8:00-18:00</li>
                <li>024 - 23456 365</li>
                <li>024 - 2734 0898</li>
            </ul>
        </div>
        <div class="foot-block fl">
            <div class="foot-title"><span>follow</span> us</div>
            <div class="foot-sns">
                {{--<a href="" class="sa1"></a>--}}
                <a class="sa1" href="mqqwpa://im/chat?chat_type=wpa&uin=479858761&version=1&src_type=web&web_src=oicqzone.com">打开qq聊天框</a>
                <a href="" class="sa2"></a>
                {{--<a href="" class="sa3"></a>--}}
                {{--<a href="" class="sa4"></a>--}}
            </div>
        </div>
    </div>
    <div class="copyright fl">copyrights &copy; <a href="">feilinbaby.com</a> 沈阳米图文化传播有限公司 2013-2016 all rights reserved | 辽ICP备16013539号 </div>
</section>
<section class="tip animated fadeInLeft" id="tip">
    <a class="tip-close" onclick="$('#tip').toggle()"></a>
    <div class="tip-img">
        <div class="tip-img-con"><img src="user/list-1.jpg"><span>标题</span></div>
    </div>
</section>
</body>
</html>
