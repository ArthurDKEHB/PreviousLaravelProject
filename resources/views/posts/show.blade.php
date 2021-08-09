@extends ('layouts/mylayout')

@section('content')



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <section id="one">
        <div class="inner">
            <header>
                <h2>{{ $post->title }}</h2>
            </header>
            <p>{{ $post->body }}</p>
            <p class="author">Written by: {{ $post->user->name }}</p>
            <p class="author">Posted at: {{ $post->created_at->format('d/m/Y H:i') }} </br>Last updated at: {{ $post->updated_at->format('d/m/Y H:i')}}</p>
            @auth
            <a href="">Like this DIY</a>
            @endif
            <h2>Comments</h2>
        </div>
    </section>



    @endsection