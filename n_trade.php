<!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8">
     <title></title>
  <link rel="stylesheet" type="text/css" href="/style_one.css">
  <link rel="stylesheet" type="text/css" href="/style_two.css">
      
 </head>

  <body id="target">
    <header>
     
      <div id="grid">
      
      	<div class="line" style="font-size: 4rem";>
     	   <h3 id="name"><a href="http://127.0.0.1/index.php">Livecoding</a></h3>
      	</div>
      	
      	<div id="media"><iframe width="100%" height="100%"  src="https://www.youtube.com/embed/iofmWTbvf8c" frameborder="0"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
      	</div>
      	
      	<div class="blend">
      	     
      	</div>
      	
      </div>
      
    </header>
      
  <h1>
    REAL ESTATE_RE_TRADE
  </h1> 
  
   <nav>
   
    <b>
      <ul>
<?php
   echo file_get_contents("list.txt");
?>   
	  </ul> 
    </b>
      
  </nav>
  
  <article>
  
<?php
    if( empty($_GET['id']) == false ) {
      echo file_get_contents($_GET['id'].".txt");
    }
?>
  </article>
  
    
  <div id="control">
    <input class="btn" type="button" value="light & shade" onclick="
    var target=document.querySelector('body');
    
    if(this.value === 'light & shade'){
      target.style.backgroundColor='#294128';
      target.style.color='black'; 
      this.value = 'black';
    } else {
      target.style.backgroundColor='#1a120f';
      target.style.color='white';
      this.value = 'light & shade';
    }  
    ">
   </div>
  <br/>
  
  <body>
   
<html>   
   
   
   