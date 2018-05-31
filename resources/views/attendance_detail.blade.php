<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <h1>Attendance slot {{$attrSlot}}</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Rollnumber</th>
            <th>Name</th>
            <th>Present</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list_student as $key => $student)
            <tr id="row-{{$student -> id}}">
                <td class="row-roll">{{$student -> student_id}}</td>
                <td class="row-time">{{$student -> name}}</td>
                <td class="row-subject"><input type="checkbox" id="check-{{$student -> id}}" class="check"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="btn-submit" class="btn btn-info">Submit</button>

    <!--modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $('#btn-submit').click(function () {
            var stuPresent = $('.check:checked').map(function () {
                return this.id.replace('check-', '');
            }).get();
            alert(JSON.stringify(stuPresent));
            $.ajax({
                type:'POST',
                url:'/v1/attendance-detail/many',
                data: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    "attrSlot": '{{$attrSlot}}',
                    "stuPresent" : JSON.stringify(stuPresent)
                },
                success: function (data) {
                    if(data.result){
                        alert("submit succesfully")
                    }else
                        alert("db error")

                },
                error: function () {
                    alert('server error')
                }
            });
        })
    </script>
</div>
</body>
</html>