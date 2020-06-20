@extends('vendor.voyager.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('head')
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@endsection

@section('content')
    <div class="page-content browse container-fluid">
           <h1>{{$title}}</h1><br>
            @include('admin.restaurants.include.message')
            <form action="" method="post">
                <label>Restaurants</label>
                <select name="restaurantID" class="selectpicker" data-live-search="true" >
                    @foreach($restaurants as $restaurant)
                        <option value="{{$restaurant['id']}}">{{$restaurant['name']}}</option>
                    @endforeach
                </select>
                <br><br>
                <label>Users</label>
                <select name="uid" class="selectpicker" data-live-search="true" >
                    @foreach($users as $user)
                        <option value="{{$user['id']}}">{{$user['name']}}</option>
                    @endforeach
                </select>
                <br><br>
                <input type="submit" value="Save">
                @csrf
            </form>
        </div>
        <script>
            $('.selectpicker').selectpicker();
        </script>
    </body>
</html>
@endsection