
<!DOCTYPE html>
<html>
<head>
<?php $s_title = 'Broomsticks!' ?>
<title>Practicing on Github</title>
  <style type='text/css'>
   #header {
    }
   #header ul {
     list-style-type: none;
     margin:0;
     padding:0;
    }
   #header ul li {
     display:inline;
    }
   #header ul li a {
     font-size:18px;
     font-style:italic;
     font-weight:bold;
     color:palevioletred;
     text-decoration:none;
    }
  </style>
</head>

<body>
  <div id='header'>
    <ul>
      <li><a href='#'>about</a> / </li>
      <li><a href='#'>projects</a> / </li>
      <li><a href='#'>contact</a></li>
    </ul>
  </div>
<p>Hello world! I would like to introduce a story today: <br />
<?php echo $s_title ?>
</p>
</body>
</html>