<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php include 'menu.html';?>
  <h1>Login</h1>
  <form method="post" action="do_login.php">
    Enter Username <input type="text" name="username" /><br />
    Enter Password <input type="password" name="password" /> <br />
    <input type="submit" />
  </form>
</body>