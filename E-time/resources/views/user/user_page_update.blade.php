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
                    <li><a href="{{url('user.user_page')}}">User</a></li>
                    <li><a href="../pages/periods.php">Periods</a></li>
                    <li><a href="../pages/course_page.php">Course</a></li>
                    <li><a href="../pages/class_page.php">Class</a></li>
                    <li><a href="../pages/time_table.php">Timetable</a></li>
                </ul>
            </menu>
            <label>User</label>
        </div>
        <div class="right_content">
        <form action='/update/.{{$update->id}}./update' method="put">
        @csrf
        @method('POST')
                      <input type="text" name="name" value="{{$update->username}}" placeholder="user_name">
                      <input type="text" name="telephone" value="{{$update->telephone}}" placeholder="Course_name">
                      <input type="text" name="stutus" value="{{$update->stutus}}" placeholder="stutus">
                      <input type="text" name="role" value="{{$update->role}}" placeholder="Role">
                      <input type="submit" name="save" value="save" >
            </form>
        </div>
 <?php
 ?>
    </div>
</body>
</html>