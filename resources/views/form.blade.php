<!DOCTYPE html>
<html>
<head>
    <title>使用jqery点击弹出按钮弹出表单</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script type="text/javascript" src="./js/jquery-3.1.0.min.js"></script>
</head>
<body class="body">
<div class="section container">
    <div class="header">
        <div class="nav-icon">
            <a href="#" ><span id="test">
			 	<div id="swphoto">
			 		<img src="img/pic/icon/add.png" style="width: 70px;height: 70px";>
			 		<img src="img/pic/icon/del.png" style="display: none;width: 70px;height: 70px">
			 	</div>
			 	</span></a>
        </div>

        <!-- 			<div>
                        <a href="#"><span id="test1"><img src="pic/icon/del.png"></span></a>
                    </div> -->
    </div>
    <div class="boder">
        <form action="{{url('form')}}" method="post">
            {{csrf_field()}}
            姓名：<br>
            <input type="text" name="name" value="" placeholder="姓名"><br/>
            班级：<br>
            <input type="text" name="classnum" value="" placeholder="班级"><br/>
            {{--<label for="pass">密码</label><br>--}}
            {{--<input type="password"name="pass";id="pass" placeholder="密码" ><br>--}}
            您接触过的语言：
            <input type="radio" name="c">C语言</input>
            <input type="radio" name="java">java语言</input>
            <input type="radio" name="csharp">c#语言</input>
            <input type="radio" name="python">python语言</input><br/>
            <!-- <label for="textare"></label> -->
            <textarea rows="5" cols="15" name="text">在这里输入内容</textarea>
            <input type="submit" value="提交">
            <!-- <a class="an" href="http://www.cnblogs.com/yupeter007/p/4652658.html"><span>www.baidu.com</span></a> -->
        </form>
    </div>
    <div class="footer">
    </div>
</div>
</body>
</html>

<script type="text/javascript">

    $("#test").click(function(){
        var t = document.getElementById("test");
        console.log(t);
        if($(".boder").css("display")==="none")
        {
            $(".boder").css("display","block");
        }else{
            $(".boder").css("display","none");
        }
    });
</script>
<script type="text/javascript">
    $("#swphoto").click(function(){
        $("#swphoto>img").toggle();
    });
</script>




<!-- jqery 点击后显示文本并且更换点击按钮图片 -->

