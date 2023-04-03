<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>

        img{
            width: 100%;
        }
        .login {
            height: 1000px;
            width: 100%;
            background: radial-gradient(#653d84, #332042);
            position: relative;
        }
        .login_box {
            width: 1050px;
            height: 600px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #fff;
            border-radius: 10px;
            box-shadow: 30px 30px 60px 30px #0004;
            display: flex;
            overflow: hidden;
        }
        .login_box .left{
            width: 41%;
            height: 100%;
            padding: 25px 25px;

        }
        .login_box .right{
            width: 59%;
            height: 100%
        }
        .left .top_link a {
            color: #452A5A;
            font-weight: 400;
        }
        .left .top_link{
            height: 20px
        }
        .left .contact{
            display: flex;
            align-items: center;
            justify-content: center;
            align-self: center;
            height: 100%;
            width: 73%;
            margin: auto;
        }
        .left h3{
            text-align: center;
            margin-bottom: 40px;
        }
        .left input {
            border: none;
            width: 80%;
            margin: 15px 0px;
            border-bottom: 1px solid #4f30677d;
            padding: 7px 9px;
            width: 100%;
            overflow: hidden;
            background: transparent;
            font-weight: 600;
            font-size: 14px;
        }
        .left{
            background: linear-gradient(-45deg, #dcd7e0, #fff);
        }
        .submit {
            border: none;
            padding: 15px 70px;
            border-radius: 8px;
            display: block;
            margin: auto;
            margin-top: 120px;
            background: #583672;
            color: #fff;
            font-weight: bold;
            -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
            -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
            box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
        }



        .right {
            background: linear-gradient(212.38deg, rgba(242, 57, 127, 0.7) 0%, rgba(175, 70, 189, 0.71) 100%),url(https://static.seattletimes.com/wp-content/uploads/2019/01/web-typing-ergonomics-1020x680.jpg);
            color: #fff;
            position: relative;
        }

        .right .right-text{
            height: 100%;
            position: relative;
            transform: translate(0%, 45%);
        }
        .right-text h2{
            display: block;
            width: 100%;
            text-align: center;
            font-size: 50px;
            font-weight: 500;
        }
        .right-text h5{
            display: block;
            width: 100%;
            text-align: center;
            font-size: 19px;
            font-weight: 400;
        }

        .right .right-inductor{
            position: absolute;
            width: 70px;
            height: 7px;
            background: #fff0;
            left: 50%;
            bottom: 70px;
            transform: translate(-50%, 0%);
        }
        .top_link img {
            width: 28px;
            padding-right: 7px;
            margin-top: -3px;
        }

        .box:hover{
            box-shadow: 5px 5px 5px 5px black;
        }


    </style>
    @yield('css')
</head>
<body>
<section class="login">
    <div class="login_box">
        @yield('content')
    </div>
</section>
</body>
</html>
