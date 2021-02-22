<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eshop/resources/css/style.css">
    <title>Home</title>
    <style>
        *{margin: 0 auto;background-color: rgb(47, 30, 27);}
        .header{margin: 3% 0 0 0;display: flex;align-items: center;}
        a{color: rgb(255, 209, 57);}
        a:hover{color: rgb(255, 255, 255);}
        .header a{text-decoration: none;}
        .main{align-items: center;}
        .container{background-color: rgb(255, 255, 255);width: 73%;height: 500px;margin-top: 5%;}
        p{background-color: rgb(255, 255, 255);}
        .container img{margin: 5% 39%;width: 19%; height: 200px; border-radius: 50%;}
        .container p{margin: 2% 41%; font-size: 20px;font-weight: bold;}
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('home') }}" style="color: white;">HOME</a>
        <a href="{{ route('aboutus') }}">ABOUT US</a>
        <a href="{{ route('contactus') }}">CONTACT US</a>
    </div>
    <div class="container">
        <img src="https://sun9-27.userapi.com/impf/c840632/v840632206/52f18/q0u2YIORoTM.jpg?size=853x640&quality=96&proxy=1&sign=cd98b53079cd2c9ef41fd149ba507a77&type=album" alt="">
        <p>My name is Raiymbeck</p>

    </div>
</body>
</html>