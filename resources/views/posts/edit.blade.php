@extends ('layouts/mylayout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1>Update post</h1>
        

        <form method="POST" action="{{ url('/posts') }}/{{ $post->id }}">
        @csrf
        @method('PUT')

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input  class="input" type="text" name="title" id="title" value="{{ $post->title }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <input  class="input" type="text" name="body" id="body" value="{{ $post->body }}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button  class="button is-link" type="submit">Change</button>
                </div>
            </div>
            
        </form>

    </div>
</div>

@endsection