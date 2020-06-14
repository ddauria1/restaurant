@extends('vendor.voyager.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('head')
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#staffTable').DataTable();
            } );

        </script>
@endsection

@section('content')
        <div class="page-content browse container-fluid">
            <h1>{{$title}}</h1><br>
            @include('admin.restaurants.include.message')
            <a href="/admin/staff/create" class="btn btn-success">Add</a><br>
            <table id="staffTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Restaurant</th>
                        <th>Creaated</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($staff as $staffMember)
                    <tr>
                        <td>{{$staffMember->id}}</td>
                        <td>{{$staffMember->staffName}}</td>
                        <td>{{$staffMember->restaurantName}}</td>
                        <td>{{date("d M Y",strtotime($staffMember->created))}}</td>
                        <td>{{date("d M Y",strtotime($staffMember->updated))}}</td>
                        <td style="text-align:right;"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@endsection