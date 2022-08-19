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

        .cards-header {
            padding: 20px;
        }


        .recent-abstracts {
            padding: 20px;
            background: white;
            margin: 20px;
            border-radius: 10px;
        }


    </style>

    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    
<div class="wrapper">
    @include('includes/sidebar')
    
    <div class="main_content">
        <div class="header"> <h1>PORTFOLIO REPORT</h1></div> 

        <div class="cards-header text-center">
            <div class="row">
              <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$statistics['abstracts']}}</h5>
                      <p class="card-text">Total Abstracts</p>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$statistics['arrests']}}</h5>
                      <p class="card-text">Total Arrests</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Ksh {{$statistics['payments']}}</h5>
                      <p class="card-text">Total Payment</p>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$statistics['arrests_today']}}</h5>
                      <p class="card-text">Arrests Today</p>
                    </div>
                  </div>
            </div>
            </div>
          </div> 


        <div class="container text-center">
            <div class="row">
              <div class="col">
                <div id="container" style="width:100%; height:400px;"></div>
              </div>
              <div class="col">
                <div id="container2" style="width:100%; height:400px;"></div>
            </div>
            </div>
          </div> 

          <div class="recent-abstracts text-center">
            <h2>Most Recent Abstracts</h2>
            <div class="row">
              <div class="col">
                <table  class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">police station</th>
                        <th scope="col">Name of Complainant</th>    
                        <th scope="col">Details</th>
                        <th scope="col">Telephone Number</th>
                        <th scope="col">Received By</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date of incident</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($abstracts as $abstract)
                        <tr>
                            <td>{{$abstract->police_station->police_station_name}}</td>
                            <td>{{$abstract->name_of_complainant}}</td>
                            <td>
                                <span class="d-inline-block text-truncate" style="max-width: 250px;">
                                    {{$abstract->details}}
                                </span> 
                            </td>
                            <td>{{$abstract->telephone_number}}</td>
                            <td>{{$abstract->received_by}}</td>
                            <td>{{$abstract->status}}</td>
                            <td>{{$abstract->date_of_incident}}</td> 
                        </tr>
                    @endforeach
                       
                      
                    </tbody>
                  </table>
                  
              </div>
            </div>
          </div> 
        
        
    </div>





</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
            let locationAbstracts = {!! json_encode($locationAbstracts) !!};
            let locations = [];
            let abstracts = [];

            locationAbstracts.forEach(record => {
            
            locations.push(record.location);
            abstracts.push(record.abstracts) 
            });

        const chart = Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'ABSTRACT REPORTS BY COUNTY'
            },
            xAxis: {
                categories: locations
            },
            yAxis: {
                title: {
                    text: 'Arrests Made'
                }
            },
            series: [{
                name: 'Arrests',
                data: abstracts
            }
            // , {
            //     name: 'Abstracts',
            //     data: [15, 23, 13, 10]
            // }
        ]
        });



        let monthlyArrests = {!! json_encode($monthlyArrests) !!};

       
        let months = [];
        let arrests = [];

        monthlyArrests.forEach(record => {
        
           months.push(record.month);
           arrests.push(record.arrests) 
        });

         console.log(monthlyArrests)

const chart2 = Highcharts.chart('container2', {
           
    title: {
        text: 'TOTAL MONTHLY ARRESTS'
    },

    

    yAxis: {
        title: {
            text: 'Number of Abstracts'
        }
    },

    xAxis: {
        categories: months

        // accessibility: {
        //     rangeDescription: 'Range: january to august'
        // }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    // plotOptions: {
    //     series: {
    //         label: {
    //             connectorAllowed: false
    //         },
    //         pointStart: 2010
    //     }
    // },

    series: [{
        name: 'Arrests',
        data: arrests
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

        });
    });
</script>
</body>
</html>
