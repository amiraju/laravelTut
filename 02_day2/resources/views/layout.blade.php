<html>
<title>layout page</title>
<link>

<body>
{{-- @include('partials.header')
@include('partials.nav')
@include('partials.leftsidebar') --}}
@yield('content')
{{-- @include('partials.footer') --}}

<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
@yield('script')
<body>

</html>
