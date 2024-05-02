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
            <label>Class</label>
            <form action="{{route('class.store')}}"  method="post">
            @csrf
            @method('POST')
                <input type="text" name="name" placeholder="Class_name" required>
                <input type="text" name="detail" placeholder="Detail">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
        

            <table border="1">
                <tr>
                    <th>Number</th>
                    <th>Class_name</th>
                    <th>Class_detail</th>
                    <th>Actions</th>
                </tr>
                @foreach($classroom  as $Data)
        <tr>
            <!-- <td>{{$Data->id}}</td> -->
            <?php $number = 0; ?>
            <td>{{$number = $number+1;}}</td>
            <td>{{$Data->name}}</td>
            <td>{{$Data->detail}}</td>
            <td>

            
            <a href="{{url('class/'.$Data->id.'/destroy')}}">Delete</a>
            <a href="{{url('class/'.$Data->id.'/update')}}">Update</a>
            </td>
        </tr>
                @endforeach
            </table>
            
        </div>
    </div>
</body>
</html>