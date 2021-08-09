@extends ('layouts/mylayout')

@section('content')



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

	@foreach ($posts as $post)
	<section id="one">
		<div class="inner">
			<header>
				<h2>{{ $post->title }}</h2>
			</header>
			<p class="limited">{{ $post->body }}</p>
			<p class="author">Written by: {{ $post->user->name }}</p>
			<p class="author">Posted at: {{ $post->created_at->format('d/m/Y H:i') }} </br>Last updated at: {{ $post->updated_at->format('d/m/Y H:i')}}</p>

			<ul class="actions">
				<li><a href="posts/{{ $post->id }}" class="button alt">See full post</a></li>
			</ul>
			@auth
			@if(Auth::user()->id == $post->user_id)
			<a href="posts/{{ $post->id }}/edit" class="button alt">Edit</a>

			<!-- <form method="POST" action="{{ url('/posts') }}/{{ $post->id }}">
				@method('DELETE')
						<button class="button is-link" type="submit">Delete</button>

			</form> -->

			@endif
			@endif
		</div>
	</section>
	@endforeach




	@endsection