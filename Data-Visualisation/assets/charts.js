// VAR


let arrayData = new Array;
let yearArray = new Array;
let dataSplit = new Array;
let table1 = document.getElementById('table1').querySelectorAll('td') ;
let year = document.getElementById('table1').getElementsByTagName('tr')[1].querySelectorAll('th');
let table = document.getElementById('table1');
let childH1 = document.getElementsByTagName('H1')[0];
let graph ;



// recup data des TD
table1.forEach(element => {
    arrayData.push(element.textContent);
});
// RECUP DATA DATE
year.forEach(element =>{
    yearArray.push(element.textContent);
})
yearArray.shift();
yearArray.shift();
// function splidata SPLIT DATA IN A NEW ARRAY
function splitData(array){
    for(let i=0; i < array.length;i++){
            
        if(i%12 == 0 ||i == 0){
            dataSplit.push(array.slice(i,i+12));
            }
        }   
    }
    //EXEC FUNCTION
splitData(arrayData);


//CREATE CANVAS 
function CreateCanvas(){
    let can = document.createElement('canvas');
    can.setAttribute('width','300px');
    can.setAttribute('height', '300px');
    can.setAttribute('id','canvasGraph');
    document.getElementsByTagName('h3')[0].appendChild(can);
}

// EXEC FUNCTION
CreateCanvas();

// GET THE CONTEXT

let ctx = document.getElementById('canvasGraph').getContext('2d');
// FIRST LINE OF GRAPH
graph = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [yearArray[0],yearArray[1],yearArray[2],yearArray[3],yearArray[4],yearArray[5],yearArray[6]
        ,yearArray[7],yearArray[8],yearArray[9],yearArray[10]],
        datasets: [{
            label: dataSplit[0].slice(0,1),
            borderColor :"#000080",
            pointHoverBackgroundColor : "#000080",
            pointHoverBorderColor: "#000080",
            pointBorderWidth : 1 ,
            pointBorderColor : '#0000FF',
            pointBackgrondColor : "#000080",
            fill : false ,
            data:  [parseInt(dataSplit[0][1]),parseInt(dataSplit[0][2]),parseInt(dataSplit[0][3]),parseInt(dataSplit[0][4]),
                    parseInt(dataSplit[0][5]),parseInt(dataSplit[0][6]),parseInt(dataSplit[0][7]),parseInt(dataSplit[0][8]),
                    parseInt(dataSplit[0][9]),parseInt(dataSplit[0][10]),parseInt(dataSplit[0][11])],
        }
        ]}
    })

// ADD ADDATA RECUP ABOVE 
function addData(chart, color, data) {
    chart.data.datasets.push({
    label: data[0],
    backgroundColor: color,
    pointHoverBackgroundColor : color,
    pointHoverBorderColor: color,
    pointBorderWidth : 1 ,
    borderColor :color,
    pointBorderColor : color,
    pointBackgrondColor : color,
    fill : false ,
    data: [parseInt(data[1]),parseInt(data[2]),parseInt(data[3]),parseInt(data[4]),parseInt(data[5]),parseInt(data[6]),
           parseInt(data[7]),parseInt(data[8]),parseInt(data[9]),parseInt(data[10]),parseInt(data[11])]
}),
    
    chart.update();
}
// FUNCTION IMPLANT ALL DATA 
let implantAll = (array)=>{
    for(let i=1; i<array.length;i++){
        addData(graph,randomizeColor(),array[i]);
    }
}

// console.log(dataSplit)
// IMPLAT ALL DATA ON GRAPH
implantAll(dataSplit);


