<!DOCTYPE html>

<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
    <style>
            /* Add your custom css  */

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #B83818 ;
        }
        .login{
            width: 360px;
            height:min-content;
            padding:20px;
            border-radius: 12px;
            background: #ffffff;
        }
        .login h1{
            font size: 36px;
            margin-bottom:25px;
        }
        .login form{
            font-size: 20px;
        }
        .login form .form-group{
            margin-bottom: 12px;
        }
        .login form input[type="submit"]{
            font-size: 20px;
            margin-top: 15px;
            background: #080D38;
            border-radius: 21px;
        }
    </style>


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <div class="login">
             <h1 class="text-center"> Login </h1>

             @if ($errors->any())
                <div class="alert alert-danger">
                    <b>{{ $message }}</b>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form class="needs-validation" method="POST" action="/api/login">
            <div class="form-group was validated"></div>

            <label class="form-label" for="reg_no">Registration Number</label>
            <input class="form-control" name="reg_no" type="name" id="reg_no" value="ofc/3821/4991" required>

            <div class="invalid-feedback">
                    please enter your Registration Number
            </div>

            <div class="form-group"></div>

                <label class="form-label" for="password">Password</label>
                <input  class="form-control" name="password" type="password" id="password" value="alan123" required>

            <div class="invalid-feedback">
                    please enter your password
            </div>

                <input type="submit" class="btn form-control btn-success btn-block" name="" value="Submit">
            <div>

                <p> Don't have an Account Yet? <a href="/register">
                    Click here to Register</a> </p>
            </div>
        </form>

    </div>
    <script>
        document.body.style.zoom = "80%";
    </script>
</body>
</html>