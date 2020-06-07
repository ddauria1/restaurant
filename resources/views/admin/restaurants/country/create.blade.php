@extends('vendor.voyager.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('head')
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#restaurantsTable').DataTable();
        } );

    </script>
@endsection

@section('content')
    <div class="page-content browse container-fluid">
       <h1>{{$title}}</h1><br>
        @include('admin.restaurants.include.message')
        <form action="" method="post">
            <label>Name</label><input type="text" name="name" required/><br>

            <input type="submit" value="Save">
            @csrf

        </form>
    </div>
@endsection