<header id="header">
    <nav>
        <div class="nav-left">
            <ul>
                <li><a href="{{ url('/posts') }}">posts</a></li>
                <li><a href="#">new</a></li>
                <li><a href="#">hot</a></li>
            </ul>
        </div>
        <div class="nav-center">
            <ul>
                <li class="heading">STUPID.EXPOSED</li>
            </ul>
        </div>
        <div class="nav-right">
            <ul>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">login</a></li>
                    <li><a href="{{ url('/register') }}">register</a></li>
                @else
                    <li><a href="#">settings</a></li>
                    <li><a href="{{ url('/logout') }}">logout</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>