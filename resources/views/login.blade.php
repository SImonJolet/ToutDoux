<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Becode-Login</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background: white;
        }
        .container{
            align-items: center;
            display: flex;
            justify-content: center;
            align-content: center;
            width: 100%;
            height: 100%;
            background: white;

        }
        label{
            color: white;
        }
        form{
            display: grid;
            grid-template-rows: repeat(5,130px);
            grid-template-columns: repeat(1,350px);
            background: #15242F;
            text-align: center;
            width: 30%;
            border-radius: 30px;
        }
        .login input{
            height: 30px;
            border-radius: 30px;
            background: lightgrey;
        }
        form.form-check{
            display: table;
        }
        form p {
            color: #64C2CE;
        }

        label, input {
            display: table-cell;
            margin-bottom: 10px;
            text-align: center;

        }

        label {
            display: none;
        }

    </style>
</head>
<body>
<div class="container">
    <form action="" method="get" class="form-check">
        <img src="https://cdn.uc.assets.prezly.com/0ce2e96c-4de7-4f10-ac0a-47e10150f06d/-/resize/1108x/-/quality/best/-/format/auto/" alt="logo" width="100%">
        <p>BIENVENUE</p>
        <div class="form-check">
            <label for="name">username</label>
            <input type="text" id="name" name="name" value="Username" style="text-align:center;font-size: large;border-radius: 30px;" onFocus="this.value=''" >
        </div>
        <div class="form-check">
            <label for="passsword">passsword </label>
            <input type="password" id="passsword" name="passsword" value="Password" style="text-align:center;font-size: large ;border-radius: 30px;" onFocus="this.value=''" >
        </div>
        <div class="form-check">
        <input type="submit" value="Connecte" style="text-align:center;font-size: large background: #15242F;">
        </div>
    </form>
</div>
</body>
</html>
