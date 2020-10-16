// RECUP DATA SECOND ARRAY
let prisonArray = new Array;
let prisonSplit = new Array;
let table2 = document.getElementById('table2').querySelectorAll('tr')[0];
let data = document.getElementById('table2').getElementsByTagName('td');
let ctx2;
let secondGraph ;


// Recup data & split IN A NEW ARRAY

    function recupData(array){
        
        for(let element of array){
            prisonArray.push(element.textContent);
            
        
        }}
// DECOUP PAR 3 POUR RECUP PAYS ET LES 2 DATAS 
    function split(array){
        for(let i=0;i<= array.length;i++){
            if(i%3 == 0 || i == 0){
                prisonSplit.push(array.slice(i,i+3));
            }
        }
    }
    //CREATION DU CANVAS 
    function newCanvas(){
        let secondCan = document.createElement('canvas');
        secondCan.setAttribute('width', "300px");
        secondCan.setAttribute('height','150px');
        secondCan.setAttribute('display','block');
        secondCan.setAttribute('id', "secondGraph");
        document.getElementsByTagName('h4')[2].appendChild(secondCan);
    }
    // EXEC FUNCTION
    newCanvas();
    // Contect du Canvas JUST CREATED 
    ctx2 = document.getElementById('secondGraph').getContext('2d');
    // FIRST LINE IN THE CHARTS    
    function firstLine(){
        secondGraph = new Chart(ctx2 ,{
            type : 'line',
            data: {
                labels : ['','2007-2009','2010-2012',''],
                
                datasets: [{
                    label: [prisonSplit[0][0]],
                    data: [null ,prisonSplit[0][1],prisonSplit[0][2],null],
                    pointHoverBorderColor: 'yellow',
                    backgoundColor : '',
                    pointBorderWidth : 1 ,
                    borderColor :'yellow',
                    pointBorderColor : 'yellow',
                    pointBackgroundColor : 'yellow',
                    pointHitRadius : 3,
                    fill : false ,
                    }]
            }
            })
            secondGraph.update();   
    }
    // FUNCTION ADD DATA IN SECOND GRAPH
    function dataSecondGraph(color,data){
        secondGraph.data.datasets.push({
            label : data[0],
            pointHoverBorderColor: color,
            pointBorderWidth : 1 ,
            borderColor :color,
            pointBorderColor : color,
            pointBackgroundColor : color,
            fill : false,
            data : [null,parseInt(data[1]),parseInt(data[2]),null],
        }),
        secondGraph.update();
    } 
    //FUNCTION FOR ADD ALL COUNTRY
    // Function fleché car je sort du code review :p :p :p 
    let randomizeColor = ()=>{
        let red = Math.floor(Math.random()*256) 
        let blue = Math.floor(Math.random()*256) 
        let green = Math.floor(Math.random()*256) 
        return "RGB("+red+","+blue+","+green+")"
    }

    let autoImplant = (array)=>{
        for(let i =1; i< array.length;i++){
            dataSecondGraph(randomizeColor(),array[i]);
        }
    }   
// EXEC IN ORDER 
recupData(data);
split(prisonArray);
firstLine();
autoImplant(prisonSplit);







// console.log(prisonSplit)
