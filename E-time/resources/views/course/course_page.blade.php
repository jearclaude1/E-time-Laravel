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
            <label>Course</label>
            <form action="{{route('course.store')}}" method="post">
            @csrf
            @method('POST')
                <input type="text" name="name" placeholder="Course_name">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
            <table border="1">
                <tr>
                    <th>Number</th>
                    <th>Course_name</th>
                    <th>Action</th>
                </tr>
              @foreach($course as $Data)
                       <tr>
                       <?php $number = 0; ?>
                       <td>{{$number = $number+1;}}</td>
                           <td>{{$Data ->name}}</td>
                           <td>
                           <a href="{{url('course/'.$Data->id.'/destroy')}}">Delete</a>
                           <a href="{{url('course/'.$Data->id.'/update')}}">Update</a>
                           </td>
                       </tr>
        @endforeach
            </table>
        </div>
    </div>
</body>
</html>