<!-- Header -->
<header id="header">
    <div class="inner">
        <a href="{{ url('/') }}" class="logo">DIYLife</a>
        <nav id="nav">
            <a href="{{ url('/') }}" class="{{ Request::path() === '/' ? 'current_highlited_tab' : ''}}">Home</a>
            <a href="{{ url('/about') }}" class="{{ Request::path() === 'about' ? 'current_highlited_tab' : ''}}">About</a>
            <a href="{{ url('/contact') }}" class="{{ Request::path() === 'contact' ? 'current_highlited_tab' : ''}}">Contact</a>
            <a href="{{ url('/posts') }}" class="{{ Request::path() === 'posts' ? 'current_highlited_tab' : ''}}">Posts</a>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/posts/create') }}" class="{{ Request::path() === 'posts/create' ? 'current_highlited_tab' : ''}}">Create Post</a>
            <!-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> -->
            <!-- <li class="#nav-item dropdown">
                            <a id="dropdown" class="dropdown-toggle" data-toggle="drop" role="button">{{Auth::user()->name}} test</a>
                            <a href="{{ url('/logout') }}" class="text-sm text-gray-700 underline dropdown-item">Logout - {{Auth::user()->name}}</a>  
                        </li> -->
            <a href="{{ url('/logout') }}" class="text-sm text-gray-700 underline">Logout - {{Auth::user()->name}}</a>
            @else
            <a href="{{ route('login') }}" class="{{ Request::path() === 'login' ? 'current_highlited_tab' : ''}}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="{{ Request::path() === 'register' ? 'current_highlited_tab' : ''}}">Register</a>
            @endif
            @endif
            @endif
        </nav>
    </div>
</header>
<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>