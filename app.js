
var yg=document.querySelectorAll(".slide_img");
var nm=0;
var mn=yg.length;
setInterval(function h(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(nm>yg.length-2){
        nm=0;
    }else{
        nm+=1;
    }
    
    yg[nm].style.opacity=1;
    // yg[nm].style.transition="1s";
},2500);
function h1(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(nm>yg.length-2){
        nm=0;
    }else{
        nm+=1;
    }
    yg[nm].style.opacity=1;
    // yg[nm].style.transition="1s";
}
function h2(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(mn<yg.length){
        mn-=1;
    }else{
        mn=0;
    }
    yg[mn].style.opacity=1;
    // yg[nm].style.transition="1s";
}
 var modal = document.getElementById('id01');
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
 var modal = document.getElementById('id02');

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
       }
  }