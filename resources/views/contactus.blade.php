<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eshop/resources/css/style.css">
    <title>About us</title>
    <style>
        *{margin: 0 auto;background-color: rgb(47, 30, 27);}
        .header{margin: 3% 0 0 0;display: flex;align-items: center;}
        a{color: rgb(255, 209, 57);text-decoration: none;}
        a:hover{color: rgb(255, 255, 255);}
        .header a{text-decoration: none;}
        .container{background-color: rgb(255, 255, 255);width: 73%;height: 500px;margin-top: 5%;}
        p{background-color: rgb(255, 255, 255);}
        .container img{margin: 4% 39%;width: 19%; height: 200px; }
        .container p{margin: 1% 41%; font-size: 20px;font-weight: bold; }
        h5{background-color: rgb(255, 255, 255);}
        .container h5{margin-left: 41.5%; font-size: 20px;font-weight: bold; color: rgba(0, 0, 0, 0.326);}
        .container h6{background-color: rgb(255, 255, 255);margin-left: 41.5%; font-size: 20px;color: rgb(34, 27, 27);}
        .container a{background-color: rgb(255, 255, 255);font-size: 20px; color: rgb(32, 54, 54); margin: -44%; margin-top: 10%;}
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('home') }}">HOME</a>
        <a href="{{ route('aboutus') }}">ABOUT US</a>
        <a href="{{ route('contactus') }}" style="color: white;">CONTACT US</a>
    </div>
    <div class="container">
        <h5>prod. by RMBCK</h5>
        <img src="https://sun9-27.userapi.com/impf/c840632/v840632206/52f18/q0u2YIORoTM.jpg?size=853x640&quality=96&proxy=1&sign=cd98b53079cd2c9ef41fd149ba507a77&type=album" style="border-radius: 50%;" alt="">
        <img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png" style="border-radius: 25%; width: 3%; height: 40px; " alt="">
        <a href="https://www.instagram.com/raiymbeeck">click here</a>
        


    </div>
</body>
</html>