        var heure = document.getElementById('horloge');      
        var tempsreel = setInterval(horloge , 1000);    
                                                        

        function horloge(){                             
            var d = new Date();                         
            heure.innerHTML = d.toLocaleTimeString();  
        }