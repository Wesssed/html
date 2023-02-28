<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>дыа громко((</title>
  <link rel="stylesheet" href="style.css" />
	<style>	
		body{
			
			background-image:url("fon.jpg");
			background-color: #F23869;	
			  background-repeat: no-repeat;
			  background-position: center center;
			  background-attachment: fixed;
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
		}
		.hello{
   			 border: 15px ridge #F23869 ;
    			background-color: #202126 ;
  			  padding-right: 35px;
   			 display: flex;
   			 flex-direction: column;
			}

		.hello img {
   		 width: 100%;
		}

		.hello p {
    		font: small-caps bold 1.2rem sans-serif;
   		 text-align: center;
		 font-color:"#F23869 ";
		}
		.text-block{	
		 border: 15px ridge #F23869 ;
		   font: small-caps bold 1.2rem sans-serif;
		   position: absolute;
  		   /* bottom: 900px; */
   		   /* right: 0px; */
  		   background-color: #202126;
 		   color: white;
 		   /* padding-left: 200px; */
 		   /* padding-right: 250px; */
		  
		}
		.text-block2{
		 border: 15px ridge #F23869 ;
		   font: small-caps bold 1.2rem sans-serif;
  		   bottom: 625px;
   		   right: 0px;
  		   background-color: #202126;
 		   color: white;
 		   /* padding-left: 20px; */
 		   /* padding-right: 20px; */
		}
		.load{
	           border: 15px ridge #F23869 ;
		   font: small-caps bold 1.2rem sans-serif;
	           position: absolute;
  		   bottom: 300px;
   		   right: 0px;
  		   background-color: #202126;
 		   color: white;
 		   /* padding-left: 20px; */
 		   /* padding-right: 20px; */
		}
		.rules{
		 border: 15px ridge #F23869 ;
		   font: small-caps bold 1.2rem sans-serif;
		   position: absolute;
  		  	bottom: 45%;
			left: 1%;
  		   background-color: #202126;
 		   color: white;
 		   /* padding-left: 40px; */
 		   /* padding-right: 40px; */
		}
		.loader {
 			 border: 16px solid #F23869; 
   			 border-top: 16px solid #F23869; 
			 border-right: 16px solid #202126;
			 border-left: 16px solid #202126;
   			 border-radius: 50%;
   			 width: 120px;
   			 height: 120px;
   			 animation: spin 2s linear infinite;
		}
		.Nift{	
		 /*border: 15px ridge #F23869 ;*/
		   border: 5px ridge #784559 ;
    	   background-color: #202126c0 ;
		   font: small-caps bold 1.2rem sans-serif;
		   position: absolute;
			top: 1%;
			left: 35%;
  		   /*background-color: #202126;*/
 		   color: white;
		}
 		 	.Nift2{	
		    border: 5px ridge #784559 ;
    	    background-color: #202126c0 ;
		    font: small-caps bold 1.2rem sans-serif;
		    position: absolute;
			bottom: 1%;
			left: 1px;
  		   /*background-color: #202126;*/
 		   color: white;
		} 
		@keyframes spin {
    		0% { transform: rotate(0deg); }
   		 100% { transform: rotate(360deg); }
		}
		
	</style>

</head>
<body>
	
	<div class="Nift">
		<h2>Добро пожаловать на Nift!</h2>
		<!--<h4>Cандбокс-сервер созданный Wesed</h4>-->
	
	</div>
	
<!--	<audio id="music" src="123.mp3" autoplay="true" preload="auto"></audio> -->

                

	<div class="Nift2"> 
	<p> Фичи сервера</p>
	<ul>
	 <li>WireMod</li>
  	  <li>BuildMod</li>
	  <li>AdvancedDublicator 2</li>
	  <li>Загрузка любого скина</li>
	  <li>Ламповая атмосфера</li>
	</ul>
	</div> 

	
	<!-- <div class="load">
	<p>Загржаемся...</p>
	<div class="loader" aligh="right"></div>
	</div> 

	 <div class="rules">
	<p>Основные правила</p>
	<ul>
	 <li>Запрещено издавать неприятные звуки в микрофон</li>
  	  <li>Запрещено нарушать работу сервера</li>
	  <li>Запрещено убивать/закрывать пропами игроков</li>
	  <li>Запрещено ограничивать возможность покинуть спавн игрокам</li>
	</ul>
	</div>-->
	<script>
  var audio = document.getElementById("music");
  audio.volume = 0.0;
</script>
<?php
$random = rand(1,5);
 if ($random == 1){ 
   echo '<audio id="music" src="1.mp3" autoplay="true" preload="auto"></audio>';
   echo '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3YmZ8V92nqVKx6u1lohFCC?utm_source=generator&amp;theme=0" width="20%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';}
 elseif ($random == 2){ 
   echo '<audio id="music" src="2.mp3" autoplay="true" preload="auto"></audio>';
   echo	'<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0HS6Lmeq0pvAhFoZ9Kazyu?utm_source=generator&amp;theme=0" width="20%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';}
 elseif ($random == 3){ 
   echo '<audio id="music" src="3.mp3" autoplay="true" preload="auto"></audio>';
   echo '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5ASxwnS9Y1EwxBsA9qmOV8?utm_source=generator&amp;theme=0" width="20%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';}
  elseif ($random == 4){ 
   echo '<audio id="music" src="4.mp3" autoplay="true" preload="auto"></audio>';
   echo '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1hGRe4d3LJCg1VszAU8Cy1?utm_source=generator&amp;theme=0" width="20%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';}
   elseif ($random == 5){ 
   echo '<audio id="music" src="5.mp3" autoplay="true" preload="auto"></audio>';
   echo '<iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/16LldYYJefKzxIM6mc7ryR?utm_source=generator&amp;theme=0" width="20%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';}
?>		
</body>