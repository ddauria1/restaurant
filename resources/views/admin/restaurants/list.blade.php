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
            <a href="/admin/restaurants/create">Add</a><br>
            <table id="restaurantsTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{$restaurant->id}}</td>
                        <td><a href="/admin/restaurants/view/{{$restaurant->id}}">{{$restaurant->name}}</a></td>
                        <td>{{$restaurant->address}}</td>
                        <td>{{$restaurant->city}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
