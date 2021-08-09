@extends ('layouts/mylayout')

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1>New Post</h1>
        

        <form method="POST" action="{{ url('/posts') }}">
        @csrf

            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input  class="input  {{ $errors->has('title') ? 'is-danger' : '' }}" 
                    type="text" 
                    name="title" 
                    id="title"
                    value="{{ old('title') }}">
                    @if ($errors->has('title'))
                    <p class="help is-danger">{{ $errors->first('title') }}</p>  
                    @endif
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <input  class="input @error('title') is-danger @enderror" type="text" name="body" id="body" value="{{ old('body') }}">
                </div>
                @if ($errors->has('body'))
                    <p class="help is-danger">{{ $errors->first('body') }}</p>  
                    @endif
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button  class="button is-link" type="submit">Upload</button>
                </div>
            </div>
            
        </form>

    </div>
</div>

@endsection