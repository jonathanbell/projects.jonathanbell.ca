<header>
    <h1><a href="/">Jonathan Bell</a></h1>
    <nav class="main-nav">
        <ul class="menu-items">
            <li class="menu-item"><a href="/about">About</a></li>
            <li class="menu-item"><a href="mailto:jonathanbell.ca+projects@gmail.com?subject=Ehyo!">Contact</a></li>
            @auth
                <li class="menu-item"><a href="{{ url('/admin') }}">Admin Area</a></li>
                <li class="menu-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
            @endauth

        </ul>
    </nav>
</header>

@auth
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
        {{ csrf_field() }}
    </form>
@endauth
