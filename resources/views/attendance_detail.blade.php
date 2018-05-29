<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="@csrf-token" content="{{csrf_token()}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h1>Time and Class Select</h1>
    <p>
        Timeslot today {{$time}}
    </p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Slot ID</th>
            <th>Timeslot</th>
            <th>Subject</th>
            <th>Class ID</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list_slot as $key => $slot)
            <tr id="row-{{$slot -> id}}">
                <td class="row-id">{{$slot -> id}}</td>
                <td class="row-time">{{$slot -> time}}</td>
                <td class="row-subject">{{$slot -> subject}}</td>
                <td class="row-class">{{$slot -> class_id}}</td>
                <td><a href="/{{$slot -> id}}">Take</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script src="{{asset('js/app.js')}}"></script>
</div>
</body>
</html>