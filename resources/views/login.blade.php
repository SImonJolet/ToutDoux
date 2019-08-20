<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Becode-Login</title>
    <style>
        *{
            border:1px solid black;
        }
        .container{

        }
        label{
            color: white;
        }
        .login{
            display: grid;
            grid-template-rows: repeat(5,160px);
            grid-template-columns: repeat(1,400px);
            background: #15242F;
        }
        .login input{
            height: 30px;
            border-radius: 30px;
            background: lightgrey;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="login">
        <img src="https://cdn.uc.assets.prezly.com/0ce2e96c-4de7-4f10-ac0a-47e10150f06d/-/resize/1108x/-/quality/best/-/format/auto/" alt="logo" width="100%">
        <p>BIENVENUE</p>
        <label for="name">username</label>
        <input type="text" id="name" name="name" required>
        <label for="passsword">passsword </label>
        <input type="password" id="passsword" name="passsword" required>
        <input type="button" value="Connecte" style="text-align:center;font-size: large">
    </div>
</div>
</body>
</html>
