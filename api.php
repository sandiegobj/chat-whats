<?php
include 'script.php';
?>
<style type="text/css">
 
/* whatsapp*/

.whats {
    float: left;
    position: fixed!important;
  bottom: 25px;
    z-index: 99999;
    left: 30px;
 
}

/*ajuste da altura do container de chat*/
.whats-container{
  position: absolute;
  top: -340px;
 width: 330px;
 
}


.conversation {
  box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.15);
  background: #efe7dd url("https://agencianovaacao.com.br/wp-content/uploads/2020/03/bg-whats.jpg") repeat;
  z-index: 0;
  border-radius: 0px 0px 10px 10px;
}

.conversation .conversation-container {
  height: calc(100% - 68px);
  box-shadow: inset 0 10px 10px -10px #000000;
  overflow-x: hidden;
  padding: 0 16px;
  margin-bottom: 5px;
  padding: 10px 20px 5px 20px;
}



 .whats{
   animation: whats 2.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both; 
 } 
 
 @keyframes whats{
  0% {
    transform: translateZ(0) translateY(0px) translateX(-600px);
  }
  100% {
    transform: translateZ(0) translateY(0px) translateX(-0px);
  }
}
 

.timeHover {
         animation: heartbeat 2.0s ease-in-out 3s infinite both;
}


@keyframes heartbeat {
  from {
    -webkit-transform: scale(1);
            transform: scale(1);
    -webkit-transform-origin: center center;
            transform-origin: center center;
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
  }
  10% {
    -webkit-transform: scale(0.91);
            transform: scale(0.91);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }
  17% {
    -webkit-transform: scale(0.98);
            transform: scale(0.98);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
  }
  33% {
    -webkit-transform: scale(0.87);
            transform: scale(0.87);
    -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
  }
  45% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
  }
}

 
.whats-close{
 animation: scale-out-center 0.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both; 
} 
 
.whats-open{
 animation: scale-in-center 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
} 
 

@keyframes scale-in-center {
  0% {
    transform: translateZ(0) translateY(0px) translateX(-350px);
    opacity: 0;
  }
  100% {
     transform: translateZ(0) translateY(0px) translateX(-10px);
   display: block;
    opacity: 1;
  }
}


@keyframes scale-out-center {
  0% {
     opacity: 0.3; 
  }
  100% {
   opacity: 0; 
    transform: translateZ(0) translateY(0px) translateX(-350px); 
  
/*      display: none;  */
     
  }
}

@keyframes message {
  0% {
            transform: scale(0);
    opacity: 1;
  }
  100% {
            transform: scale(1);
    opacity: 1;
  }
}


.whats-container {
  border-radius: 20px;

}


/* Status Bar */

.status-bar {
  box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.22);
  height: 32px;
  background: #004e45;
  color: #fff;
  font-size: 14px;
  padding: 0 8px;
  border-radius: 10px 10px 0px 0px;
 display: flex;
    justify-content: flex-end;
}

 #sair{
  background: #008a7c;
  margin: 4px;
  border: none;
  font-size: 20px;
  border-radius: 100%;
  color: #fff;
  position: relative;
     top: -10px;
     left: 19px;
       min-width: 30px;
    min-height: 30px;
     outline-style: none;
padding: 0;
 }


/* User Bar */

.user-bar {
  box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.22);
  height: 55px;
  background: #005e54;
  color: #fff;
  padding: 0 8px;
  font-size: 24px;
  position: relative;
  z-index: 1;
}

.user-bar:after {
  content: "";
  display: table;
  clear: both;
}

.user-bar div {
  float: left;
  transform: translateY(-50%);
  position: relative;
  top: 50%;
}


.user-bar .avatar {
  margin: 0 0 0 5px;
  width: 36px;
  height: 36px;
}

.user-bar .avatar img {
  border-radius: 50%;
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
  display: block;
  width: 100%;
}

.user-bar .name {
  font-size: 17px;
  font-weight: 600;
  text-overflow: ellipsis;
  letter-spacing: 0.3px;
  margin: 0 0 0 8px;
  overflow: hidden;
  white-space: nowrap;
  width: 210px;
}

.user-bar .status {
  display: block;
  font-size: 13px;
  font-weight: 400;
  letter-spacing: 0;
}


/* Mensagem*/

.message {
  color: #000;
  clear: both;
  line-height: 18px;
  font-size: 15px;
  padding: 8px;
  position: relative;
  margin: 8px 0;
  max-width: 85%;
  word-wrap: break-word;
  z-index: -1;
}


.message p {
 margin: 0;
}

.message:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
}

.metadata {
  display: inline-block;
  float: right;
  padding: 0 0 0 7px;
  position: relative;
  bottom: -4px;
}

.metadata .time {
  color: rgba(0, 0, 0, .45);
  font-size: 11px;
  display: inline-block;
}


.message.received {
  background: #fff;
  border-radius: 0px 5px 5px 5px;
  float: left;
  z-index: 2;
}

.message.received .metadata {
  padding: 0 0 0 16px;
}

.message.received:after {
  border-width: 0px 10px 10px 0;
  border-color: transparent #fff transparent transparent;
  top: 0;
  left: -10px;
}

 
 .input-msg {
  border: 0;
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
  outline: none;
 width: 73%;
    margin: 0px 10px 10px 10px;
    position: relative;
    top: -13px;

}
 
 .send-msPopup{
  width: 43px;
  cursor: pointer;
 }
 
 
</style>
<div class="whats" >
  
      <div class="whats-container whats-close">

        <div class="status-bar">
   <button id="sair">X</button>
        </div>

        
            <div class="user-bar">
              
              <div class="avatar">
               <!-- coloque aqui a rota da sua imagem -->
                <img src="https://.com.br/wp-content/uploads/2020/03/atendimento-nova-acao.jpg" alt="Nova Ação atendimento">
              </div>
              <div class="name">
               <!-- titulo ou nome do atendente -->
                <span>NOVA AÇÃO</span>
              </div>
              
            </div>
            <div class="conversation">
              <div class="conversation-container">
                
                <div class="message received">
                  Olá!
               <span class="metadata"><span class="time" id="demo"></span></span>
                </div>
      
    <div class="message received">
                  Está procurando por Criação de Sites ou Gestão de Redes Sociais?
               <span class="metadata"><span class="time" id="demo"></span></span>
                </div>
      
    <div class="message received">
                  Escreva abaixo.
               <span class="metadata"><span class="time" id="demo"></span></span>
                </div>
       
      
              </div>
    
   
     <input class="input-msg" id="whats-in" placeholder="Digite uma mensagem" autocomplete="off"> </input>

    <!-- coloque aqui a rota da sua imagem -->
    <img class="send-msPopup" id="send-btn" src="https://agencianovaacao.com.br/wp-content/uploads/2020/03/bt-enviar.png">
 
          
            </div>   

      </div>

       <!-- coloque aqui a rota da sua imagem -->
  <img class="timeHover" src="https://agencianovaacao.com.br/wp-content/uploads/2020/03/WhatsApp-icon.png" width="60px">
 
</div>