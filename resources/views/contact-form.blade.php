<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            padding: 10px;
            display: block;
            width: 70%;
            margin: 25px auto;
            font-size: 30px;
        }

        .container{
            max-width: 700px;
            margin: 200px auto;
        }

        button{
            padding: 10px 70px;
            display: block;
            font-size: 30px;
            background: tomato;
            color: white;
            margin: 0 auto;
        }
    </style>
</head>

<body class="container">
    <form action="/register" method="POST">
        @csrf
        <input type="text" placeholder="Last Name" name="lname">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
