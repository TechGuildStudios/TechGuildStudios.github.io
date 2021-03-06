<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Guild Studios</title>
  <link rel="icon" type="icon/svg" href="img/favicon.svg">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <?php function slogan($f="slogans.txt"){$l=file($f);return $l[rand(0,sizeof($l)-1)];}?>
</head>
  <body>
    <header>
        <div class="background blur"></div>
        <div class="content header">
        <a href="#"><img id="logo" src="img/favicon.svg" alt="">
        <h1>Tech Guild Studios</h1></a>
        <p class="slogan"><?php echo slogan(); ?></p>
        <a href="#learnmore"><div class="btnlm"><h4>Learn more</h4></div></a>
      </div>
    </header>
    <br><br>
      <div class="content" id="learnmore">
        <div class="wrapper center description boxshadow">
          <h2>Lorem Ipsum..</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div><!--close info-->
      </div>
      <br><br>
        <div class="content center">
          <div class="media">
              <div class="mediabox twitter">
                  <div class="banner center twitter">
                    <a href="https://www.twitter.com/whynotTGS" target="_blank">
                      <img src="img/twitter.svg" class="brand">
                    </a>
                  </div>
                  <div class="content social">
                    <a class="twitter-timeline" data-height="371" data-width="100%" data-link-color="#28a5ff" href="https://twitter.com/whynotTGS">Tweets by Tech Guild Studios</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </div>
              </div>
                <div class="mediabox youtube">
                  <div class="banner center youtube">
                    <img src="img/youtube.png" class="brand">
                  </div>
                  <div class="content social">
                  </div>
                </div>
            </div><!--wrapper media-->
          </div><!--close content-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
      <p>&#169; 2017 Tech Guild Studios.</p>
    </footer>
    <script>
    </script>
  </body>
</html>
