@extends('main')
@section('content')
<section class="hero" id="bunk-house">
	<article>
		
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<h1>
			The Bunk House
		</h1>
		<hr>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id magni, amet nostrum consectetur cumque quod. Reiciendis ab impedit, ducimus ut consectetur explicabo. Consequuntur pariatur inventore, nemo animi doloremque amet minus!
		</p>
	</article>
</section>
<section id="masonry">
	<img src="img/accommodations/bunk/bh-living-space.jpg" />
	<img src="img/accommodations/bunk/bh-bathroom.jpg" />
	<img src="img/accommodations/bunk/bh-bunks.jpg" />
	<img src="img/accommodations/bunk/bh-sliding-door.jpg" />
	<img src="img/accommodations/bunk/bh-bbq.jpg" />
</section>
<div class="lightbox">
	<div class="title"></div>
	<div class="filter"></div>
	<div class="arrowr"></div>
	<div class="arrowl"></div>
	<div class="close"></div>
</div>
@stop
@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(window).load(function() {
$("section img").click(function() {
$(".lightbox").fadeIn(300);
$(".lightbox").append("<img src='" + $(this).attr("src") + "' alt='" + $(this).attr("alt") + "' />");
$(".filter").css("background-image", "url(" + $(this).attr("src") + ")");
$("html").css("overflow", "hidden");
if ($(this).is(":last-child")) {
$(".arrowr").css("display", "none");
$(".arrowl").css("display", "block");
} else if ($(this).is(":first-child")) {
$(".arrowr").css("display", "block");
$(".arrowl").css("display", "none");
} else {
$(".arrowr").css("display", "block");
$(".arrowl").css("display", "block");
}
});
$(".close").click(function() {
$(".lightbox").fadeOut(300);
$(".lightbox img").remove();
$("html").css("overflow", "auto");
});
$(document).keyup(function(e) {
if (e.keyCode == 27) {
$(".lightbox").fadeOut(300);
$(".lightbox img").remove();
$("html").css("overflow", "auto");
}
});
$(".arrowr").click(function() {
var imgSrc = $(".lightbox img").attr("src");
var search = $("section").find("img[src$='" + imgSrc + "']");
var newImage = search.next().attr("src");
$(".lightbox img").attr("src", newImage);
$(".filter").css("background-image", "url(" + newImage + ")");
if (!search.next().is(":last-child")) {
$(".arrowl").css("display", "block");
} else {
$(".arrowr").css("display", "none");
}
});
$(".arrowl").click(function() {
var imgSrc = $(".lightbox img").attr("src");
var search = $("section").find("img[src$='" + imgSrc + "']");
var newImage = search.prev().attr("src");
$(".lightbox img").attr("src", newImage);
$(".filter").css("background-image", "url(" + newImage + ")");
if (!search.prev().is(":first-child")) {
$(".arrowr").css("display", "block");
} else {
$(".arrowl").css("display", "none");
}
});
});
</script>