@include('includes/_header')
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    @include('includes/_nav')
    <main class="page-wrap" id="home">
        <section class="main-content" id="app">
            @include('includes/messages')
            @yield('content')
            
        </section>
    </main>
    @yield('scripts')
    @include('includes/_footer')
</body>
</html>