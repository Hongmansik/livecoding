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
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <link rel="stylesheet" type="text/css" href="/style.css">

 <link href="http://localhost/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body id="target">
 <div class="container">

  <header class="jumbotron text-center">
    <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩" class="img-circle" id="logo">
      <h1><a href="/index.php">Javascript</a></h1>
  </header>

  <div class="row">
      <nav class="col-md-3">
        <ol class="nav nav-pills nav-stacked">
        <?php
        while( $row = mysqli_fetch_assoc($result)){
          echo '<li><a href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
        }
        ?>
        </ol>
      </nav>
      <div class="col-md-9">
        <article>
          <form action="process.php" method="post">

            <div class="form-group">
              <label for="form-title">제목</label>
              <input type="text" class="form-control" name="title" id="form-title" placeholder="제목을 적어주세요.">
            </div>

            <div class="form-group">
              <label for="form-author">작성자</label>
              <input type="text" class="form-control" name="author" id="form-author" placeholder="작성자를 적어주세요.">
            </div>

            <div class="form-group">
              <label for="form-description">본문</label>
              <textarea class="form-control" rows="10" name="description" id="form-description" placeholder="본문을 적어주세요."></textarea>
            </div>

            <input type="submit" name="name" class="btn btn-default  btn-lg">
            <input type="hidden" role="uploadcare-uploader" />
          </form>
        </article>

        <hr>
        <div id="control">
          <div class="btn-group" role="group" aria-label="...">
            <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default  btn-lg"/>
            <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
          </div>
          <a href="/write.php" class="btn btn-primary  btn-lg">쓰기</a>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min"></script>

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

  <script>
    UPLOADCARE_PUBLIC_KEY = "7e6faa1675a5fdd53588";
  </script>
  <script charset="utf-8" src="//ucarecdn.com/libs/widget/2.10.3/uploadcare.full.min.js"></script>
  <script>
   var singleWidget = uploadcare.SingleWidget('[role=uploadcare-uploader]');
   singleWidget.onUploadComplete(function(info){
   document.getElementById('form-description').value = document.getElementById('form-description').value + '<img src="'+info.cdnUrl+'">';
  });
  </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>
