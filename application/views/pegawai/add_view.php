     <!-- page title area start -->
     <div class="page-title-area" style="padding:20px">
         <div class="row align-items-center">
             <div class="col-sm-6 clearfix">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Dashboard</h4>
                     <ul class="breadcrumbs pull-left">
                         <li><a href="<?php echo base_url('/') ?>">Home</a></li>
                         <li><a href="<?php echo base_url('pegawai') ?>">Kelola Data</a></li>
                         <li>Add Record</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- page title area end -->

     <div class="row" style="margin:10px">
         <div class="col-12 mt-5">
             <div class="card">
                 <!-- basic form start -->
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Add Record</h4>
                         <?php echo form_open('pegawai/register') ?>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Nama Pegawai</label>
                             <input type="text" class="form-control" name="nama_pegawai" required>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Email</label>
                             <input type="email" class="form-control" aria-describedby="emailHelp" name="email" required>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1">Jabatan</label>
                             <input type="text" class="form-control" name="jabatan" required>
                         </div>
                         <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                         <?php echo form_close() ?>
                     </div>
                 </div>
             </div>
             <!-- basic form end -->

         </div>
     </div>



     </div>