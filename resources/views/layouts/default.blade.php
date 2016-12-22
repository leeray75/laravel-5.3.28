<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body data-role="page">
        
        <header>
        @include('includes.header')
        </header>

        <main class="container" data-role="content">
        @yield('content')
        </main>

        <footer data-role="footer">
        @include('includes.footer')
        </footer>

    </body>
</html>