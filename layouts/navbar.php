<!-- Navbar -->
<nav class="navbar">
  <ul>
    <li class="navbar-mailme">
      <a href="mailto:novilfreon@gmail.com">
        <i class="fas fa-envelope"></i>
        <span>Mail me</span>
      </a>
    </li>
    <li class="navbar-menu">
      <ul>
        <?php $nama_file_halaman = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[2]; ?>
        <li class="<?= $nama_file_halaman == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
        <li class="<?= $nama_file_halaman == 'about-me.php' ? 'active' : '' ?>"><a href="about-me.php">About me</a></li>
        <li  class="<?= $nama_file_halaman == 'portfolios.php' ? 'active' : '' ?>"><a href="portfolios.php">Portfolios</a></li>
        <li  class="<?= $nama_file_halaman == 'contact-me.php' ? 'active' : '' ?>"><a href="contact-me.php">Contact me</a></li>
      </ul>
    </li>
  </ul>
</nav>
<!-- End Navbar -->