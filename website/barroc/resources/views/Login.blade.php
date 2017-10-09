<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href='Login'>Home</a></li>
            <li><a href='development'>development</a></li>
            <li><a href='finance'>finance</a></li>
            <li><a href='marketing'>Marketing</a></li>
        </ul>
    </nav>
</header>
<div id="page-wrap">
    <div class="container">
        <div class="login-wrap">
            <div class="login-html">
                <form action="" method="POST">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                <label for="tab-1" class="tab">Sign In</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                    </div>

                </div>
                <div class="logo">
                    <h1>BARROC-IT</h1>
                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
</body>
</html>


