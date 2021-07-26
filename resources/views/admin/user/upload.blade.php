<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('update-user/' . $user->id) }}" enctype="multipart/form-data" id="usertable" method="POST" >
        <input type="file" name="image" id="">
    </form>
</body>
</html>