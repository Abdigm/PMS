<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient information system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('Admin/images/socod.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
    
    }

    .card {
        width: 300px;
        margin-left: 100px;
        margin-top: 250px;
        border: 2px rgba(255,255,255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
        background: transparent;
        transform: translateY(-30%);

    }
    .circle {
        position: relative;
        width: 256px;
        height: 256px;
        display: flex;
        justify-content: center;
        align-items: center;

    }
    .circle span {
        position: absolute;
        left: 0;
        width: 32px;
        height: 6px;
        background: #2c4766;
        border-radius: 8px;
        transform-origin: 128px;
        transform: scale(2.2) rotate(calc(var(--i)*(360deg/31)));
        animation: animateBlink 3s Linear infinite;
    }
    @keyframes animateBlink {
        0% {
            background: #0ef;
        }
        25% {
            background: #2c4766;
        }
    }
    .container{
    position: absolute;
    width: 300px; 
    margin-right: 255px;
    margin-left: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}
.container form{
    width: 100%;
    padding: 0 50px; 
}
.card-header{
    font-size: 2em;
    color: #0ef;
    text-align: center;
}
.input-box{
    position: relative;
    margin: 25px 0;
}
.input-box input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: 2px solid #2c4766;
    outline: none;
    border-radius: 40px;
}
.input-box ::placeholder{
     position: absolute;
     top: 50%;
     left: 20px;
     transform: translateY(-50%);
     font-size: 1em;
     color: black;
     pointer-events: none;
}
.btn btn-info{
    width: 100%;
    height: 45p;
    background: #0ef;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #1f293a;
    font-weight: 600;
}
</style>

<body>
<div class="circle">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Login here
            </div>
            <form method="post" action="auth.php">
                <div class="input-box">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="input-box">
                <input type="password" name="pass" class="form-control" placeholder="Password" required>
                </div>
                <button class="btn btn-info" name="loginBtn">Login</button>
            </form>
        </div>
    </div>
    <span style="--i:0;"></span>
    <span style="--i:1;"></span>
    <span style="--i:2;"></span> 
    <span style="--i:3;"></span>
    <span style="--i:4;"></span>
    <span style="--i:5;"></span>
    <span style="--i:6;"></span>
    <span style="--i:7;"></span>
    <span style="--i:8;"></span>
    <span style="--i:9;"></span>
    <span style="--i:10;"></span>
    <span style="--i:11;"></span>
    <span style="--i:12;"></span> 
    <span style="--i:13;"></span>
    <span style="--i:14;"></span>
    <span style="--i:15;"></span>
    <span style="--i:16;"></span>
    <span style="--i:17;"></span>
    <span style="--i:18;"></span>
    <span style="--i:19;"></span>
    <span style="--i:20;"></span>
    <span style="--i:21;"></span>
    <span style="--i:22;"></span> 
    <span style="--i:23;"></span>
    <span style="--i:24;"></span>
    <span style="--i:25;"></span>
    <span style="--i:26;"></span>
    <span style="--i:27;"></span>
    <span style="--i:28;"></span>
    <span style="--i:29;"></span>
    <span style="--i:30;"></span>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>