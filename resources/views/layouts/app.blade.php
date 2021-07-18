<!DOCTYPE html>
<html lang="en">


<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center "
        style="background: rgba(6, 101, 183, 0.9) !important;">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a
                    href="mailto:contact@visionlumbini.org.np">contact@visionlumbini.org.np</a>
                <i class="bi bi-phone-fill phone-icon"></i> Main : +977 071-549494, Ktm : 01-5905890
            </div>
            <div class="cta d-none d-md-block">
                @auth
                    <a href="/home" class="scrollto">Profile</a>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="/register" class="scrollto">Register</a>
                    <a href="/login" class="scrollto">Login</a>

                @endauth
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    @include('layouts.head')


    <br><br><br><br><br><br><br>
    <main id="main">
        @include('layouts.message')

        @yield('content')

    </main><!-- End #main -->
    @include('layouts.footer')

</body>

</html>
