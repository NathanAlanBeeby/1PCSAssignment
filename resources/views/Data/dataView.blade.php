<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <link rel="stylesheet" href="css/dataView.css">
    @include('Page layout.nav')
</head>

<body>
<div class="content">
    <h1>Entry Directory</h1>
    <br>
    @foreach ($records as $record)

       <div class="links">

        <a href="/view-data/{{ $record->id }}">
            {{ $record->id }} :
            {{ $record->firstname }}
            {{ $record->lastName }} -
            {{ $record->company }} -
            {{ $record->address }} ,
            {{ $record->city }} ,
            {{ $record->state }} ,
            {{ $record->zipCode }} .
        </a>
       </div>
    @endforeach;
</div>
</body>

<footer>
    @include('Page layout.footer')
</footer>
</html>
