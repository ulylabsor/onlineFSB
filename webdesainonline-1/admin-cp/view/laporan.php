<nav class="mt-3">
   <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Laporan Transaksi</a>
      <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Laporan Users</a>
   </div>
</nav>
<div class="tab-content" id="nav-tabContent">
   <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <?php
      include 'transaksi.php';
      ?>
   </div>

   <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <?php
      include 'users.php';
      ?>
   </div>
</div>