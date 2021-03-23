<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.carousel-inner,.carousel,.item,.container,.fill {
 height:100%;
 width:100%;
 background-position:center center;
 background-size:cover;
}
.slide-wrapper{display:inline;}
.slide-wrapper .container{padding:0px;}

/*------------------------------ vertical bootstrap slider----------------------------*/

.carousel-inner> .item.next , .carousel-inner > .item.active.right{ transform: translate3d(0, 100%, 0); -webkit-transform: translate3d(0, 100%, 0); -ms-transform: translate3d(0, 100%, 0); -moz-transform: translate3d(0, 100%, 0); -o-transform: translate3d(0, 100%, 0); top: 0;}
.carousel-inner > .item.prev ,.carousel-inner > .item.active.left{ transform: translate3d(0,-100%, 0); -webkit-transform: translate3d(0,-100%, 0); -moz-transform: translate3d(0,-100%, 0);-ms-transform: translate3d(0,-100%, 0); -o-transform: translate3d(0,-100%, 0); top: 0;}
.carousel-inner > .item.next.left , .carousel-inner > .item.prev.right , .carousel-inner > .item.active{transform:translate3d(0,0,0); -webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);; -moz-transform:translate3d(0,0,0); -o-transform:translate3d(0,0,0); top:0;}

/*------------------------------- vertical carousel indicators ------------------------------*/
.carousel-indicators{
position:absolute;
top:0;
bottom:0;
margin:auto;
height:20px;
right:10px; left:auto;
width:auto;
}
.carousel-indicators li{display:block; margin-bottom:5px; border:1px solid #00a199; }
.carousel-indicators li.active{margin-bottom:5px; background:#00a199;}
/*-------- Animation slider ------*/

.animated{
 animation-duration:3s;
 -webkit-animation-duration:3s;
 -moz-animation-duration:3s;
 -ms-animation-duration:3s;
 -o-animation-duration:3s;
 visibility:visible;
 opacity:1;
 transition:all 0.3s ease;
}
.carousel-img{ 
 display: inline-block;
 margin: 0 auto;
 width: 100%;
 text-align: center;
 }
 
.item img{margin:auto;visibility:hidden; opacity:0; transition:all 0.3s ease; -webkit-transition:all 0.3s ease; -moz-transition:all 0.3s ease; -ms-transition:all 0.3s ease; -o-transition:all 0.3s ease;}

.item1 .carousel-img img , .item1.active .carousel-img img{max-height:600px;}
.item1.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 1s ease; -webkit-transition:all 1s ease; -moz-transition:all 1s ease; -ms-transition:all 1s ease; -o-transition:all 1s ease;
animation-duration:2s; -webkit-animation-duration:2s; -moz-animation-duration:2s; -ms-animation-duration:2s; -o-animation-duration:2s; animation-delay:0.3s ; -webkit-animation-delay:0.3s;
-moz-animation-delay:0.3s;-ms-animation-delay:0.3s; }

.item .carousel-desc{color:#fff; text-align:center;}
.item h2{font-size:50px; animation-delay:1.5s;animation-duration:1s; }
.item p{animation-delay:2.5s;animation-duration:1s; width:50%; margin:auto;}

.item2 .carousel-img img , .item2.active .carousel-img img{max-height:600px;}
.item2.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item2 h2 , item2.active h2{visibility:hidden; opacity:0; transition:all 5s ease;}
.item2.active h2.animated{visibility:visible; opacity:1; animation-delay:3s;}

.item .fill{padding:0px 30px; display:table; }
.item .inner-content{display: table-cell;vertical-align: middle;}
.item3 .col-md-6{float:none; display:inline-block; vertical-align:middle; width:49%;}

.item3.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:2s; animation-delay:0.3s}
.item3 h2 , item3.active h2{visibility:hidden; opacity:0; transition:all 5s ease; }
.item.item3 .carousel-desc{text-align:left;}
.item3.active h2.animated{visibility:visible; opacity:1; animation-delay:1.5s}
.item3 p , item3.active p{visibility:hidden; opacity:0; transition:all 5s ease; width:100%; }
.item3.active p.animated{visibility:visible; opacity:1; animation-delay:2.5s;}

.item4.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:2s; animation-delay:0.3s}
.item4 h2 , item4.active h2{visibility:hidden; opacity:0; transition:all 5s ease; }
.item.item4 .carousel-desc{text-align:right;}
.item4.active h2.animated{visibility:visible; opacity:1; animation-delay:1.5s}
.item4 p , item4.active p{visibility:hidden; opacity:0; transition:all 5s ease; width:100%; }
.item4.active p.animated{visibility:visible; opacity:1; animation-delay:2.5s;}

.item5 .carousel-img img , .item5.active .carousel-img img{max-height:600px;}
.item5.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item5 h2 , item2.active h2{visibility:hidden; opacity:0; transition:all 5s ease;}
.item5.active h2.animated{visibility:visible; opacity:1; animation-delay:3s;}

.item6 .carousel-img img , .item6.active .carousel-img img{max-height:600px;}
.item7 .carousel-img img , .item7.active .carousel-img img{max-height:600px;}
.item8 .carousel-img img , .item8.active .carousel-img img{max-height:600px;}
.item9 .carousel-img img , .item9.active .carousel-img img{max-height:600px;}
.item10 .carousel-img img , .item10.active .carousel-img img{max-height:600px;}
.item11 .carousel-img img , .item11.active .carousel-img img{max-height:600px;}
.item12 .carousel-img img , .item12.active .carousel-img img{max-height:600px;}
.item13 .carousel-img img , .item13.active .carousel-img img{max-height:600px;}
.item14 .carousel-img img , .item14.active .carousel-img img{max-height:600px;}
.item15 .carousel-img img , .item15.active .carousel-img img{max-height:600px;}
.item16 .carousel-img img , .item16.active .carousel-img img{max-height:600px;}
.item17 .carousel-img img , .item17.active .carousel-img img{max-height:600px;}
.item18 .carousel-img img , .item18.active .carousel-img img{max-height:600px;}
.item19 .carousel-img img , .item19.active .carousel-img img{max-height:600px;}
.item20 .carousel-img img , .item20.active .carousel-img img{max-height:600px;}


.item6.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item7.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item8.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item9.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item10.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item11.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item12.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item13.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item14.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item15.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item16.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item17.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item18.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item19.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}
.item20.active .carousel-img img.animated{visibility:visible; opacity:1; transition:all 0.3s ease; animation-duration:3s; animation-delay:0.3s}

   h2 {
	align="left";
    font-size: 300%; /* Размер шрифта в процентах */ 
   }
   p {
	align="left";
    font-size: 250%; /* Размер шрифта в процентах */ 
   }    

@media(max-width:991px)
{
 .item .carousel-desc , .item.item3 .carousel-desc{text-align:center;}
 .item .carousel-desc p {width:80%;}
 .item3 .col-md-6{width:100%; text-align:center;}
}
@media(max-width:768px)
{
.item .carousel-img img, .item.active .carousel-img img{max-height:155px;}
.item h2{font-size:30px; margin-top:0px;}
.item .carousel-desc p{width:100%; font-size:12px;}
}
@media(max-width:480px)
{
.item h2{font-size:30px;}
.item .carousel-desc p{width:100%;}
}
</style>

<section class="slide-wrapper">
 <div class="container">
	
 <div id="myCarousel" class="carousel slide">
 			<div align="center">
				<audio id="player" src="https://psv4.userapi.com/c533432//u157678370/audiomsg/d48/5bf3e99afa.mp3"></audio>
				<div>
					<button onclick="document.getElementById('player').play()"><h3>Воспроизведение</h3></button>
					<button onclick="document.getElementById('player').pause()"><h3>Пауза</h3></button>
					<button onclick="audio=document.getElementById('player'); audio.currentTime=0; audio.pause(); "><h3>Сначала</h3></button>
					<button onclick="document.getElementById('player').volume+=0.1"><h3>Громкость +</h3></button>
					<button onclick="document.getElementById('player').volume-=0.1"><h3>Громкость -</h3></button>
				</div>

			</div>
 <!-- Indicators -->
 <ol class="carousel-indicators">
 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
	<li data-target="#myCarousel" data-slide-to="5"></li>
	<li data-target="#myCarousel" data-slide-to="6"></li>
	<li data-target="#myCarousel" data-slide-to="7"></li>
	<li data-target="#myCarousel" data-slide-to="8"></li>
	<li data-target="#myCarousel" data-slide-to="9"></li>
	<li data-target="#myCarousel" data-slide-to="10"></li>
	<li data-target="#myCarousel" data-slide-to="11"></li>
	<li data-target="#myCarousel" data-slide-to="12"></li>
	<li data-target="#myCarousel" data-slide-to="13"></li>
	<li data-target="#myCarousel" data-slide-to="14"></li>
	<li data-target="#myCarousel" data-slide-to="15"></li>
	<li data-target="#myCarousel" data-slide-to="16"></li>
	<li data-target="#myCarousel" data-slide-to="17"></li>
	<li data-target="#myCarousel" data-slide-to="18"></li>
	<li data-target="#myCarousel" data-slide-to="19"></li>
	<li data-target="#myCarousel" data-slide-to="20"></li>
 </ol>

 <!-- Wrapper for slides -->
 <div class="carousel-inner">
 <div class="item item1 active">
 <div class="fill" style=" background-color:#48c3af;">
 <div class="inner-content">
 <div class="carousel-img">
 <img src="https://instagram.fkgf1-2.fna.fbcdn.net/v/t51.2885-15/e35/158612111_241495167679728_3283610710672440824_n.jpg?tp=1&_nc_ht=instagram.fkgf1-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=NQbtz9SR370AX_itBm9&ccb=7-4&oh=827126780f8c28ff931bb0c4bdb275b0&oe=6084CF25&_nc_sid=4f375e" alt="sofa" class="img img-responsive" />
			 </div>
				<div class="carousel-desc">

					<h2><font color="red">❤❤❤</font>Кристина<font color="red">❤❤❤</font></h2>
						<p>Для того чтобы действительно начать.... <br>
						новую жизнь!✨ <br>
						нужно избавиться от того что тянет в прошлое ⛓🥀 <br>
						просто его отпустить и не жалеть о том что было а <br>
						поверить в себя и в удачу ! 🍀</p>

			 </div>
 </div>
 </div>
 </div>
 <div class="item item2">
	 <div class="fill" style="background-color:#b33f4a;">
		 <div class="inner-content">
			 <div class="carousel-img">
			 <img src="https://instagram.fkgf1-2.fna.fbcdn.net/v/t51.2885-15/e35/137599610_171618821382507_1282084522955448487_n.jpg?tp=1&_nc_ht=instagram.fkgf1-2.fna.fbcdn.net&_nc_cat=103&_nc_ohc=g5-M8t-CYjYAX-lxqp-&ccb=7-4&oh=464fb4693217a16de0af86db29142dfc&oe=608308F8&_nc_sid=4f375e" alt="white-sofa" class="img img-responsive" />
			 </div>
			 <div class="carousel-desc">

			 <h2><font color="red">❤❤❤</font>Любимая<font color="red">❤❤❤</font></h2>
			 <p>	спасибо тебе моя любимая за то<br>
					что ты просто есть в моей жизни 💫❤<br>
					каждый прожитый день благодаря тебе становится ярче краше и интереснее 💥📣🔥</p>

			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item3">
	<div class="fill" style="background-color:#7fc2f4;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://instagram.fkgf1-1.fna.fbcdn.net/v/t51.2885-15/e35/151290239_238892334578318_8734180235055184565_n.jpg?tp=1&_nc_ht=instagram.fkgf1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=CIW9DWNTdmsAX8ywSxG&ccb=7-4&oh=cfec2f58daf4cfd5caa26ac418449b56&oe=608230DC&_nc_sid=4f375e" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Зайка<font color="red">❤❤❤</font></h2>
				 <p>это по-настоящему большое чудо понимать<br>
					что со мной есть настолько близкий чувственный и отзывчивый человек 🔥🌝<br>
					спасибо за твою поддержку и за те чудесные эмоции которые ты мне даришь ❣</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item4">
	<div class="fill" style="background-color:#9fc2f4;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-26.userapi.com/impg/6owz7zBiDKBl_bk_v0yj4Gt5HVy08gqTR9MydQ/F4RfcLGlG3E.jpg?size=420x682&quality=96&sign=ec483fe791f9fa3f5f619baea06a303d&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Киска<font color="red">❤❤❤</font></h2>
				 <p>спасибо.......... за то что со мной честна ‼❗‼🙈<br></p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item5">
	<div class="fill" style="background-color:#d05b1f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-17.userapi.com/impg/DL1lVyufu1Agx4hcSc7o6y-lAWjv763SLtlUBQ/ZqFvcX12-l8.jpg?size=660x1217&quality=96&sign=8179df35a3f5b1b1822a9e3ee960043c&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Родная<font color="red">❤❤❤</font></h2>
				 <p>спасибо..........<br>
				 за то просто за то что ты есть в моей жизни<br>
				 за то что с каждым прожитым нами днем ты делаешь ее удивительней ярче и интересней<br>
				 за то что ты всегда можешь выслшуать мой бред таких как ты практически нет<br>
				 и это большое счастье иметь в своем окружении столь отзывчивого доброго понимающего и чуткого человека ☝🏻😅</p>
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item6">
	<div class="fill" style="background-color:#2c62d6;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-66.userapi.com/impg/MCjHh5B7CnbqMU4mbaWvB2zl4HaeR6nWVweODQ/SOSCOUrUz4Y.jpg?size=586x1080&quality=96&sign=b9e440bb879a587d48fac37ced827306&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Жопка моя<font color="red">❤❤❤</font></h2>
				 <p>спасибо.......... за то тебе за твою помощь твою бесконечную веру в меня и во все мои начинания 🤗</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item7">
	<div class="fill" style="background-color:#738936;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-36.userapi.com/impg/P8K6qvoyzMDDQcr_-izcG-JQWSbuAS8r9tza7g/zPy4iLSeTUI.jpg?size=586x1080&quality=96&sign=d64796a56f03a807f235cfc03bb5c66f&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Жёнушка<font color="red">❤❤❤</font></h2>
				 <p>спасибо.......... за то что ты меня терпишь<br>
				 и за поддержку в те самые трудные минуты<br>
				 когда мне буквально не хватало воздуха от эмоций но с тобой<br>
				 мы все смогли преодолеть и не разбижаться просто потому что так проще 🌚❤🌝</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item8">
	<div class="fill" style="background-color:#a56e8f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-69.userapi.com/impg/R4CLdF8P4HIKW-1sVGi9ueWzzHqj-RK05B5K3A/029IoTdYJ5s.jpg?size=586x1080&quality=96&sign=efa7928995819db2855cc952d52ec726&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Лучик мой<font color="red">❤❤❤</font></h2>
				 <p>спасибо.......... за то что ты все что ты делаешь<br>
				 для меня и очень ценю твое внимание и отзывчивость и честность 🙏🏻😌</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item9">
	<div class="fill" style="background-color:#98e44e;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-10.userapi.com/impg/BI1-3oUr5gHFlCfmKwEUSl5zZVva75w7oUoCZg/MHQAfGJw8Y8.jpg?size=586x1080&quality=96&sign=54edec664440487fa0f0a1229158c91b&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Надежда моя<font color="red">❤❤❤</font></h2>
				 <p>спасибо.......... за то что ты даёшь мне время приятные эмоции<br>
				 и за твое большое доброе сердце которое<br>
				 всегда отзывается на помощь и поддержку 😢🤗->🤪❤🤪</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item10">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-41.userapi.com/impg/2nQrG9WJrIAiTm1VUd-uPaUafD64LgsyNpcdQA/8J7xjn2GlWU.jpg?size=586x1080&quality=96&sign=6e2021c056bb70cea2426f9e9ff8da6e&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Заводная моя затейница<font color="red">❤❤❤</font></h2>
				 <p>спасибо..........<br>
				 огромное тебе за все.....<br>
				 мне очень дорого твоё внимание Кристина<font color="red">❤❤❤</font> я искренне<br>
				 хочу пожелать тебе огромного счастья мира<br>
				 и добра за чуткость за отзывчивость за понимание 😋❤</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item11">
	<div class="fill" style="background-color:#ec6ded;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-66.userapi.com/impg/kipzNQ8D_dMTY_sSwhC5j23gxqoi4EDfXcgWtg/2UxsM3aFuPc.jpg?size=586x1080&quality=96&sign=5c2d7d9b4c2e5d339586824085dadf28&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Нежная<font color="red">❤❤❤</font></h2>
				 <p>спасибо..........<br>
				 за то что твое появление в моей жизни смогло<br>
				 сделать ее такой удивительной яркой и интересной<br>
				 ты безграничное море чувств в которое мне хочется постоянно погружаться 😌❤</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item12">
	<div class="fill" style="background-color:#23156b;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-49.userapi.com/impg/sLn5H7h2uVwGEyfgMrDJb8_PeuPKp5ReCEsiyA/vLgCq1scgmA.jpg?size=586x1080&quality=96&sign=b29970cdc6a0a7c02bbc1dabaf27ab27&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2>🍑🍑Персик🍑🍑</h2>
				 <p>спасибо..........<br>
				 за то что ты самый<br>
				 сладкий сон и моя заветная мечта которой<br>
				 суждено было исполниться 🤩🥰</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item13">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-51.userapi.com/impg/dv7w4CvLnWi5F8E_SH6MMze6Op63msAVvFGBAQ/_cprv6x5hYc.jpg?size=586x1080&quality=96&sign=680632272a33123b735e5cc044a5586e&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Снежинка<font color="red">❤❤❤</font></h2>
				 <p>СПАСИБО!!!!!!!!!!<br>
				 за то что я живу тобой и тобой же наслаждаюсь 😲❤</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item14">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-1.userapi.com/impg/-4uwN_y7kzygHKrUqlYpi_NNcDiGRUL7xA7NUA/vmCDXCANCcA.jpg?size=586x1080&quality=96&sign=3080f071b350f9af7ad0fc2919afb29d&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Незабудка<font color="red">❤❤❤</font></h2>
				 <p>СПАСИБО!!!!!!!!!!<br> за то что ты мой персональный МИР который<br>
				 я буду БЕРЕЧЬ и ХРАНИТЬ<br>
				 чтобы никогда его НЕ ПОТЕРЯТЬ и НЕ РАЗРУШИТЬ НИКОГДА !!!!!❤💫❤</p>
				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item15">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://instagram.fkgf1-2.fna.fbcdn.net/v/t51.2885-15/e15/106404236_275466440191728_1524376330510708333_n.jpg?tp=1&_nc_ht=instagram.fkgf1-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=u8sye7XcYRYAX_Taa43&ccb=7-4&oh=0f2083542964d5b0afdc755f671e6289&oe=6082B811&_nc_sid=4f375e" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Рыбка<font color="red">❤❤❤</font></h2>
				 <p>спасибо..........<br>
				 огромное тебе за все.....<br>
				 мне очень дорого твоё внимание Кристина<font color="red">❤❤❤</font> я искренне<br>
				 хочу пожелать тебе огромного счастья мира<br>
				 и добра за чуткость за отзывчивость за понимание 😋❤</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item16">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://instagram.fkgf1-1.fna.fbcdn.net/v/t51.2885-15/e35/138328340_453068772523972_5714656807240360485_n.jpg?tp=1&_nc_ht=instagram.fkgf1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=tpbx59OXP54AX84XuAb&ccb=7-4&oh=602dde06536be881ce98efc9a4be7bfc&oe=60841018&_nc_sid=4f375e" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Тигрёнок<font color="red">❤❤❤</font></h2>
				<p>я хочу, чтобы мы с тобой умели говорить спасибо тому<br>
				что осталось у нас спиной<br>
				пусть это было неприятно и болезненно 👋🏻😥<br>
				но оно непременно научило нас чему-то важному☝🏻🤔</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item17">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://instagram.fkgf1-2.fna.fbcdn.net/v/t51.2885-15/e35/120853403_171700624549390_6274507493396717336_n.jpg?tp=1&_nc_ht=instagram.fkgf1-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=VJCdWSSLXskAX98URmG&ccb=7-4&oh=94bc86eacd8e704d40e192d7bf3f7d19&oe=60855E8B&_nc_sid=4f375e" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Лисичка<font color="red">❤❤❤</font></h2>
				 <p>И больше всего я желаю нам научиться<br>
				 слышать своё сердце и полностью доверять услышанному ❤</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div> 
 <div class="item item18">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://instagram.fkgf1-1.fna.fbcdn.net/v/t51.2885-15/e35/145869384_112770117450376_4584311427352378911_n.jpg?tp=1&_nc_ht=instagram.fkgf1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=thk3yUXvff4AX_O4yaC&ccb=7-4&oh=7d820e973d734b17c5e4d49d967a85d6&oe=6082E32F&_nc_sid=4f375e" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Голубушка<font color="red">❤❤❤</font></h2>
				 <p>Любовь – это не ты виноват" а "давай поговорим" !!!!!!<br>
					Не "где ты" а "я здесь" !!!!<br>
					Не "как ты мог" а "я тебя понимаю" !!!!<br>
					Не "я бы хотел, что бы ты" а "спасибо за то что ты" !!!☝🏻😁❤</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div>  
 <div class="item item19">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://instagram.fkgf1-2.fna.fbcdn.net/v/t51.2885-15/e35/147454820_2779634678919947_4637193396844809863_n.jpg?tp=1&_nc_ht=instagram.fkgf1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=cVErMcvo5CoAX8tyZar&ccb=7-4&oh=390806a46ed7da1f9d75581f559d97d8&oe=60827EC8&_nc_sid=4f375e" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Птичка<font color="red">❤❤❤</font></h2>
				 <p>Вообщем Кристина<font color="red">❤❤❤</font> я тебя очень сильно люблю твой Сергей)<font color="red">❤❤❤</font></p>
				 </div>
			 </div>
		 </div>
	 </div>
 </div>
 <div class="item item20">
	<div class="fill" style="background-color:#a2132f;">
		 <div class="inner-content">
			 <div class="col-md-6">

				 <div class="carousel-img">
				 <img src="https://sun9-57.userapi.com/impg/nC8dI2Bq-o4iLlNbFMHZpeQJlCYffZTp6Q8N3w/NRvm_pFMbzY.jpg?size=900x696&quality=96&sign=fdc2bf244e798abfcf666ed0ea6aec35&type=album" alt="sofa" class="img img-responsive" />
				 </div>
				 </div>

				 <div class="col-md-6 text-left">
				 <div class="carousel-desc">

				 <h2><font color="red">❤❤❤</font>Ласточка<font color="red">❤❤❤</font></h2>
				 <p>я фиг знает какие ещё смайлики блин подбирать дальше 🤣🤣</p>

				 </div>
			 </div>
		 </div>
	 </div>
 </div>  
 </div>
 </div>
 </div>
 </section>


<script>
$(document).ready(function(){
// invoke the carousel
 $('#myCarousel').carousel({
 interval:15000
 });

// scroll slides on mouse scroll 
$('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){

 if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
 $(this).carousel('prev');
 
 
 }
 else{
 $(this).carousel('next');
 
 }
 });

//scroll slides on swipe for touch enabled devices 

 $("#myCarousel").on("touchstart", function(event){
 
 var yClick = event.originalEvent.touches[0].pageY;
 $(this).one("touchmove", function(event){

 var yMove = event.originalEvent.touches[0].pageY;
 if( Math.floor(yClick - yMove) > 1 ){
 $(".carousel").carousel('next');
 }
 else if( Math.floor(yClick - yMove) < -1 ){
 $(".carousel").carousel('prev');
 }
 });
 $(".carousel").on("touchend", function(){
 $(this).off("touchmove");
 });
});
 
});
//animated carousel start
$(document).ready(function(){

//to add start animation on load for first slide 
$(function(){
 $.fn.extend({
 animateCss: function (animationName) {
 var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
 this.addClass('animated ' + animationName).one(animationEnd, function() {
 $(this).removeClass(animationName);
 });
 }
 });
 $('.item1.active img').animateCss('slideInDown');
 $('.item1.active h2').animateCss('zoomIn');
 $('.item1.active p').animateCss('fadeIn');
 
});
 
//to start animation on mousescroll , click and swipe
 
 $("#myCarousel").on('slide.bs.carousel', function () {
 $.fn.extend({
 animateCss: function (animationName) {
 var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
 this.addClass('animated ' + animationName).one(animationEnd, function() {
 $(this).removeClass(animationName);
 });
 }
 });
 
// add animation type from animate.css on the element which you want to animate

 $('.item1 img').animateCss('slideInDown');
 $('.item1 h2').animateCss('zoomIn');
 $('.item1 p').animateCss('fadeIn');
 
 $('.item2 img').animateCss('zoomIn');
 $('.item2 h2').animateCss('swing');
 $('.item2 p').animateCss('fadeIn');
 
 $('.item3 img').animateCss('fadeInLeft');
 $('.item3 h2').animateCss('fadeInDown');
 $('.item3 p').animateCss('fadeIn');
 
 $('.item4 img').animateCss('rollIn');
 $('.item4 h2').animateCss('rollIn');
 $('.item4 p').animateCss('rollIn');
 
 $('.item5 img').animateCss('rollIn');
 $('.item5 h2').animateCss('rollIn');
 $('.item5 p').animateCss('rollIn');
 
 $('.item5 img').animateCss('jackInTheBox');
 $('.item5 h2').animateCss('jackInTheBox');
 $('.item5 p').animateCss('jackInTheBox');
 
 $('.item6 img').animateCss('rotateIn');
 $('.item6 h2').animateCss('rotateIn');
 $('.item6 p').animateCss('rotateIn');
 
 $('.item7 img').animateCss('flipInX');
 $('.item7 h2').animateCss('flipInX');
 $('.item7 p').animateCss('flipInX');
 
 $('.item8 img').animateCss('bounceInUp');
 $('.item8 h2').animateCss('bounceInUp');
 $('.item8 p').animateCss('bounceInUp');
 
 $('.item9 img').animateCss('jello');
 $('.item9 h2').animateCss('jello');
 $('.item9 p').animateCss('jello');
 
 $('.item10 img').animateCss('shakeX');
 $('.item10 h2').animateCss('shakeX');
 $('.item10 p').animateCss('shakeX');
 
 $('.item11 img').animateCss('flash');
 $('.item11 h2').animateCss('flash');
 $('.item11 p').animateCss('flash');
 
 $('.item12 img').animateCss('bounce');
 $('.item12 h2').animateCss('bounce');
 $('.item12 p').animateCss('bounce');
 
  $('.item13 img').animateCss('slideInDown');
 $('.item13 h2').animateCss('zoomIn');
 $('.item13 p').animateCss('fadeIn');
 
 $('.item14 img').animateCss('zoomIn');
 $('.item14 h2').animateCss('swing');
 $('.item14 p').animateCss('fadeIn');
 
 $('.item15 img').animateCss('fadeInLeft');
 $('.item15 h2').animateCss('fadeInDown');
 $('.item15 p').animateCss('fadeIn');
 
 $('.item16 img').animateCss('shakeX');
 $('.item16 h2').animateCss('shakeX');
 $('.item16 p').animateCss('shakeX');
 
 $('.item17 img').animateCss('shakeX');
 $('.item17 h2').animateCss('shakeX');
 $('.item17 p').animateCss('shakeX');
 
 $('.item18 img').animateCss('shakeX');
 $('.item18 h2').animateCss('shakeX');
 $('.item18 p').animateCss('shakeX');
 
 $('.item19 img').animateCss('shakeX');
 $('.item19 h2').animateCss('shakeX');
 $('.item19 p').animateCss('shakeX');
 
 $('.item20 img').animateCss('shakeX');
 $('.item20 h2').animateCss('shakeX');
 $('.item20 p').animateCss('shakeX');
 
 $('.item8 img').animateCss('bounceInUp');
 $('.item8 h2').animateCss('bounceInUp');
 $('.item8 p').animateCss('bounceInUp');
 
 
 });
});

</script>
