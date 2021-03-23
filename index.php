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

					<h2>Modern Designer Sofa</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

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

			 <h2>Vintage Style Sofa</h2>
			 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

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

				 <h2>Stylish Sofa</h2>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

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
 interval:6000
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
 });
});

</script>
