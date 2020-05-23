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
                <label>Address</label><textarea name="address" required></textarea><br><br>
                <label>AddressTwo</label><textarea name="addressTwo"></textarea><br><br>
                <label>City</label><input type="text" name="city" required/><br><br>
                <label>Postcode</label><input type="text" name="postcode" required/><br><br>
                <label>Country</label>
                <select name="countryID">
                    @foreach($countries as $country)
                        <option value="{{$country['id']}}">{{$country['name']}}</option>
                    @endforeach
                </select>
                <br><br>
                <label>Owner</label><input type="text" name="owner" required/><br><br>
                <label>Email</label><input type="email" name="email" required/><br><br>
                <label>Telephone</label><input type="tel" name="telephone"/><br><br>
                <input type="submit" value="Save">
                @csrf
            </form>
        </div>
    </body>
</html>
