<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="/css/formStyle.css">
    @include('Page layout.nav')
</head>

<body>
<form method="GET" action="/">
<div class="logoutForm">
    <h1>You have successfully logged out</h1>
    <br>
    <button type="Homepage" class="home-btn">Home</button>
    <p>Come back next time</p>


</div>
</form>
</body>

<footer>
@include('Page layout.footer')
</footer>
</html>
