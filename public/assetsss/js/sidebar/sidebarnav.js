
    function myDrop(){
        document.getElementById("collapses").classList.toggle("show");
    }

    window.onclick = function(event){
        if(!event.target.matches('.drop')){
            var dropsdowns = document.getElementsByClassName("collapse");
            var i;
            for(i=0 ;i < dropsdowns.length ; i++){
                var opendrop = dropsdowns[i];
                if(opendrop.classList.contains('show')){
                    opendrop.classList.remove('show');
                }
            }
        }
    }

