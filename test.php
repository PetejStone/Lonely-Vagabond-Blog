<!DOCTYPE html>
<html>
  <head>
    <Title>The Lonely Vagabond</Title>
    <link rel="shortcut icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header>
      <div class="banner">
        <h1 class="banner-text">
            The Lonely<span class="v">V</span>agabond
        </h1>
      </div>

        <nav>
           <ul>
               <li><a href="../index.html">Home</a></li>
              <li><a href="../about.html">About</a></li>
              <li><a href="../blogs.html">Blogs</a></li>
            </ul>

         </nav>
    </header>
    <main>
        <form method="post"  action="email.php" enctype="multipart/form-data" name="CR Form" id="myForm">
            <div class="fields">
                <div class="field half"><input type="text" name="name" placeholder="Name" /></div>
                <div class="field half"><input type="email" name="email" placeholder="Email" /></div>
                <div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
            </div>
            <ul class="actions special">
                <li><input type="submit" value="Send Message" /></li>
            </ul>
        </form>
    </main>

   
    

    <footer>
      <a href="http://www.stonesquareddevelopment.com" target="_blank"><p>&copy;2019 StoneSquared<sup>2</sup> Development</p></a>
    </footer>
  </body>
</html>
