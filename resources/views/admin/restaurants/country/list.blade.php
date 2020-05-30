<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Restaurant</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#restaurantsTable').DataTable();
            } );

        </script>
    </head>
    <body>
        <div>
            <h1>{{$title}}</h1><br>
            @include('admin.restaurants.include.message')
            <a href="/admin/restaurants/country/create">Add</a><br>
            <table id="restaurantsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Country name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($country as $country)
                    <tr>
                        <td>{{$country->id}}</td>

                        <td style="text-align: center;">{{$country->name}}</td>

                        <td style="text-align:right;"><a href="/admin/restaurants/country/delete/{{$country->id}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
