<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>E-time</title>
</head>
<body>
    <div class="content">
        <div class="left_content">
            <p>E-<span>Time </span></p>
            <menu>
            <ul>
                    <li><a href="{{url('#')}}">User</a></li>
                    <li><a href="#">Periods</a></li>
                    <li><a href="#">Course</a></li>
                    <li><a href="#">Class</a></li>
                    <li><a href="#">Timetable</a></li>
                </ul>
            </menu>
            <label>Course</label>
        </div>
        <div class="right_content">
   <form action='/update/{{$update->id}}' method="POST">
    @csrf

    <input type="text" name="name" value="{{$update->name}}" placeholder="user_name">
    <input type="submit" name="save">
</form>
        </div>

    </div>
</body>
</html>