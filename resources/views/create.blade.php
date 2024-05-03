<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="/create-courses" method="post">
    @csrf
<body>
    <input type="text" name="name" >
    <input type="text" name="details">
    <input type="submit" name="save" value="save">
    <input type="submit" name="reset" value="reset">
</body>
</form>
</html>