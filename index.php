<!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8">
     <title></title>
  <link rel="stylesheet" type="text/css" href="/style_one.css">
   
 </head>

 <body id="target">
    <header>
     
      <div id="grid">
      
      	<div class="line" style="font-size: 2rem";>
     	   <h1 id="name"><a href="http://localhost/index.php">Livecoding</a></h1>
      	</div>
      	
      	
      	<div id="media"><iframe width="100%" height="100%"  src="https://www.youtube.com/embed/iofmWTbvf8c" frameborder="0"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        
      	
      	<div class="blend">
      	     
      	</div>
      	
      </div>
      
    </header>
    
 <div id="three">
 
 	  <div>
		  <a href="http://localhost/index.php"><h2>Real estate</h2></a>
          
         <ul>
<?php
   echo file_get_contents("text/re_list.txt");
?>   
         </ul>
      </div> 
                     
                      
      <div>
		  <a href="http://localhost/index.php"><h2>Making</h2></a>
          
         <ul>
<?php
    echo file_get_contents("text/ma_list.txt");
?>    
         </ul>
      </div>
     
     
      <div>
		  <a href="http://localhost/index.php"><h2>Aside</h2></a> 
           
         <ul>
<?php
   echo file_get_contents("text/A_list.txt");
?>   
         </ul>
      </div>
     
  </div>
   
    
  <div id="control">
     
    <input class="btn" type="button" value="light & shade" onclick="
   
    var target=document.querySelector('body');
    
    if(this.value === 'light & shade'){
      target.style.backgroundColor='#294128';
      target.style.color='black'; 
      this.value = 'black';} 
      else {
      target.style.backgroundColor='#1a120f';
      target.style.color='white';
      this.value = 'light & shade';}
     ">
     
  </div>
  <br/>
  
   <article>
      <p>
      
      </p>
          
   </article>
   
      
 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5861e79d6343131686652048/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
 </script>
 <!--End of Tawk.to Script-->
 
 <div id="disqus_thread"></div>  

<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://web1-u3qlac2kwe.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
 
  
 </body>
 
</html>

 