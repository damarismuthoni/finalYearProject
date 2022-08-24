<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
   <style>
        /* Add your custom css  */
    body{
        padding-top: 100px;
        background:#B83818;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
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
    .register{
        width: 360px;
        height:min-content;
        padding:20px;
        border-radius: 12px;
        background: #ffffff;
    }
    .btn{
        background: #080D38;
        border-radius: 20px;
    }
    </style>

</head>
<body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<div class="register">

    <form class="needs-validation" method="POST" form action="/api/register">

        <h1>Register</h1>

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

        <div class="form-group">
        <div class="form-group was validated"></div>
            <input type="text"  class="form-control" name="police_name" value="Susan Mwende" placeholder="Name">
                <div class="invalid-feedback">
                 please enter your Name
                </div>
        </div>

         <div class="form-group"> 
         <div class="form-group was validated"></div>  
           <input type="text" class="form-control" name="reg_no" value="ofc/4828/3948"placeholder="Registration Number">
              <div class="invalid-feedback">
              please enter your Registration Number
              </div>
         </div>

         <div class="form-group">   
         <div class="form-group was validated"></div>
          <input type="text" class="form-control" name="police_station_id" value="8402" placeholder="Police Station ID">
              <div class="invalid-feedback">
              please enter your Police Station Id
              </div>
         </div>

         <div class="form-group"> 
         <div class="form-group was validated"></div>  
           <input type="text" class="form-control" name="phone_no" value="0724930492" placeholder="Phone Number">
             <div class="invalid-feedback">
                please enter your Phone No
             </div>
         </div>

         <div class="form-group">  
         <div class="form-group was validated"></div>   
           <input type="password" class="form-control" name="password" value="susan123" placeholder="Password">
            <div class="invalid-feedback">
              please enter your Password
            </div>
         </div>

             <input type="submit" class="btn form-control btn-success btn-block" name="" value="Submit">
 
    </form>

</div>




</body>
</html>