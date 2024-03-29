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

        .container {
        background:#B83818;
        border-radius: 20px;
        margin: auto;
        width: 100%;
        padding: 1em;
        }
        #arrests-form {
        margin: 0 auto;
        width: 80%;
        padding: 10px;
        }
        .labels {
        display: inline-block;
        text-align: right;
        width: 40%;
        vertical-align: top;
        margin-top: 20px;
        }
        .input-tab {
  display: inline-block;
  text-align: left;
  width: 50%;
  margin-left: 10px;
}

.input-field {
  display: inline-block;
  width: 100%;
  padding: 5px;
  margin: 18px 0 0 10px;
  border: 1px solid #e67e22;
  border-radius: 4px;
  font-family: inherit;
  font-size: 15px;
  font-weight: bold;
}

::-webkit-input-placeholder {
   font-style: italic;
  font-weight: 300;
}

input {
  margin: 7px;
}
.input-field {
    width: 100%;
  }
  .labels {
    color: white;
  }
 #dropdown {
  width: 100%;
  padding: 5px;
  margin: 20px 0 10px 10px;  
  border: 1px solid #e67e22;
  border-radius: 3px;
  font-family: inherit;
  font-size: 15px;
}
.btn-primary{
    float:right;
    background-color: #080D38;
    margin: 18px;
    margin-top: 29px;
    margin-right: 8%;
    width: 90px;
}
  .btn-primary :hover{
    background-color: #080D38;
  }
    </style>


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
  @include('includes/sidebar')

<div class="main_content">
<div class="header"><h1>ARREST FORM</h1></div>  
        
    </div>
</div>

<div class="container">
  <form id="arrests-form" method="POST" action="/api/arrests">

    <div class="labels">
       <label id="name-label" for="name"> Name</label></div>
    <div class="input-tab">
    <input class="input-field" type="text" id="name" name="name" placeholder="Enter name of arrested individual" required autofocus>
    </div>

    <div class="labels">
        <label id="name-label" for="citizens_id"> National Id Number</label></div>
     <div class="input-tab">
     <input class="input-field" type="text" id="citizens_id" name="citizens_id" placeholder="Enter national Id number" required autofocus>
     </div>
    
     <div class="labels">
      <label id="name-label" for="police_station_id">Police Station*</label></div>
      <div class="input-tab">
        <select id="dropdown" name="police_station_id">
          <option disabled value selected>Select a police station</option>
          @foreach($policeStations as $policeStation)
          <option value="{{$policeStation->id}}">{{$policeStation->police_station_name}}</option>
          @endforeach
          </select>
      </div>
  
     
   
    <div class="labels">
        <label id="name-label" for="arrest_details"> Details</label></div>
    <div class="input-tab">
    <input class="input-field" type="text" id="arrest_details" name="arrest_details" placeholder="Enter details of arrest" required autofocus>
    </div>
    
    <div class="labels">
        <label for="category">Category</label></div>
        <div class="input-tab">
        <select id="dropdown" name="status">
        <option disabled value selected>Please select a category</option>
        <option value="serious">Serious</option>
        <option value="non serious">Non-Serious</option>
        </select>
      </div>

        <div class="labels">
        <label id="name-label" for="date_of_incident"> Arrest Date</label></div>
    <div class="input-tab">
    <input class="input-field" type="date" id="date_of_incident" name="date_of_incident" placeholder="Enter date of arrest" required autofocus>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    

    </form>

  
    
    
         
     
    
</body>
</html>
