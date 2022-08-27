<!DOCTYPE html>

<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/b99e675b6e.js"> </script>

    <style>
            /* Add your custom css  */
            @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
        font-family: 'Josefin Sans', sans-serif;
        }
        h1{  text-align: center; }
        body{
        background-color: #B83818;
        }
        .search{
            width: 25%;
        }
        .wrapper{
        display: flex;
        position: relative;
        }

        .wrapper .sidebar{
        width: 200px;
        height: 100%;
        background: #080D38;
        padding: 30px 0px;
        position: fixed;
        }

        .wrapper .sidebar h2{
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 30px;
        }

        .wrapper .sidebar ul li{
        padding: 15px;
        border-bottom: 1px solid #ffffff;
        border-bottom: 1px solid rgba(0,0,0,0.05);
        border-top: 1px solid rgba(255,255,255,0.05);
        }    

        .wrapper .sidebar ul li a{
        color: #ffffff;
        display: block;
        }

        .wrapper .sidebar ul li a .fas{
        width: 25px;
        }

        .wrapper .sidebar ul li:hover{
        background-color: #1e0d72cc;
        }
            
        .wrapper .sidebar ul li:hover a{
        color: #fff;
        }
        
        .wrapper .sidebar .social_media{
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        }

        .wrapper .main_content{
        width: 100%;
        margin-left: 200px;
        }

        .wrapper .main_content .header{
        padding: 20px;
        background: #B83818;
        color: #ffffff;
        border-bottom: 1px solid #e0e4e8;
        }

        .wrapper .main_content .info{
        margin: 20px;
        color: #ffffff;
        line-height: 25px;
        }

        .wrapper .main_content .info div{
        margin-bottom: 20px;
        }
        .btn-primary{
            background-color: #080D38;
            float: right;
            padding: 15px 10px ;
            margin-top: 10px;
            margin-bottom: 29px;
        }
        .btn-primary:hover{
           background-color: #080D38;
        }

        table, th, td {
        background: white;
        border-radius: 10px;
        padding-right:10px ;
        }

        tr:hover {
            cursor: pointer;
        }

        @media (max-height: 500px){
        .social_media{
            display: none !important;
        }
        }

        #not_found_img {
        width: 40%;
        margin-top: 65px;
    }
        hr {
        width: 16%;
        margin: 10px auto;}

    </style>


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
   
    @include('includes/sidebar')

    <div class="main_content">
    <div class="header">
         <h1>PAYMENTS</h1>
         </div>  
    <div class="info">
    <div style="text-align:center">
        <a href="/payments/new" type="button" class="btn btn-primary"><b>+</b> PAYMENT</a>
        
        <form method="get" action="/paymentslist">
            <label for="basic-url" class="form-label"></label>
            
            <div class="input-group mb-3 search">
                <input type="text " placeholder="search " class="form-control" name="search_term"  value="{{$searchTerm ? $searchTerm : ""}}"
                id="basic-url" >
                <button class="btn btn-secondary" type="submit" id="button-addon2">SEARCH</button>
            </div>
        </form>
        
        <table  class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">ID Number</th>
                <th scope="col">Amount Paid</th>    
                <th scope="col">For</th>
                <th scope="col">Receipt Number</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($payment as $payment)
                        </td>
                        <td>{{$payment->name}}</td>
                        <td>{{$payment->id_number}}</td>
                        <td>{{$payment->amount_paid}}</td>
                        <td>{{$payment->for}}</td>
                        <td>{{$payment->receipt_number}}</td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>

          @if($payment->count() == 0)
          <img id="not_found_img" src="/images/not_found.jpg" />
        @endif

          <div> </div>
      </div>
    </div>
</div>


</body>

<footer>
    
    
</footer>
</html>
