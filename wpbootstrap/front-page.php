
<?php get_header(); ?>



	<div class="intro">
		<div class="intro logo">
			<img id="logogif" src="http://localhost/wp-content/uploads/2018/01/RPMlogo.gif">
		</div>
	</div>
	
				<div class="reelContainer">

					<div class="row-fluid" id="fpText">
							<h1 class="text-left">WELCOME TO THE PARTY</h1>
							<h3 class="text-left">Your brand is one of the many guests.</h3>
							<p class="text-left">It’s noisy, there’s loud music and everyone’s trying to make conversation. Looking around, there are those you want to spend time with and those you don’t. They rub you the wrong way, they’re close-talkers or worse, they’re just plain boring. The ones you really remember? They tell great stories, they know funny jokes and speak passionately. They’re clever and unexpected. We find them entertaining.

At RPM, we build brands that know how to work a party.</p>

							<button type="button" id="btnClosed" class="btn btn-outline-primary">View Reel</button>

					</div>


							<div class="bgReel" id="buttonvid">
								<button id="close" type="button" class="close">
									<i class="fas fa-times-circle"></i>
								</button>	
								<video playsinline autoplay muted loop>
									<source src="http://localhost/wp-content/uploads/2017/09/916732.mp4" type="video/mp4">
								</video>
							</div>	

    					 <div class="bgReel" id="bgVid">
    					 		
							<video poster="http://localhost/wp-content/uploads/2017/09/homeBG.jpg" id="bgvid" playsinline autoplay muted loop>
								<source src="http://localhost/wp-content/uploads/2018/01/rooftop.mp4" type="video/mp4">
							</video>
						</div>

				</div>




<script type='text/javascript'>

(function($) {

var listItem = $('ul, li');
	firstItem = $('li:first-child');
	secondItem = $('li:nth-child(2)');
	thirdItem = $('li:nth-child(3)');
	fourthItem = $('li:nth-child(4)');
	fifthItem = $('li:nth-child(5)');
	seventhItem = $('li:nth-child(7)');
	sixthItem = $('li:nth-child(6)');
	lastItem = $('li:last-child');
	reel = $('.bgReel');

	logoContainer = $('#logoContainer');

	introBG = $('.intro');
	reelCont = $('.reelContainer');
	navBar = $('.navbar');

	fpText = $('#fpText');
    fpButton = $('#btnClosed');



TweenLite.to(reelCont, 1, {autoAlpha:1, ease:Power1.easeOut, delay:5.2});
TweenLite.to(navBar, 1, {css:{visibility:"visible"}, autoAlpha:1, ease:Power1.easeOut, delay:5.3});
TweenLite.to(introBG, 1, {css:{visibility:"hidden"}, autoAlpha:0, ease:Power1.easeOut, delay:5.5});



TweenLite.to(logoContainer, 0.5, {x:+25, autoAlpha:1, ease:Power1.easeOut, delay:6.00});
TweenLite.from(firstItem, 0.5, {x:-35, autoAlpha:0, ease:Power1.easeOut, delay:6.05});
TweenLite.from(secondItem, 0.5, {x:-30, autoAlpha:0, ease:Power1.easeOut, delay:6.10});
TweenLite.from(thirdItem, 0.5, {x:-25, autoAlpha:0, ease:Power1.easeOut, delay:6.15});
TweenLite.from(fourthItem, 0.5, {x:-20, autoAlpha:0, ease:Power1.easeOut, delay:6.20});
TweenLite.from(fifthItem, 0.5, {x:-15, autoAlpha:0, ease:Power1.easeOut, delay:6.25});
TweenLite.from(sixthItem, 0.5, {x:-10, autoAlpha:0, ease:Power1.easeOut, delay:6.30});
TweenLite.from(lastItem, 0.5, {x:-5, autoAlpha:0, ease:Power1.easeOut, delay:6.35});
TweenLite.to(fpText, 0.5, { y:100, autoAlpha:1, ease:Power1.easeOut, delay:6.5});
TweenLite.to(fpButton, 0.6, { y:100, autoAlpha:1, ease:Power1.easeOut, delay:6.5});


var buttonVid = $('#buttonvid');
var bgVid     = $('#bgVid');

var reelOpen = new TimelineLite({paused:true});
reelOpen.to(bgVid, 0.5, {scale:3, zIndex:-2, opacity:0, autoAlpha:0, ease:Power1.easeOut,})
        .to(buttonVid, 0.5, {opacity:1, zIndex:1, autoAlpha:1, ease:Power1.easeOut,});

$("#btnClosed").click(function() {
        reelOpen.play();
});
   
$("#close").click(function() {
        reelOpen.reverse();
});   


}) (jQuery);


    var d = new Date(); 
    document.getElementById("logogif").src = 
      "http://localhost/wp-content/uploads/2018/01/RPMlogo.gif?ver=" + 
       d.getTime();

</script>



</script>



