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
            background: #080D38 ;
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
        }
    </style>


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <div class="login">
             <h1 class="text-center"> Login </h1>
        <form class="needs-validation">
            <div class="form-group was validated"></div>

            <label class="form-label" for="reg_no">Registration Number</label>
            <input class="form-control" type="reg_no" id="reg_no" required>

            <div class="invalid-feedback">
                    please enter your Registration Number
            </div>

            <div class="form-group"></div>

                <label class="form-label" for="password">Password</label>
                <input  class="form-control" type="password" id="password" required>

            <div class="invalid-feedback">
                    please enter your password
            </div>

            <div class="form-group"></div> {{-- <input class="btn btn success w-100" type="submit" value="LOGIN"> --}}
        
                <input type="submit" class="btn form-control btn-success btn-block" name="" value="Submit">
        </form>

    </div>
</body>
</html>