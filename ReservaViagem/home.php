<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>home</title>
</head>

<body>
    
    <div id="cnt">
        <h1 class="cnt2">Viva uma experiência incrível!</h1>
        <h5>Reserve sua viagem! Venha viver momentos únicos com a gente!</h5>
        <a href="#btnSalvar" class="btn btn-dark">CADASTRO</a>
        <div id="wave"></div>
    </div>
 
    <br>
    <br>
    <section class="bcgb">
    <p>'   </p>

            <h1 class="cnt">Você pode ir para onde quiser!</h1>
       
            
                
            <div class="quadrado">
                     <div class="img-container">
                     <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963?ixlib=rb-1.2.1&raw_url=true&q=80&fm=jpg&crop=entropy&cs=tinysrgb&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386" />
                        <span>Manarola, Itália </span>     
                        <br>
                     </div>
                    </div>
               


               
                    <div class="quadrado">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=383&q=80" />  
                        <span> Veneza, Itália </span>                  
                    </div>
                    </div>
                


              
                    <div class="quadrado">
                    <div class="img-container">
                        <img src="https://images.unsplash.com/photo-1518684079-3c830dcef090?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387" />
                        <span>Manarola, Itália </span>
                    </div>
                    </div>
                <br>
                <br>
                    <div class="cnt">
                    <a href="form.php" class="btn btn-dark btn-lg" id="btnSalvar"> <i class="bi bi-calendar4-week"></i>  Reservar Agora!</a>
                    </div>
                    <br>
                    <br>
    </section>
    <section class="blue">
        <br><br>
           <h1 class="cnt3">Nossos Serviços</h1>
           <div class="box">
               <img src="img/predio.png">
           </div>
    </section>
  

<button onclick="backToTop()" id="btnTop"><img src="img/capslock.svg" alt="TOPO"></button>


<script type="text/javascript" src="jquery.js"></script>

<script>
jQuery(document).ready(function($){
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html, body').animate({scrollTop:$(this.hash).offset().top}, 600);
    });
});
</script> 

<script>
    window.onscroll = function(){
        scroll();
    }
    function scroll(){
        var btn= document.getElementById("btnTop");
        if(document.documentElement.scrollTop > 200){
          btn.style.display="block";
        }
        else{
            btn.style.display="none";
        }
    }
    function backToTop(){
        document.documentElement.scrollTop=0;
    }
</script>


</body>

</html>