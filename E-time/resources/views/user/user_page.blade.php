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
            <label>User</label>
            <form action="{{route('user.store')}}" method="post">
            @csrf
            @method('POST')
                <input type="text" name="username" placeholder="User_name">
                <input type="text" name="telephone" placeholder="Telephone">
                <input type="text" name="stutus" placeholder="stutus">
                <input type="text" name="role" placeholder="Role">
                <input type="submit" name="save" value="save" >
            </form>
        </div>
        <div class="right_content">
        <table>
        <tr>
        <th>Number</th>
        <th>User_name</th>
        <th>Telephone</th>
        <th>Status</th>
        <th>Role</th>
        <th>Action</th>
        </tr>
        <tr>
        @foreach($Users as $Data)
        <tr>
            <?php $number = 0; ?>
            <td>{{$number = $number+1;}}</td>
            <td>{{$Data->username}}</td>
            <td>{{$Data->telephone}}</td>
            <td>{{$Data->stutus}}</td>
            <td>{{$Data->role}}</td>
            <td>
                <a href="{{url('user_page/'.$Data->id.'/destroy')}}">Delete</a>
                <a href="{{url('user_page/'.$Data->id.'/update')}}">Update</a>
            </td>
        </tr>
        @endforeach
    </table>
        </div>
    </div>
</body>
</html>