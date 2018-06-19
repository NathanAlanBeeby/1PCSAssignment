<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="/css/formStyle.css">
    @include('Page layout.nav')
</head>

<body>
<form method="POST" action="/log-in">
    {{csrf_field()}}
    <div class="loginForm">
        <h1>Log in</h1>
        <br>
        <div class="form-group">
            <label for="email">Email Address: </label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>

    <button type="submit" class="btn btn-default">Login</button>
    </div>

    @include ('Page layout.errorAlert')

</form>

</body>

<footer>
    @include('Page layout.footer')
</footer>
</html>
