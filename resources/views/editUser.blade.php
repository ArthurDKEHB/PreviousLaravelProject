@extends ('layouts/mylayout')

@section('content')

<section id="footerold">
    <div class="inner">
        <header>
            <h2>Edit users</h2>
        </header>
        @foreach ($users as $user)
        <form method="post" action="#">
            <div class="field half first">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$user->name}}" />
            </div>
            <div class="field half">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{$user->email}}" />
            </div>
            <div class="field half first">
                <label for="biography">Biography</label>
                <input type="text" name="biography" id="biography" value="{{$user->biography}}" />
            </div>
            <div class="field half">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="{{$user->username}}" />
            </div>
            <ul class="actions">
                <input class="form-check-input" type="checkbox" name="admin" id="admin" {{ old('admin') ? 'checked' : '' }}>

                <label class="form-check-label" for="admin">
                    {{ __('Admin') }}
                </label>
            </ul>
            <ul class="actions">
                <li><input type="submit" value="Update User" class="alt" /></li>
            </ul>
        </form>
        @endforeach
    </div>
</section>

@endsection