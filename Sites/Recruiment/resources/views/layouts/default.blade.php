<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
                <header class="row">
                    @include('includes.header')
                </header>

                <div id="main" class="row">
                    @yield('content')
                </div>

                <footer class="row">
                    @include('includes.footer')
                </footer>

            </div>
        </div>
    </body>
</html>