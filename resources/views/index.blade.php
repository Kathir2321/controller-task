<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu card</title>
</head>
<body>
    <h1>create menu</h1>
    <form action="/store" method="post">
        @csrf
        <label>Food Name :</label><input name="name" placeholder="enter food name" type="text"/>
        <input type="submit" name="submit" value="submit">

    </form>
    
</body>
</html>