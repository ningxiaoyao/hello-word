<!DOCTYPE html>
<html lang="en">
<head>
    <title>企业在线培训</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/jquery/jquery-1.11.0.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js" ></script>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/zzsc.css" />
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body style="height:2000px;">
<!-- header -->

<!--nav-->
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	    <div class="navbar-header">
		    <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                      	    <!--汉堡按钮-->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                                  <span class="sr-only">切换导航</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                            </button>
                            <!--//汉堡按钮-->
                            <!--logo-->
                             <a class="navbar-brand" href="index.html">
        	                    <img src="images/gongfang logo(1).png"/>
                             </a>
                             <!--//logo-->
                        
                    
    </div>
    <!--导航条-->
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">首页</a></li>
            <li><a href="newslist.html">系列教程</a></li>
            <li><a href="zxdt.html">最新动态</a></li>
            <li><a href="login.html">用户登录</a></li>
            <li><a href="logos.html">用户注册</a></li>
            <li><a href="zxly.html">在线留言</a></li>
        </ul>
    <!--导航条-->
    <!--//搜索框-->
    <div class="row">
           <div class="col-lg-6 navbar-right">
                <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search for...">
                     <span class="input-group-btn">
                          <button class="btn btn-default" type="button">Go!</button>
                     </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <!--//搜索框-->
    <!--注册与登录-->
     
    <ul class="nav navbar-nav navbar-right">
          <?php
            require_once './comm/comm.php';
            if(isset($_SESSION["CURRENT_USER"])){
                $curruser=$_SESSION["CURRENT_USER"];
                echo  "<li><a href='#'><span class='glyphicon glyphicon-user'></span>$curruser[uName]您好!&nbsp;</a></li>";
            }
        ?>
        <li><a href="logos.html.html"><span class="glyphicon glyphicon-user"></span> 注册</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
        
        
    </ul>
    <!--//注册与登录-->
      </div>
    </div>
</nav>
<!-- //header -->
<!-- banner -->
<div id="slidershow" class="carousel slide" data-ride="carousel">
    <!-- 设置图片轮播计数器 -->
    <ol class="carousel-indicators">
        <li class="active" data-target="#slidershow" data-slide-to="0"></li>
        <li data-target="#slidershow" data-slide-to="1"></li>
        <li data-target="#slidershow" data-slide-to="2"></li>
    </ol>
    <!-- 设置轮播图片 -->
    <div class="carousel-inner" >
        <div class="item active">
            <a href="#">
                <img src="images/b1 (1).jpg" style=" margin:0 auto;">
            </a>
            <!--<div class="carousel-caption">
                <h3>图片标题1</h3>
                <p>描述内容1...</p>
            </div>-->
        </div>
        <div class="item">
            <a href="#">
                <img src="images/b1 (2).jpg"  style="margin:0 auto;">
            </a>
            <!--<div class="carousel-caption">
                <h3>图片标题2</h3>
                <p>描述内容2...</p>
            </div>-->
        </div>
        <div class="item">
            <a href="#">
                <img src="images/b1 (3).jpg" style=" margin:0 auto;"></a>
            <!--<div class="carousel-caption">
                <h3>图片标题3</h3>
                <p>描述内容3...</p>
            </div>-->
        </div>
    </div>
    <!-- 设置轮播图片控制器 -->
    <a class="left carousel-control" href="#slidershow" role="button"
       data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#slidershow" role="button"
       data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- //banner -->

<div class="container-fluid" style="background: #fff;">	
		<h2>关于我们</h2>
	<div>
		<div class="row">
    <div class="col-sm-6 col-md-6">
    	<h3>公司简介</h3>
    	<hr />
      <p>xxx企业培训来自20年企业教练团队倾力打造，
        将中国传统文化与世界企业教练管理经验，突破传统，实践融合。
     “人为本，心若镜，破陈思，修贤德，立明志，创家业。”
         在不断的学习实践过程中，真正引导企业家及社会精英人士认清自我，
         打破传统的思维模式，获得积极正向的心态能量，厘清目标，创造成果。
         全新的“体验式学习”方法，不再局限于各类“大师讲解”后，与自身现状脱离，
         无从着手、徒劳无果的局面。人本领导力，让你在学习实践中，真正结合自身瓶颈，
         挖掘潜能，提升个人影响力……
         </p>
         <h3>联系方式</h3>
         <hr />
         <p>联系邮箱：contact@fkadjkhsf.com</p>
         <p>联系传真：020-000000</p>
         <p>联系电话：020-000000 400-000000</p>
         <p>联系地址：XX省XX市XX县XX路XX号</p>
    </div>
   <div class="col-sm-6 col-md-6">
   	<video controls="controls" >
   		<source src="video/video.mp4" type="video/mp4">
   			您的浏览器不支持video标签
   		</source>
   	</video>
        <!--<a href="#" class="thumbnail">
            <img src="images/zzpic8799.jpg"
                 alt="通用的占位符缩略图">
        </a>-->
        
        	
        
    </div>
    
</div>

	</div>
</div>

<!-- mission -->
<div class="mission">
    <div class="container">
        <div class="mission-header">
            <h2>我们的培训手法</h2>
        </div>
        <div class="mission-container">
            <div class="mission_div mission-left">
           <img src="images/mission_img.jpg" alt=""/>    
            </div>
            <div class="mission_div mission-right">
                <div class="mis-one">
                    <div class="mis-left">
                <a href="zy.html"><img src="images/000122.jpg" alt=""/></a> 
                    </div>
                    <div class="mis-right">
                        <h3>多媒体视听法</h3>
                        <p>
                        	运用电视机、录像机、幻灯机、投影仪、收录机、
                        	电影放映机等视听教学设备为主要培训手段进行训练的方法。</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mis-one">
                    <div class="mis-left">
                        <a href="zy1.html"><img src="images/2.jpg" alt=""/></a>
                    </div>
                    <div class="mis-right">
                        <h3>网上课程学习法</h3>
                        <p> 
                        	适合于有很好的自觉性、自制力、理解力的人，
                        	网上已经有了各式各样的课程包供选择，价格也相对便宜。
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mis-one">
                    <div class="mis-left">
                        <a href="zy2.html"><img src="images/3.jpg" alt=""/></a>
                    </div>
                    <div class="mis-right">
                        <h3>工作指导法或教练/实习法</h3>
                        <p>也是培训的方法之一，
                        	在受训员对工作实践进行摸索的基础上，
                        	培训员针对其工作情况和特殊的需要实施个别指导。
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="mis-one">
                    <div class="mis-left">
                        <a href="zy3.html"><img src="images/2.jpg" alt=""/></a>
                    </div>
                    <div class="mis-right">
                        <h3>研讨法</h3>
                        <p> 
                        	按照费用与操作的复杂程序又可分成一般研讨会与小组讨
                        	论两种方式。研讨会多以专题演讲为主，中途或会后允许
                        	学员与演讲者进行交流沟通，一般费用较高。而小组讨论
                        	法则费用较低。
                        </p>
                    </div>
                    <div class="clearfix"></div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //mission -->
 <div class="container">
          <h2>我们的讲师团队</h2>
    <div class="row">
        <div class="col-sm-3">
           <div class="ite">
                <div class="tp">
                    <img src="images/jiangshi1.jpg" alt="">
                </div>
                <div class="desc">
                    <div class="detail">
                    	<p>李先生<br> 
                    	有4年的教学经验，
                        擅长教授基础英语发音，
                        词汇和阅读技巧。
                    	</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
          <div class="ite">
                <div class="tp">
                    <img src="images/jiangshi2.jpg" alt="">
                </div>
                <div class="desc">
                    <div class="detail">
                    	<p>李先生<br>
                    	 有4年的教学经验，
                         擅长教授基础法语发音，
                         词汇和阅读技巧。
                    	</p>
                    </div>
                </div>
        </div>
        </div>
        <div class="col-sm-3">
          <div class="ite">
                <div class="tp">
                    <img src="images/jiangshi3.jpg" alt="">
                </div>
                <div class="desc">
                    <div class="detail">
                    	<p>李先生<br> 
                    	有4年的教学经验，
                        擅长教授基础日语发音，
                        词汇和阅读技巧。
                    	</p>
                    </div>
                </div>
        </div>
        </div>
        <div class="col-sm-3">
         <div class="ite">
                <div class="tp">
                    <img src="images/jiangshi4.jpg" alt="">
                </div>
                <div class="desc">
                    <div class="detail">
                    	<p>李先生<br>
                    	 有4年的教学经验，
                         擅长教授基础德语发音，
                          词汇和阅读技巧。
                    	</p>
                    </div>
                </div>
        </div>
        </div>
    </div>
</div>
</div>
<!-- footer -->
<footer class="footer ">   
    	<p>
    		<a href="index.html">首页</a>&nbsp;&nbsp;
                <a href="newslist.html">系列教程</a>&nbsp;&nbsp;
                <a href="zxdt.html">最新动态</a>&nbsp;&nbsp;
                <a href="login.html">用户登录</a>&nbsp;&nbsp;
                <a href="logos.html">用户注册</a>&nbsp;&nbsp;
    		<a href="zxly.html">在线留言</a>
    	</p>
    	<hr />
        <p> &copy; 2017 企业培训&nbsp;&nbsp;web课程设计</p>   	   
</footer>




<!-- 返回顶部 -->
<div id="leftsead">
	<ul>
		<li>
			<a href="javascript:void(0)" class="youhui">
				<img src="images/微信(1).png" width="47" height="49" class="shows" />
				<img src="images/微信.png" width="57" height="49" class="hides" />
				<img src="images/二维码.png" width="145" class="2wm" style="display:none;margin:-100px 57px 0 0" />
			</a>
		</li>
		<li>
			<a href="http://wpa.qq.com/msgrd?v=3&uin=80000000&site=qq&menu=yes" target="_blank">
				<div class="hides" style="width:161px;display:none;" id="qq">
					<div class="hides" id="p1">
						<img src="images/qq(4).png">
					</div>
					<div class="hides" id="p2"><span style="color:#FFF;font-size:13px">88888888</span>
					</div>
				</div>
				<img src="images/qq(3).png" width="48" height="48" class="shows" />
			</a>
		</li>
        <li id="tel">
        <a href="javascript:void(0)">
            <div class="hides" style="width:161px;display:none;" id="tels">
                <div class="hides" id="p1">
                    <img src="images/电话(3).png">
                </div>
                <div class="hides" id="p3"><span style="color:#FFF;font-size:12px">0592-88888888</span>
                </div>
            </div>
        <img src="images/电话(2).png" width="48" height="48" class="shows" />
        </a>
        </li>
        <li id="btn">
        <a id="top_btn">
            <div class="hides" style="width:161px;display:none">
                <img src="images/ll06.png" width="161" height="49" />
            </div>
            <img src="images/返回顶部.png" width="47" height="49" class="shows" />
        </a>
    </li>
    </ul>
</div>


</div>
</div>
</body>
</html>