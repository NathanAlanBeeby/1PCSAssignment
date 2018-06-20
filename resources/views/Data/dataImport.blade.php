
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="stylesheet" href="/css/formStyle.css">
    @include('Page layout.nav')
</head>
<body>
<form id="" method="post" action="{{url('/view-data')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="importForm">
        <h1>Import File</h1>
        <br>
        <input class="fileInput" type="file" name="InputFile" id="InputFile" required>
        <p class="help-block">Will only accept .csv files.</p>
        <button type="submit" class="import-btn">Submit</button>

        @include ('Page layout.errorAlert')
    </div>

</form>
</body>
<footer>
    @include('Page layout.footer')
</footer>
</html>
