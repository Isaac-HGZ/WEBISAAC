var clic = 1;
function divLogin(){ 
   if(clic==1){
   document.getElementById("caja").style.height = "150px";
   document.getElementById("caja").style.display = "flex";
   clic = clic + 1;
   } else{
       document.getElementById("caja").style.height = "0px"; 
       document.getElementById("caja").style.display = "none";     
    clic = 1;
   }   
}
