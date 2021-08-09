@extends ('layouts/mylayout')

@section('content')

<!-- Three -->
<section id="three">
	<div class="inner">
		<h3 class="mx-auto">Gebruikte links</h3>
	</div>
	<div class="inner">
		<article>
			<div class="content">
				<span class="icon fa-laptop"></span>
				<header>
					<h3>Laracast</h3>
				</header>
				<p>Zeer leerzaam, soms wel goed zoeken met dat hij met een oudere versie werkt.</p>
				<ul class="actions">
					<li><a href="https://laracasts.com/series/laravel-6-from-scratch" class="button alt">Laracast</a></li>
				</ul>
			</div>
		</article>
		<article>
			<div class="content">
			<span class="icon fa-user"></span>
				<header>
					<h3>School</h3>
				</header>
				<p>Veel geleerd van de online les, en veel notities kunnen maken.</p>
				<ul class="actions">
					<li><a href="https://ehb.instructure.com/courses/19965" class="button alt">Canvas</a></li>
				</ul>
			</div>
		</article>
		<article>
			<div class="content">
				<span class="icon fa-diamond"></span>
				<header>
					<h3>Template</h3>
				</header>
				<p>Ik heb een leuke template gevonden bij templated.co</p>
				<ul class="actions">
					<li><a href="https://templated.co/introspect" class="button alt">Templated</a></li>
				</ul>
			</div>
		</article>
	</div>
	<div class="inner">
		<article>
			<div class="content">
				<header>
					<h3>Niet genoeg</h3>
				</header>
				<p>Ik heb er zeer lang aan gewerkt, maar ik ben te perfectionistisch nog altijd, en heb te veel tijd verloren hiermee.</br>Spijtig, maar heb wel veel geleerd. Ik vond het zeer boeiend.</p>
			</div>
		</article>
		<article>
			<div class="content">
				<header>
					<h3>Wat werkt er:</h3>
				</header>
				<p>- Je kan users aanmaken</br>- Alles van posts werkt behalve deleten</br>- Je kan alleen posts aanmaken als je bent ingelogged</br>- Post is automatisch gelinkt aan user</br>- Alleen eigenaar van post kan post bewerken</br>- De template is overal aangepast met de nodig tweaks</br>- De relaties in de databank zijn aangemaakt</br>- Alle links werken</br>- Alle migrations kloppen</p>
			</div>
		</article>
		<article>
			<div class="content">
				<header>
					<h3>Vlug posts en users aanmaken in terminal:</h3>
				</header>
				<p>php artisan tinker</br>Post::factory(5)->create();</br>User::factory(5)->create();</p>
			</div>
		</article>
	</div>
</section>


@endsection