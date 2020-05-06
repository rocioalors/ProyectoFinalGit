
window.addEventListener('load', inicio, false);
function inicio() {
      document.getElementById('ampliar').addEventListener('click', mostrar, false);
      document.getElementById('menos').addEventListener('click', ocultar, false);
      var elementos = document.getElementsByClassName("titulos");
      	for(var i = 0; i < elementos.length; i++){
    		elementos[i].addEventListener("mouseover", cambiarColor);
    		elementos[i].addEventListener("mouseout", cambiarAzul);
		}

  }

function mostrar(){
	var x = document.getElementById("myDIV");
	var boton=document.getElementById('ampliar');
    if (x.style.display === "none") {
        x.style.display = "block";
        boton.style.display="none";
        //boton.innerText="Mostar menos";
        
    } 

 }

 function ocultar(){
 	var x = document.getElementById("myDIV");
 	var boton=document.getElementById('ampliar');

        x.style.display = "none";
        boton.style.display='inline';
        
}
   

function cambiarColor(){
	 this.style.color = "#aba104";
	
}

function cambiarAzul(){
	 this.style.color = "#01233f";
	
}
