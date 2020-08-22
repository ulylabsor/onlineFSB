<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <a class="navbar-brand" href="#">Navbar</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
         <?php
         if ($_SESSION['Level'] == 'Admin') : ?>
            <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'home' ? 'active' : '' : 'active' ?>" href="?page=home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'users' ? 'active' : '' : '' ?>" href="?page=users">Management Users</a>
            <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'layanan' ? 'active' : '' : '' ?>" href="?page=layanan">Layanan</a>
            <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'transaksi' ? 'active' : '' : '' ?>" href="?page=transaksi">Transaksi</a>
            <a class="nav-item nav-link" href="?page=act-logout">Logout</a>
         <?php elseif ($_SESSION['Level'] == 'Kurir') : ?>
            <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'home' ? 'active' : '' : 'active' ?>" href="?page=home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'status' ? 'active' : '' : '' ?>" href="?page=status">Update Status</a>
            <a class="nav-item nav-link" href="?page=act-logout">Logout</a>
         <?php elseif ($_SESSION['Level'] == 'Manager') : ?>
            <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'home' ? 'active' : '' : 'active' ?>" href="?page=home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="?page=act-logout">Logout</a>
         <?php endif ?>
      </div>
   </div>
</nav>