    <!-- layanan yes -->
    <section class="layanan-yes">
       <div class="container">
          <div class="cek-biaya-yes mt-5">
             <div class="row">
                <div class="col-lg-3">
                   <img src="./Assets/img/kurir2.jpg" style="width: 100%; border-radius: 20px 0px 0px 20px;">
                </div>
                <div class="col">
                   <div class="form-ongkir-yes">
                      <form action="?page=act-login" method="POST">
                         <?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';
                           unset($_SESSION['notif']);
                           ?>
                         <h5>Login<b> (Your Account)</b> </h5>
                         <p>
                            <h6>Does'nt have acoount ? <a href="?page=register">Register</a></h6>
                         </p>
                         <p>
                            <input class="form-control" type="text" name="username" placeholder="Enter Username">
                         </p>
                         <p>
                            <input class="form-control" type="password" name="password" placeholder="Enter Password">
                         </p>
                         <p>
                            <div class="row">
                               <button type="submit" name="btn-login" class="btn btn-success">Login</button>
                            </div>
                         </p>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- akhir layanan yes -->