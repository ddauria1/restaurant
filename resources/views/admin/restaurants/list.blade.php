@extends('vendor.voyager.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('head')
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <style>
            #restaurantsTable{ width: 100%; }
        </style>
@endsection

@section('content')
        <div class="page-content browse container-fluid">
            <h1>{{$title}}</h1><br>
            @include('admin.restaurants.include.message')
            <a href="/admin/restaurants/create" class="btn btn-success">Add</a><br>
            <input type="text" name="Search" value="" id="searchRestaurant"><br>
            <table id="restaurantsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="restaurantsTableTBody">
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{$restaurant->id}}</td>
                        <td><a href="/admin/restaurants/view/{{$restaurant->id}}">{{$restaurant->name}}</a></td>
                        <td>{{$restaurant->address}}</td>
                        <td>{{$restaurant->city}}</td>
                        <td style="text-align:right;"><a href="/admin/restaurants/delete/{{$restaurant->id}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $restaurants->links() }}
        </div>
        <script>
            jQuery( "#searchRestaurant" ).keyup(function() {
                const name = jQuery('#searchRestaurant').val();
                if(name.length>2) {
                    $.ajax({
                        dataType: "json",
                        url: '/admin/restaurants/' + name,
                        success: function (result) {
                            //let tbody = "<tr><td>3</td><td>Restaurant 1</td><td>this is my address</td><td>London</td><td>Delete</td></tr>";
                            jQuery('#restaurantsTableTBody').html(tbody);
                        },
                    });
                }
            });
        </script>
@endsection