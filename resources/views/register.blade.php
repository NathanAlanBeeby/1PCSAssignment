<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="/css/formStyle.css">
    @include('Page layout.nav')
</head>
<body>
<form method="POST" action="/user-registration">
    {{csrf_field()}}
    <div class="registerForm">
        <h1>Register An Account:</h1>
        <br>

        <div class="form-group">
            <label for="name">User Name: </label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
        </div>

    <div class="form-group">
        <label for="email">Email Address: </label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>

    <div class="form-group">
        <label for="email_confirmation">Confirm Email Address: </label>
        <input type="email" class="form-control" id="email_confirmation" placeholder="Confirm Email" name="email_confirmation" required>
    </div>

    <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password: </label>
        <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" required>
    </div>

    <button type="submit" class="submitBtn">Register</button>
    </div>

    @include ('Page layout.errorAlert')

</form>
</body>

<footer>
    @include('Page layout.footer')
</footer>
</html>
