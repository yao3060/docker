<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 navbar-expand">
    <a class="navbar-brand mr-0 px-0" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>


    <!-- Right Side Of Navbar navbar-nav flex-row ml-md-auto d-none d-md-flex-->
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex pr-3">
        <!-- Authentication Links -->
        @auth
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endauth
    </ul>

</nav>
