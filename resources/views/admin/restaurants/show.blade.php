<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Restaurant</title>
    </head>
    <body>
        <div>
            <h1>{{$title}}</h1>
            <b>ID</b> {{$restaurant->id}}<br>
            <b>Name</b> {{$restaurant->name}}<br>
            <b>Address</b> {{$restaurant->address}}<br>
            <b>AddressTwo</b> {{$restaurant->addressTwo}}<br>
            <b>City</b> {{$restaurant->city}}<br>
            <b>Postcode</b> {{$restaurant->postcode}}<br>
            <b>Country</b> {{$restaurant->countryID}}<br>
            <b>Owner</b> {{$restaurant->owner}}<br>
            <b>Email</b> {{$restaurant->email}}<br>
            <b>Telephone</b> {{$restaurant->telephone}}<br>
            <b>Created</b> {{$restaurant->created}}<br>
            <b>Updated</b> {{$restaurant->updated}}<br>

            <div>
                <button>Edit</button>
                <button>Delete</button>
            </div>
        </div>
    </body>
</html>
