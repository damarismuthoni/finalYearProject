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
       
       .footer{
        margin-left: 20px;
       }
       
       h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
        section {
            padding: 60px 0;
           /* min-height: 100vh;*/
        }
.footer {
    background-color: #B83818;
    background: ;
    padding-top: 80px;
    padding-bottom: 40px;
    margin-left:20%; 
}
/*END FOOTER SOCIAL DESIGN*/
.single_footer{}
@media only screen and (max-width:768px) { 
.single_footer{margin-bottom:30px;}
}
.single_footer h4 {
    color: #fff;
    margin-top: 0;
    margin-bottom: 25px;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 20px;
}
.single_footer h4::after {
    content: "";
    display: block;
    height: 2px;
    width: 40px;
    background: #fff;
    margin-top: 20px;
}
.single_footer p{color:#fff;}
.single_footer ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.single_footer ul li{}
.single_footer ul li a {
    color: #fff;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    line-height: 36px;
    font-size: 15px;
    text-transform: capitalize;
}
.single_footer ul li a:hover { color: #ec91a6; }

.single_footer_address{}
.single_footer_address ul{}
.single_footer_address ul li{color:#fff;}
.single_footer_address ul li span {
    font-weight: 400;
    color: #fff;
    line-height: 28px;
}
.contact_social ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
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
         <h1>THE KENYA NATIONAL POLICE</h1>
         <h4>Welcome {{session()->get('user')}}</h4>
         </div>  
    <div class="info">
    <div style="text-align:center">
      <p> <b> Our Vison:</b> <hr><br>
            To be a world class police service, with a people-friendly, responsive and professional workforce.<br> <br>
             <b>   Our Mission: </b><br><hr><br>

            We are committed to providing  quality police service to meet the expectations of our customers; by upholding the rule of law,<br>
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

<<div class="footer">
  <div class="container">     
      <div class="row">                       
          <div class="col-lg-4 col-sm-4 col-xs-12">
              <div class="single_footer">
                  <h4>Related Links</h4>
                  <ul>
                      <li><a href="#">National Police Service</a></li>
                      <li><a href="#">Directorate of Criminal Investigations </a></li>
                      <li><a href="#">National Police Service Commission</a></li>
                      <li><a href="#">Kenya Law Reports</a></li>
                      <li><a href="#">Independent Policing Oversight Authority</a></li>
                      <li><a href="#">Office of The Director of Public Prosecutions</a></li>
                  </ul>
              </div>
          </div><!--- END COL --> 
          <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single_footer single_footer_address">
                  <h4>Useful Links</h4>
                  <ul>
                      <li><a href="#">Kenya Police Sacco</a></li>
                      <li><a href="#">eCitizen </a></li>
                      <li><a href="#">Huduma Kenya</a></li>
                  </ul>
              </div>
          </div><!--- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single_footer single_footer_address">
                  <h4>Contact Us</h4>
                
              </div>
              <div class="single_footer">
                <ul>
                  <li><a href="#">Kenya Police Headquarters,  </a></li>
                  <li><a href="#">Vigilance House, Harambee Avenue,</a></li>
                  <li><a href="#">PO BOX 30083,</a></li>
                  <li><a href="#">Nairobi, Kenya</a></li>
                  <li><a href="#">Telephone: (020) 341411/6/8</a></li>
              </ul>
              </div>                          
          </div><!--- END COL -->         
      </div><!--- END ROW --> 
                    
  </div><!--- END CONTAINER -->
</div>
</html>
