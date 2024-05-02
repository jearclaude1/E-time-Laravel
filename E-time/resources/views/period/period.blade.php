
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
            <p>E- <span>Time </span></p>
            <menu>
                <ul>
                    <li><a href="{{url('user/user_page')}}">User</a></li>
                    <li><a href="{{url('period/period')}}">Periods</a></li>
                    <li><a href="{{url('course/course_page')}}">Course</a></li>
                    <li><a href="{{url('class/class_page')}}">Class</a></li>
                    <li><a href="time_table.php">Timetable</a></li>
                </ul>
            </menu>
            <label>Periods</label>
            <form action="{{url('period.store')}}" method="post">
            @csrf
            @method('put')
                <input type="date" name="date_period" placeholder="Date_period" required>
                <input type="time" name="start" placeholder="Start" required>
                <input type="time" name="end" placeholder="End" required>
                <input type="text" name="detail" placeholder="Detail">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
        <table border="1">
                <tr>
                    <th>periods_id</th>
                    <th>date</th>
                    <th>start</th>
                    <th>end</th>
                    <th>detail</th>
                    <th>Action</th>
                </tr>
                       <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
            </table>
        </div>
    </div>
</body>
</html>