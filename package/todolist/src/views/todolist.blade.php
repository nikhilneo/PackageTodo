<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo List</title>
</head>
<body>
    <p>Hello every one here is our todolist page.</p>
    <form action="{{ route('todolist.form') }}" method="post">
        {{ csrf_field()}}
        <label for="name">To Do Title : </label>
        <input type="text" name="name" id="name">
        <br><br>

        <label for="description">Description : </label>
        <textarea name="description" id="description" cols="20" rows="5"></textarea>
        <br/><br/>

        <input type="submit" value="Save into Todo List">
    </form>
</body>
</html>