<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Restaurant</title>
        <style>
            label{
                display: block;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>{{$title}}</h1>
            @include('admin.restaurants.include.message')
            <form method="post" action="/admin/restaurants/update">
                <b>ID</b> {{$restaurant->id}}<input type="hidden" name="id" value="{{$restaurant->id}}"><br>
                <label>Name</label><input type="text" name="name" value="{{$restaurant->name}}"  required/><br>
                <label>Address</label><textarea name="address" required>{{$restaurant->address}}</textarea><br><br>
                <label>AddressTwo</label><textarea name="addressTwo">{{$restaurant->addressTwo}}</textarea><br><br>
                <label>City</label><input type="text" name="city" value="{{$restaurant->city}}"  required/><br><br>
                <label>Postcode</label><input type="text" name="postcode" value="{{$restaurant->postcode}}"  required/><br><br>
                <label>Country</label><input type="text" name="countryID" value="{{$restaurant->countryID}}"  required/><br><br>
                <label>Owner</label><input type="text" name="owner" value="{{$restaurant->owner}}"  required/><br><br>
                <label>Email</label><input type="email" name="email" value="{{$restaurant->email}}"  required/><br><br>
                <label>Telephone</label><input type="tel" name="telephone" value="{{$restaurant->telephone}}" /><br><br>
                <b>Created</b> {{$restaurant->created}}<br>
                <b>Updated</b> {{$restaurant->updated}}<br>
                <input type="submit" value="Edit">
                @csrf
            </form>
            <div>
                <a href="/admin/restaurants/delete/{{$restaurant->id}}">Delete</a>
            </div>
        </div>
    </body>
</html>
