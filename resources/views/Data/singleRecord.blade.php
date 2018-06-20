<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <link rel="stylesheet" href="/css/dataView.css">
    @include('Page layout.nav')

</head>

<body>

<div class="content">
    <h1>Record History</h1>
    <br>
    <table>
        <tr>
            <th>User id</th>
            <td> {{$record->id}} </td>
            </tr>
        <tr>
            <tr>
            <th>First Name</th>
            <td>{{$record->firstname}}</td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td>{{$record->lastName}}</td>
        </tr>
        <tr>
            <th>Company</th>
            <td>{{$record->company}}</td>
        </tr>
        <tr>
            <th>Profession</th>
            <td>{{$record->profession}}</td>
        </tr>
            <th>chapter Name</th>
        <td>{{$record->chapterName}}</td>
        </tr>

        <tr>
            <th>phone Number</th>
            <td>{{$record->phoneNumber}}</td>
        <tr>
        <tr>
            <th>alt Phone</th>
            <td>{{$record->altPhone}}</td>
        </tr>
            <th>fax Number</th>
            <td>{{$record->faxNumber}}</td>
        <tr>
            <th>cell Number</th>
            <td>{{$record->cellNumber}}</td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>{{$record->email}}</td>
        </tr>
        <tr>
            <th>Website</th>
            <td>{{$record->website}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$record->address}}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{$record->city}}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{$record->state}}</td>
        </tr>
        <tr>
        <th>Zip Code</th>
            <td>{{$record->zipCode}}</td>
        </tr>
        <tr>
            <th>substitute</th>
            <td>{{$record->substitute}}</td>
        </tr>
            <th>Status</th>
            <td>{{$record->status}}</td>
         <tr>
            <th>Join Date</th>
            <td>{{$record->joinDate->format('d/m/Y')}}</td>
        </tr>
        <tr>
            <th>renew Date</th>
            <td>{{$record->renewDate->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Sponsor</th>
            <td>{{$record->sponsor}}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{$record->created_at}}</td>
        </tr>
        <tr>
            <th>Updated at</th>
            <td>{{$record->updated_at}}</td>
        </tr>

    </table>
    <p>


    </p>

</div>
</body>

<footer>
    @include('Page layout.footer')
</footer>
</html>
