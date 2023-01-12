



<!--- /////////////////////////////////////////////////  -->

<script>
let numero = 11983779499;

let redirecionar = "";

let tempo = 38000;

function addZero(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

let Hover = document.querySelector('.timeHover');
Hover.addEventListener("mouseover", time);
  
function time() {
  var d = new Date();
  var x = document.getElementsByClassName("time");
  var h = addZero(d.getHours());
  var m = addZero(d.getMinutes());

  var i;
  for (i = 0; i < x.length; i++) {
    x[i].innerHTML = h + ":" + m;
  }
}

Hover.addEventListener("mouseover", abrir); 
 
function abrir(){
 let PopupAbrir = document.querySelector('.whats-container');
  PopupAbrir.classList.add("whats-open");
  PopupAbrir.classList.remove("whats-close");
 
} 
 
Hover.addEventListener("mouseout", fechar); 
 
function fechar(){
 document.getElementById("whats-in").value = "";
 let PopupAbrir = document.querySelector('.whats-container');
  PopupAbrir.classList.add("whats-close");
  PopupAbrir.classList.remove("whats-open");
 
} 
 
let HoverContainer = document.querySelector('.whats-container'); 
 
HoverContainer.addEventListener("mouseover", abrirContainer); 
 
function abrirContainer(){

 let PopupAbrir = document.querySelector('.whats-container');
 PopupAbrir.classList.add("whats-open");
 PopupAbrir.classList.remove("whats-close");
  
 
} 

let sair = document.getElementById("sair"); 
sair.addEventListener("mouseup", fechar);
  
setTimeout(function(){  abrirContainer(); time(); }, tempo);
 
let sendBtn = document.getElementById('send-btn');
 
sendBtn.addEventListener("click", () => {
  let msg = document.getElementById('whats-in').value;
  let relmsg = msg.replace(/ /g,"%20");   


    window.open('https://api.whatsapp.com/send?phone=55'+numero+'&text='+relmsg, '_blank');

   setTimeout(function(){   location.replace(redirecionar) ;  }, 1000);

  
 fechar();
 }); 

</script>