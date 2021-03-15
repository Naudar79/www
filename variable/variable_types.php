<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php if (isset($_GET['name'])){ ?>
    	<p>Hi! My name is  <?php echo $_GET['name']; ?>!</p>
   	<?php } ?>
    <?php if (isset($_GET['age'])){ ?>
    	<p>I'm   <?php echo $_GET['age']; ?> years old.</p>
   	<?php } ?>
    <?php if (isset($_GET['color'])){ ?>
    	<p>My eyes colors is  <?php echo $_GET['color']; ?>!</p>
   	<?php } ?>
	   <?php if (isset($_GET['color'])){ ?>
    	<p>The first person in my family is  <?php echo $_GET['family']; ?>!</p>
   	<?php } ?>
    
  </body>
</html>