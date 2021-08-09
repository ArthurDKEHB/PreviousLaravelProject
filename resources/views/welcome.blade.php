@extends ('layouts/mylayout')

@section('content')



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <!-- <img src="{{URL('/images/DIYLogo.png')}}" width="400"> -->
        </div>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>DIYLife: <span>Be yourself<br />
					Inspire yourself by our creators</span></h1>
					<!-- <ul class="actions">
						<li><a href="#" class="button alt"></a></li>
					</ul> -->
				</div>
			</section>

		<!-- One -->
		@foreach ($posts as $post)
			<section id="one">
				<div class="inner">
					<header>
						<h2>{{ $post->title }}</h2>
					</header>
					<p class="limited">{{ $post->body }}</p>
					<ul class="actions">
						<li><a href="posts/{{ $post->id }}" class="button alt">See full post</a></li>
					</ul>
				</div>
			</section>
			@endforeach

		<!-- Two -->
			<section id="two">
				<div class="inner">
					<article>
						<div class="content">
							<header>
								<h3>What is DIYLife?</h3>
							</header>
							<div class="image fit">
								<img src="images/pic01.jpg" alt="" />
							</div>
							<p>DIY stands for "Do it yourself". It's about a comunity of peope who share fun DIY projects.</p>
						</div>
					</article>
					<article class="alt">
						<div class="content">
							<header>
								<h3>Why this website?</h3>
							</header>
							<div class="image fit">
								<img src="images/pic02.jpg" alt="" />
							</div>
							<p>Me and my friends do a lot of DIY projects, we wanted to leard more and share our projects but the only good thing we could find was YouTube and Instagram. But we didn't find any website dedicated to this.
							That is why me (Arthur) and my friend (Ian) wanted to make this possible.</p>
						</div>
					</article>
				</div>
			</section>

		

		

        @endsection