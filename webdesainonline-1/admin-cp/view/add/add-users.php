<h3 class="mt-3">Tambah Data Users</h3>
<form action="?page=act-users" method="POST">
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" name="username" max="10">
            <small id="emailHelp" class="form-text text-muted">username Maksimum 10 karakter</small>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="namaDepan">Nama Depan</label>
            <input type="text" class="form-control" id="namaDepan" name="namaDepan">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" id="namaBelakang" name="namaBelakang">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="level">Level</label>
            <select name="level" class="form-control">
               <option value="Admin">Admin</option>
               <option value="Kurir">Kurir</option>
               <option value="Customer">Customer</option>
               <option value="Manager">Manager</option>
            </select>
         </div>
      </div>
      <div class="col">
         <div class="form-group mt-4">
            <input type="checkbox" id="status" name="status" checked> <label for="status">Aktif</label>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label>Jenis Kelamin</label><br>
            <input type="radio" id="pria" name="jk" value="Pria" checked> <label for="pria">Pria</label> &nbsp;&nbsp;
            <input type="radio" id="wanita" name="jk" value="Wanita"> <label for="wanita">Wanita</label>
         </div>
      </div>
   </div>

   <button type="submit" class="btn btn-primary" name="btn-addUsers" style="width: 40%;">Simpan</button>
</form>