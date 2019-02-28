<b-navbar type="dark" variant="dark" class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 navbar-expand">


    <b-navbar-brand class="navbar-brand mr-0 px-0" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
    @auth
    <b-navbar-nav class="navbar-nav flex-row ml-md-auto d-none d-md-flex pr-3">
        <b-nav-item-dropdown text="{{ Auth::user()->name }}" right>
            <b-dropdown-item href="#">Account</b-dropdown-item>
            <b-dropdown-item href="#">Settings</b-dropdown-item>
            <b-dropdown-item class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </b-dropdown-item>
        </b-nav-item-dropdown>
    </b-navbar-nav>
    @endauth
 
</b-navbar>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
</form>