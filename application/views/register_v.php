 <div class="container">

   <div class="card o-hidden border-0 shadow-lg my-5">
     <div class="card-body p-0">
       <!-- Nested Row within Card Body -->
       <div class="row">
         <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
         <div class="col-lg-7">
           <div class="p-5">
             <div class="text-center">
               <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
             </div>
             <form enctype="multipart/form-data" method="POST" action="<?= base_url('user/tambah') ?>" autocomplete="off">
               <div class="modal-body">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <input type="hidden" name="_method" value="POST">
                 <div class="">
                   <div class="row">
                     <div class="col-lg-12">
                       <div class="form-group focused">
                         <label class="form-control-label" for="nama_lengkap">Nama Lengkap<span class="small text-danger">*</span></label>
                         <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                       </div>
                       <div class="form-group focused">
                         <label class="form-control-label" for="username">Username<span class="small text-danger">*</span></label>
                         <input type="text" id="username" class="form-control" name="username" placeholder="Username">
                       </div>
                       <div class="form-group focused">
                         <label class="form-control-label" for="password">Password<span class="small text-danger">*</span></label>
                         <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                       </div>
                       <div class="form-group focused">
                         <label class="form-control-label" for="level">Level<span class="small text-danger">*</span></label>
                         <select name="level" id="level" class="form-control">
                           <option value="1">Admin Inventory</option>
                           <option value="2">Admin Pembeli</option>
                           <option value="3">Manajer</option>
                         </select>
                       </div>
                       <div class="form-group focused">
                         <label class="form-control-label" for="email">Email<span class="small text-danger">*</span></label>
                         <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                       </div>
                       <div class="form-group focused">
                         <label class="form-control-label" for="no_telp">Telpon<span class="small text-danger">*</span></label>
                         <input type="text" id="no_telp" class="form-control" name="no_telp" placeholder="Telpon">
                       </div>
                       <div class="form-group focused">
                         <label class="form-control-label" for="foto_profil">Foto Profil<span class="small text-danger">*</span></label>
                         <input type="file" id="foto_profil" class="form-control" name="foto_profil" placeholder="Foto Profil">
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="modal-footer">
                 <a href="login.html" class="btn btn-primary btn-user btn-block">
                   Register Account
                 </a>
                 <div class="text-center">
                   <a class="small" href="<?= site_url('auth'); ?>">Already have an account? Login!</a>
                 </div>
             </form>


           </div>
         </div>
       </div>
     </div>
   </div>

 </div>