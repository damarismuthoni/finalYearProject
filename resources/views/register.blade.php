<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
   <style>
        /* Add your custom css  */
    body{
        padding-top: 100px;
        background-color:#080D38;
    }

    .form-signup h1{
        text-align: center;
    }
    .form-signup{
        margin:0 auto;
        max-width:400px;
        background-color:white;
        padding: 15px; 
    }
    div{
        margin-bottom: 12px;
    }
    .container{
        width: 360px;
        height:min-content;
        padding:20px;
        border-radius: 12px;
        background: #ffffff;
    }
    </style>

</head>
<body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<div class="container">

    <form class="form-signup">

        <h1>Register</h1>
        <div class="form-group">
             <input type="text"  class="form-control" name="name" placeholder="Name">
        </div>

         <div class="form-group">   
              <input type="text" class="form-control" name="reg_no" placeholder="Registration Number">
         </div>

         <div class="form-group">   
              <input type="text" class="form-control" name="police_station_id" placeholder="Police Station ID">
         </div>

         <div class="form-group">   
              <input type="text" class="form-control" name="phone_no" placeholder="Phone Number">
         </div>

         <div class="form-group">   
              <input type="password" class="form-control" name="password" placeholder="Password">
         </div>

         <div class="form-group">   
             <input type="repassword" class="form-control" name="confirm_password" placeholder="Confirm Password">
         </div>

             <input type="submit" class="btn form-control btn-success btn-block" name="" value="Submit">
 
    </form>

</div>




</body>
</html>