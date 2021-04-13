<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Accessibility Rating System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>
<div class="header">
        <header>
            <div id="logo">
                <img id="atosLogo" src="css/AtosImage.png" alt="Atos Logo" />
            </div>
            <div id="header-right">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#patternlibrary">Pattern Library</a></li>
                    <li><a href="#rating">Rating</a></li>
                    <li><a href="#VPAT">VPAT</a></li>
                    <li><a href="#WCAG">WCAG</a></li>
                    <li><a href="#Log Out" id="logout" >Log Out</a></li>
                </ul>
            </div>
        </header>
    </div>
  <div class="posts-wrapper">
   <?php foreach ($posts as $post): ?>
   	<div class="post">
      <?php echo $post['text']; ?>
      <div class="post-info">
	    <!-- if user likes post, style button differently -->
      	<i <?php if (userLiked($post['id'])): ?>
      		  class="fa fa-thumbs-up like-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-up like-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $post['id'] ?>"></i>
      	<span class="likes"><?php echo getLikes($post['id']); ?></span>
      	
      	&nbsp;&nbsp;&nbsp;&nbsp;

	    <!-- if user dislikes post, style button differently -->
      	<i 
      	  <?php if (userDisliked($post['id'])): ?>
      		  class="fa fa-thumbs-down dislike-btn"
      	  <?php else: ?>
      		  class="fa fa-thumbs-o-down dislike-btn"
      	  <?php endif ?>
      	  data-id="<?php echo $post['id'] ?>"></i>
      	<span class="dislikes"><?php echo getDislikes($post['id']); ?></span>
      </div>
   	</div>
   <?php endforeach ?>
  </div>
  <div class="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="Quick Links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Home Page</a></li>
                            <li><a href="#">Pattern Library</a></li>
                            <li><a href="#">Rating System</a></li>
                            <li><a href="#">VPAT</a></li>
                            <li><a href="#">WCAG</a></li>
                        </ul>
                    </div>
                    <div class="About">
                        <h3>About</h3>
                        <ul>
                            <li><a href="https://atos.net/en/">Atos</a></li>
                            <li><a href="https://atos.net/en/accessibility">Accessibility</a></li>
                        </ul>
                    </div>
                    <div class="socialMedia">
                        <a href="#" aria-label="Facebook link" class="fa fa-facebook"></a>
                        <a href="#" aria-label="Twitter link" class="fa fa-twitter"></a>
                        <a href="#" aria-label="Linked In link" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
  <script src="scripts.js"></script>
</body>
</html>
