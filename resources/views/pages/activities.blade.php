@extends('main')
@section('content')
<section class="hero" id="activites-hero">
	<article>
		
	</article>
</section>
<section class="content" id="article-img-text">
	<article class="inner-content">
		<h1>Activities</h1>
		<hr>
		<article class="img-text">
			<img src="img/activities/hunting.jpg" alt="Hunting Station" >
			<h2>Hunting</h2>
			<h3></h3>
			<p>The Ranch has a hunting expedition that is fit for everyone, from turkeys, to pigs, to birds. Paris Valley has five guided hunting packages to choose from. <a href="{{ route('hunting')}}">Learn More</a></p>
		</article>
		<article class="img-text">
			<img src="img/activities/riding.jpg" alt="Motorcycle" >
			<h2>Riding</h2>
			<h3></h3>
			<p>
			Ride the groomed trails that wined between the 3 valleys or venture off the maintained tracks to test your riding skills.
			 <a href="{{ route('riding') }} ">Learn More</a>
			</p>
		</article>
		<article class="img-text">
			<img src="img/activities/shooting.jpg" alt="Shooting Range">
			<h2>Shooting Range</h2>
			<h3></h3>
			<p>
				The Ranch offers visitors a chance to brush up on their shooting skills if needed. We have a target practice range as well as clay pigeon shooting stations. 
				<a href="{{ route('shooting')}} ">Learn More</a>
			</p>
		</article>
	</article>
</section>
@stop