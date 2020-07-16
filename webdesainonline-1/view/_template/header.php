<!-- header -->
<section class="<?= isset($_GET['page']) ? $_GET['page'] == 'home' ? 'header' : 'header-ongkir' : 'header' ?>" id="header">
   <div class="row">
      <div class="col">
         <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="./Assets/logo/logo syn cepat.png" alt=""></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                     <a class="nav-item nav-link active" href="?page=home">Home<span class="sr-only">(current)</span></a>
                     <a class="nav-item nav-link active" href="#">Produk & Layanan</a>
                     <a class="nav-item nav-link active" href="?page=yes">YES</a>
                     <a class="nav-item nav-link active" href="?page=reg">REG</a>
                     <a class="nav-item nav-link active" href="#">Hubungi Kami</a>

                     <?php
                     if (!empty($_SESSION['User'])) : ?>
                        <a class="nav-item nav-link active" href="#"><?= $_SESSION['User'] ?></a>
                        <a class="nav-item nav-link active" href="?page=act-logout">Logout</a>
                     <?php else : ?>
                        <a class="nav-item nav-link active" href="?page=login">Login</a>
                        <a class="nav-item nav-link active" href="?page=register">Register</a>
                     <?php endif ?>

                  </div>
               </div>
            </div>
         </nav>
      </div>
   </div>
</section>
<!-- akhir header -->