<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <link rel="stylesheet" type="text/css" href="http://localhost/style.css">

 <link href="http://localhost/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="target">
 <div class="container">

   <header class="jumbotron text-center">
     <img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩" class="img-circle" id="logo">
       <h1><a href="http://localhost/index.php">JavaScript</a></h1>
   </header>
   <div class="row">

       <nav class="col-md-3">
         <ol class="nav nav-pills nav-stacked">
         <?php
         while( $row = mysqli_fetch_assoc($result)){
           echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
         }
         ?>
         </ ol>
       </nav>
       <div class="col-md-9">

         <article>
         <?php
         if(empty($_GET['id']) === false ) {
             $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
             $result = mysqli_query($conn, $sql);
             $row = mysqli_fetch_assoc($result);
             echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
             echo '<p>'.htmlspecialchars($row['name']).'</p>';
             echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
         }
         ?>
         </article>
         <hr>
         <div id="control">
           <div class="btn-group" role="group" aria-label="...">
             <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default  btn-lg"/>
             <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
           </div>
           <a href="http://localhost/write.php" class="btn btn-primary  btn-lg">쓰기</a>
         </div>
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
s.src = 'https://livecoding-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

       </div>
   </div>

 </div>

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


   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://localhost/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>
