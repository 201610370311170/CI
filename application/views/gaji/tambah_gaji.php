     <!-- page title area start -->
     <div class="page-title-area" style="padding:20px">
         <div class="row align-items-center">
             <div class="col-sm-6 clearfix">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Dashboard</h4>
                     <ul class="breadcrumbs pull-left">
                         <li><a href="<?php echo base_url('/') ?>">Home</a></li>
                         <li><a href="<?php echo base_url('gaji') ?>">Gaji</a></li>
                         <li>Tambah Data Gaji</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <!-- page title area end -->

     <div class="row" style="margin:10px">
         <div class="col-8 mt-5">
             <div class="card">
                 <!-- basic form start -->
                 <div class="card">
                     <div class="card-body">
                         <h4 class="header-title">Silahkan lengkapi data berikut</h4>
                         <?php echo form_open('gaji/generate') ?>


                         <div class="form-group">
                             <label for="exampleInputEmail1">Nama Pegawai</label><br>
                             <!-- <input type="text" class="form-control" name="nama_pegawai" required> -->
                             <input list="pegawai" name="id_pegawai" class="form-control" required>
                             <datalist id="pegawai">
                                 <?php foreach ($data_pegawai as $data) : ?>
                                     <option value="<?php echo $data['id_pegawai'] ?>"><?php echo $data['nama_pegawai'] ?>
                                     <?php endforeach ?>
                             </datalist>
                         </div>
                         <div class="form-group">
                             <label>Golongan</label>
                             <select name="golongan" class="form-control" style="padding : 5px;" required>
                                 <option value=""></option>
                                 <option value="1">Golongan 1 Staff</option>
                                 <option value="2">Golongan 2 Karyawan</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label>Bulan</label>
                             <input type="month" name="Bulan" class="form-control" required />
                         </div>
                         <div class="form-group">
                             <label>Mencapai Target</label><br>
                             <input required type="radio" name="capaian_target" value="Tercapai">&nbsp Tercapai &nbsp
                             <input required type="radio" name="capaian_target" value="Tidak Tercapai"> &nbsp Tidak Tercapai
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