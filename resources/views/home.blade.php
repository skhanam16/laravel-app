<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <p>Congrates you are logged in</p>
        
    @else
        
    <div style="border: 1px solid black">
    <h1>User registaration</h1>
    <form action="/register" method="POST">
        @csrf
        <input type="text" placeholder="name" name='name'>
        <input type="text" placeholder="email" name='email'>
        <input type="password" placeholder="password" name='password'>
        <input type="submit"  value="Submit" name='submit'>
    </form>
    </div>
    @endauth


</body>
</html>