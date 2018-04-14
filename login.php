<!DOCTYPE html>
<html>

<link rel="stylesheet" href="bootstrap/4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap/4.0/css/Style.css">
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">KOMUNITED</a>

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

    <form>
      <input class="text-center" id="right" type="text" name="search" placeholder="">
    </form>
    <li class="nav-item">
      <a class="nav-link" href="#">     </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="right" href="form.php">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="right" href="Login.php">Sign In</a>
    </li>
    </ul>

  </nav>

  <fieldset style="width: 35%; margin: auto;">

  <h3 align="center">Login</h3><br>
  <b>Username</b><br>
  <input type="text" Name="username" size="25" placeholder="username"><br><br>
  <b>Password</b><br>
  <input type="password" Name="sandi" size="25" placeholder="password"><br><br>
  <button type="submit">Login</button><br><br>
  <a href="">Daftar Akun</a>

</body>
</html>
