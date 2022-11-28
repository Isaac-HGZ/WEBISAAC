let ubicacionPrincipal = window.pageYOffset;
window.onscroll = function () {
     let Desplazamiento_Actual = window.pageYOffset;
     if (ubicacionPrincipal >= Desplazamiento_Actual) {
     	document.getElementById('navar').style.top = '0';

     }
     else{
     	document.getElementById('navar').style.top = '-130px';
     }
     ubicacionPrincipal = Desplazamiento_Actual
}