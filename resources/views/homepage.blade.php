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

        @media (max-height: 500px){
        .social_media{
            display: none !important;
        }
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
    <div class="sidebar">
        <ul>
            <li><a href="homepage"></i>Home</a></li>
            <li><a href="abstracts"></i>Abstracts</a></li>
            <li><a href="payments"></i>Payments</a></li>
            <li><a href="arrests"></i>Arrests</a></li>
            <li><a href="police-station"></i>Portfolio</a></li>
            
        </ul> 
      
    </div>
    <div class="main_content">
    <div class="header"> <h1>THE KENYA NATIONAL POLICE.</h1> </div>  
    <div class="info">
    <div style="text-align:center">
      <p> <b> Our Vison:</b> <hr><br>
            To be a world class police service, with a people-friendly, responsive and professional workforce.<br> <br>
             <b>   Our Mission: </b><br><hr><br>

            We are committed to providing T quality police service to meet the expectations of our customers; by upholding the rule of law,<br>
            creating and maintaining strong partnerships for a conducive social, economic and political development of Kenya. </p>
            <b>Our Core Values:</b><br><br>
            Be proactive and responsive in the discharge of our duties:<br>  
            To exercise integrity and courtesy at all time;<br>
            To cultivate and maintain partnership with all stakeholders;<br>
            To create and maintain team spirit within the service;<br>
            To be fair and firm in all our undertakings;<br>
            To maintain a disciplined and professional workforce;<br>
            To be gender sensitive;<br>
            To promote, protect and respect the human rights of our customers.<br><br>
            <b>  Core Functions:</b> <br> <br>
            Maintenance of law and order;<br>
            Preservation of peace;<br>
            Protection of life and property;<br>
            Prevention and detection of crime;<br>
            Apprehension of offenders; and<br>
            Enforcement of all laws and regulations with which it has been charged.<br>
        </div>
          <div> </div>
      </div>
    </div>
</div>

</body>

<footer>
    
    
</footer>
</html>
