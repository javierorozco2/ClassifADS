
// variable con los meses
var meses = ["Septiembre","Octubre","Noviembre"]
// variable con datos de publicaciones realizadas
var pubreal = [0,1,2,0,0]
// variable con datos de usuarios que han accedido
var userAc = [0,1,2,0,1]
// variable con datos de registros realizados
var regreal = [0,3,2,5,3]

var pub = document.getElementById("pub-real").getContext('2d');
var mychart = new Chart(pub,{
    type:"line",
    data:{
        //Datos X de la tabla
        labels: meses,
        datasets:[{
            label:"Usuarios",
            fill:false,
            lineTension:0,
            borderColor:"rgb(66,134,244)",
            pointHoverRadius:20,
            pointBorderWidth:5,
            borderJoinStyle: "miter",
            //Datos Y de la tabla
            data: pubreal,
            backgroundColor:[
                "rgb(66,134,244)"
            ]
        }]
    },
    options:{
        responsive:false,
        scales:{
            yAxes:[{
                ticks:{
                    beginAtZero:true
                }
            }]
        }
    }
});

var pub2 = document.getElementById("pub-user").getContext('2d');
var mychart2 = new Chart(pub2,{
    type:"line",
    data:{
        //Datos X de la tabla
        labels:meses,
        datasets:[{
            label:"Usuarios",
            fill:false,
            lineTension:0,
            borderColor:"rgb(66,134,244)",
            pointHoverRadius:20,
            pointBorderWidth:5,
            borderJoinStyle: "miter",
            //Datos Y de la tabla
            data:userAc,
            backgroundColor:[
                "rgb(66,134,244)"
            ]
        }]
    },
    options:{
        responsive:false,
        scales:{
            yAxes:[{
                ticks:{
                    beginAtZero:true
                }
            }]
        }
    }
});

var pub3 = document.getElementById("pub-reg").getContext('2d');
var mychart3 = new Chart(pub3,{
    type:"line",
    data:{
        //Datos X de la tabla
        labels:meses,
        datasets:[{
            label:"Usuarios",
            fill:false,
            lineTension:0,
            borderColor:"rgb(66,134,244)",
            pointHoverRadius:20,
            pointBorderWidth:5,
            borderJoinStyle: "miter",
            //Datos Y de la tabla
            data:regreal,
            backgroundColor:[
                "rgb(66,134,244)"
            ]
        }]
    },
    options:{
        responsive:false,
        scales:{
            yAxes:[{
                ticks:{
                    beginAtZero:true
                }
            }]
        }
    }
});