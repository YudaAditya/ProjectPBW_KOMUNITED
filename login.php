<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/4.0/css/Style.css">
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">KOMUNITED</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Calendar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Category</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Profile
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Founder Profile</a>
        <a class="dropdown-item" href="#">Community Profile</a>
      </div>
    </li>

    <!--Links-->
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">     </a>
    </li>

  <form  class="navbar-form">
    <input class="text-center form-control" type="text" name="search" placeholder="">
  </form>

  <li class="nav-item">
    <a class="nav-link" href="#">     </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="right" href="form.php">Sign Up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Login.php">Sign In</a>
  </li>
  </ul>
</nav>



  <p><b><h2 class="text-center"> Login </h2></b></p>
  <b>Username</b><br>
  <input type="text/file" Name="username" size="25" placeholder="username"><br><br>
  <b class="text-center">Password</b><br>
  <input type="password" Name="sandi" size="25" placeholder="password"><br><br>
  <button type="submit">Login</button><br><br>
  <a href="">Daftar Akun</a>

</body>
</html>
