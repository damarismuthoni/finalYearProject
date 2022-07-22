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

        @import url('https://fonts.googleapis.com/css?family=Abel');

body, html {
  color: #fff;
  font-family: 'Abel', sans-serif;
  margin: 0;
  padding: 0;
  width: 100%
  background-color: transparent;
}


p {
  display: block;
  margin: 0;
  padding: 0;
  text-align: center;
  font-size: 1.2em;
  line-height: 1.2em;
}

.container {
  background: #B83818;
  margin:0 auto;
  width: 100%;
  padding: 1em;
  
}

#abstract-form {
  margin: 0 auto;
  width: 100%;
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

.btn {
  width: 100%;
  text-align: center;
  margin: 20px;

}

button {
  background: #080D38;
  border-radius: 4px;
  color: white;
  font-size: 1em;
  font-weight: bold;
  font-family: inherit;
  padding: 10px 15px;
  border: 1px solid;
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

@media only screen and (max-width: 768px) {
  body{
   
}
  
  h1 {
    font-size: 2em;
  }
  
  .labels {
    width: 100%;
    text-align: left;
  }
  .input-tab {
    width: 100%;
    float: left;
    margin-left: -10px;
  }
  .input-field {
    width: 100%;
  }
  select {
    width: 100%;
  }
  .btn {
    width: 100%;
    margin: auto;
  }
}

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
            <div class="header"><h1>ABSTRACT FORM</h1></div>  
            </div>
</div>

<div class="container">
  <form id="abstract-form" method="POST">
    <p> <b> Complainant's Section: </b></p>
  <div class="labels">
    <label id="name-label" for="police-station">* Police Station</label></div>
    <div class="input-tab">
    <input class="input-field" type="text" id="police-station" name="police-station" placeholder="Enter the police statiion where report will be filed" required autofocus></div>

  <div class="labels">
    <label id="email-label" for="name">* Name of Complainant</label></div>
    <div class="input-tab">
    <input class="input-field" type="text" id="name" name="name" placeholder="Enter your Full Names  as per National ID" required></div>
      
    <div class="labels">
      <label id="name-label" for="idnumber">* ID Number</label></div>
      <div class="input-tab">
      <input class="input-field" type="text" id="citizen-id" name="citizen-id" placeholder="Complainant National Id No/Passport No" required autofocus></div>
    
  <div class="labels">
    <label id="name-label" for="telephonenumber">* Telephone Number</label></div>
    <div class="input-tab">
    <input class="input-field" type="text" id="telephonenumber" name="telephonenumber" placeholder="Enter your Telephone No" required autofocus></div>
    
  <div class="labels">
    <label id="name-label" for="details">* Incident Details</label></div>
    <div class="input-tab">
    <input class="input-field" type="text" id="datails"  name="details" placeholder="Details of the incident" required autofocus></div>
   
  <div class="labels">
    <label id="name-label" for="witness">Witness Account</label></div>
    <div class="input-tab">
    <input class="input-field" type="text" id="witness" name="witness" placeholder="Witness account of incident if present" required autofocus></div>
    
  <div class="labels">
   <label id="name-label" for="costs">* Estimated Amount for loss incurred</label></div>
   <div class="input-tab">
   <input class="input-field" type="text" id="costs" name="costs" placeholder="Estimated value of any losses incurred during incident being reported " required autofocus></div>
     
  <div class="labels">
    <label id="name-label" for="date">* Date</label></div>
    <div class="input-tab">
    <input class="input-field" type="date" id="date" name="date" placeholder="Date which the incident occured" required autofocus></div> <br>
      
</form><br>

 <form id="police-abstract" method="POST">
  <p> <b> To be filled by an Officer: </b></p>

<div class="labels">
  <label id="name-label" for="received-by">* Received By</label></div>
  <div class="input-tab">
  <input class="input-field" type="text" id="received-by" name="received-by" placeholder="Name of Officer who will handle the complaint" required autofocus></div>

<div class="labels">
  <label id="name-label" for="police-id">* Police Id</label></div>
  <div class="input-tab">
  <input class="input-field" type="text" id="police-id" name="police-id" placeholder="Id number of police handling the report" required autofocus></div>
    
<div class="labels">
  <label id="email-label" for="abstact_serial_no">* Abstract Serial Number</label></div>
  <div class="input-tab">
  <input class="input-field" type="text" id="abstact_serial_no" name="abstact_serial_no" placeholder="Enter the Abstract Serial Number" required></div>
    
<div class="labels">
  <label id="name-label" for="police-station-id">* Police Station Id</label></div>
  <div class="input-tab">
  <input class="input-field" type="text" id="police-station-id" name="police-station-id" placeholder=" Enter the police station id where the report was received" required autofocus></div>
  
<div class="labels">
  <label id="name-label" for="presiding-officer">* Officer In Charge</label></div>
  <div class="input-tab">
  <input class="input-field" type="text" id="presiding-officer"  name="presiding-officer" placeholder="Name of Presiding Officer at the Police Station" required autofocus></div>
 
<div class="labels">
  <label id="name-label" for="police-notes">Police Notes</label></div>
  <div class="input-tab">
  <input class="input-field" type="text" id="police-notes" name="police-notes" placeholder="Details of the police investigation concerning thw report" required autofocus></div>

<div class="labels">
  <label for="dropdown">Status</label></div>
  <div class="input-tab">
  <select id="dropdown" name="seasons">
  <option disabled value selected>Status of Investigation</option>
  <option value="<=5">solved</option>
  <option value="<=10">unsolved</option>
  </select>
</div>

 <div class="btn">
  <button id="submit" type="submit">Submit</button> </div>

</form>
 

</div>
</body>
</html>
