 window.onload = function() {
    var dataPoints = new Array;
    var chart;
    let label = new Array;
   
    let canvas = document.createElement('canvas');
    canvas.setAttribute('width','300px');
    canvas.setAttribute('height', '300px');
    canvas.setAttribute('id','canvasAnimate');
    document.getElementById('firstHeading').appendChild(canvas);
    canvas.getContext('2d');
    let chartContainer = document.getElementById('canvasAnimate').getContext('2d');
    // RECUP DATA & SPLIT IN TWO ARRAY 
    $.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart=1&ystart=10&length=10&type=json", function(data) {  
        $.each(data, function(key, value){
            dataPoints.push(parseInt(value[1]));
            label.push(parseInt(value[0]));
        });
        chart = new Chart(chartContainer,{
            type: "line",
            
            data: {
                labels : label,
                datasets : [{
                    label :'Data Dynamic ',
                    data : dataPoints,
                }]
            },
        });
        chart.update();
        chart.render();
        updateChart();
    });
    
    let updateChart = () => {
    $.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart=" + (dataPoints.length + 1) + "&ystart=" + (dataPoints[dataPoints.length - 1].y) + "&length=1&type=json", function(data) {
        $.each(data, function(key, value) {
            console.log(  )
            label.push(parseInt(value[0]))
            dataPoints.push({
            y: parseInt(value[1]),
            });
        });
        chart.update();
        chart.render();
        setTimeout(function(){updateChart()}, 1000);
    });
    }
}
// console.log(dataPoints.x)





