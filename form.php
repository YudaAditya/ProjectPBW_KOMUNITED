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
<h3 align="center">Daftar Akun</h3><br>
<form action="/action_page.php">
  <tr>
  <td>
  <input type="text" Name="nama" size="42" placeholder="Nama Lengkap"><br><br>
  <input type="text" Name="username" size="42" placeholder="username"><br><br>
  <input type="text" Name="email" size="42" placeholder="Email Anda"><br><br>
  <input type="text" Name="no.hp" size="42" placeholder="Nomor Handphone"><br><br>

  <select name="-Provinsi-">
  <option>-Provinsi-</option>
  <option value="Aceh">Aceh</option>
  <option value="Sumatera Utara">Sumatera Utara</option>
  <option value="Sumatera Barat">Sumatera Barat</option>
  <option value="Riau">Riau</option>
  <option value="Kepulauan Riau">Kepulauan Riau</option>
  <option value="Jambi">Jambi</option>
  <option value="Sumatera Selatan">Sumatera Selatan</option>
  <option value="Bangka Belitung">Bangka Belitung</option>
  <option value="Bengkulu">Bengkulu</option>
  <option value="Lampung">Lampung</option>
  <option value="DKI Jakarta">DKI Jakarta</option>
  <option value="Jawa Barat">Jawa Barat</option>
  <option value="Banten">Banten</option>
  <option value="Jawa Tengah">Jawa Tengah</option>
  <option value="Yogyakarta">Yogyakarta</option>
  <option value="Jawa Timur">Jawa Timur</option>
  <option value="Bali">Bali</option>
  <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
  <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
  <option value="Kalimantan Barat">Kalimantan Barat</option>
  <option value="Kalimantan Tengah">Kalimantan Tengah</option>
  <option value="Kalimantan Selatan">Kalimantan Selatan</option>
  <option value="Kalimantan Timur">Kalimantan Timur</option>
  <option value="Kalimantan Utara">Kalimantan Utara</option>
  <option value="Sulawesi Utara">Sulawesi Utara</option>
  <option value="Sulawesi Barat">Sulawesi Barat</option>
  <option value="Sulawesi Tengah">Sulawesi Tengah</option>
  <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
  <option value="Sulawesi Selatan">Sulawesi Selatan</option>
  <option value="Gorontalo">Gorontalo</option>
  <option value="Maluku">Maluku</option>
  <option value="Maluku Utara">Maluku Utara</option>
  <option value="Papua Barat">Papua Barat</option>
  <option value="Papua">Papua</option>
  </select>

  <input type="text" Name="kota" size="20" placeholder="Kota"><br><br>
  <input type="text" Name="alamat" size="42" placeholder="Alamat"><br><br>
  <input type="password" Name="sandi" size="42" placeholder="Masukkan Kata Sandi"><br><br>
  <input type="password" Name="sandi" size="42" placeholder="Masukkan ulang Kata Sandi"><br>
  <p><b> Tanggal Lahir </b></p>
  <select name="Tanggal">
  <option>-Tanggal-</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  </select>
  <select name="Bulan">
  <option>-Bulan-</option>
  <option value="1">Januari</option>
  <option value="2">Februari</option>
  <option value="3">Maret</option>
  <option value="4">April</option>
  <option value="5">Mei</option>
  <option value="6">Juni</option>
  <option value="7">Juli</option>
  <option value="8">Agustus</option>
  <option value="9">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">Desember</option>
  </select>
  <select name="Tahun">
  <option>-Tahun-</option>
  <option value="1980">1950</option>
  <option value="1981">1951</option>
  <option value="1982">1952</option>
  <option value="1983">1953</option>
  <option value="1984">1954</option>
  <option value="1985">1955</option>
  <option value="1986">1956</option>
  <option value="1987">1957</option>
  <option value="1988">1958</option>
  <option value="1989">1959</option>
  <option value="1990">1960</option>
  <option value="1991">1961</option>
  <option value="1992">1962</option>
  <option value="1993">1963</option>
  <option value="1994">1964</option>
  <option value="1995">1965</option>
  <option value="1996">1966</option>
  <option value="1997">1967</option>
  <option value="1998">1968</option>
  <option value="1999">1969</option>
  <option value="1980">1970</option>
  <option value="1981">1971</option>
  <option value="1982">1972</option>
  <option value="1983">1973</option>
  <option value="1984">1974</option>
  <option value="1985">1975</option>
  <option value="1986">1976</option>
  <option value="1987">1977</option>
  <option value="1988">1978</option>
  <option value="1989">1979</option>
  <option value="1980">1980</option>
  <option value="1981">1981</option>
  <option value="1982">1982</option>
  <option value="1983">1983</option>
  <option value="1984">1984</option>
  <option value="1985">1985</option>
  <option value="1986">1986</option>
  <option value="1987">1987</option>
  <option value="1988">1988</option>
  <option value="1989">1989</option>
  <option value="1990">1990</option>
  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2013">2016</option>
  <option value="2014">2017</option>
  <option value="2015">2018</option>
  </select><br><br>
  <input type="radio" name="Kelamin" value="L">Laki Laki
  <input type="radio" name="Kelamin" value="P">Perempuan
  <br><br>
  <input value="Daftar" style="background-color: 4985D0; height: 50; width: 150;"type="submit">
  </td>
  </tr>
</form>

</body>
</html>
