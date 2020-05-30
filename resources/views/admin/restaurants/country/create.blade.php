<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Restaurant</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <style>
            label{ display: block; }
        </style>
    </head>
    <body>
        <div>
           <h1>{{$title}}</h1><br>
            @include('admin.restaurants.include.message')
            <form action="" method="post">
                <label>Name</label><input type="text" name="name" required/><br>

                <input type="submit" value="Save">
                @csrf

            </form>
        </div>
    </body>
</html>
