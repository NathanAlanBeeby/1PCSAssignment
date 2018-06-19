    <style>
        img{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 15%;
            overflow:hidden;

        }

        .navButtons {
            position: fixed;
            left: 0;
            top: 15%;
            width: 100%;
            background-color: #333;
            overflow: hidden;
            display: table;

        }

        .navButtons a {
            display: table-cell;
            float: left;
            width: 23%;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;

        }

        /* Change the color of links on hover */
        .navButtons a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .navButtons a.active {
            background-color: #4CAF50;
            color: white;
        }

    </style>


    <div class="navButtons">
        @if(!Auth::check())
        <a href="{{Route('home')}}">Home</a>
        <a href="{{Route('user-registration')}}">Register</a>
        <a href="{{Route('login')}}">Login</a>

    @elseif(Auth::check())
        <a href="{{Route('home')}}">Home</a>
        <a href="{{Route('viewData')}}">View Data</a>
        <a href="{{Route('dataImport')}}">Import Data</a>
        <a href="{{Route('logout')}}">Logout</a>
        @endif
        </div>

    <img src="/images/sunnyNav.png" alt="navigation bar image">