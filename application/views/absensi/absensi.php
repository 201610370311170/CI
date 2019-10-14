     <!-- CSS -->
     <style>
         .clock {
             position: absolute;
             top: 50%;
             left: 50%;
             transform: translateX(-50%) translateY(-50%);
             color: #000000;
             font-size: 20px;
             font-family: sans-serif;
             letter-spacing: 7px;

         }
     </style>
     <!-- CSS -->




     <!-- page title area start -->
     <div class="page-title-area" style="padding:20px">
         <div class="row align-items-center">
             <div class="col-sm-6 clearfix">
                 <div class="breadcrumbs-area clearfix">
                     <h4 class="page-title pull-left">Dashboard</h4>
                     <ul class="breadcrumbs pull-left">
                         <li><a href="<?php echo base_url('/') ?>">Home</a></li>
                         <li><span>Absensi</span></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class="col-md-5" style="float: right; margin-top : 50px;">
         <div class="card">
             <div class="seo-fact sbg2">
                 <div class="p-4 d-flex justify-content-between align-items-center">
                     <div class="seofct-icon">Daftar kehadiran hari ini</div>
                     <canvas id="seolinechart4" height="30"></canvas>
                 </div>
             </div>
         </div>


         <?php
            $currentDate    = date('d-m-20y');
            $query          = $this->Absensi_model->getData($currentDate);
            //Kondisi jika terdapat data pada absensi
            if (count($query) > 0) { ?>
             <!-- Striped table start -->
             <div class="card">
                 <div class="card-body">
                     <h4 class="header-title"></h4>
                     <div class="single-table">
                         <div class="table-responsive">
                             <table class="table table-bordered">
                                 <thead class="text-uppercase">
                                     <tr>
                                         <th scope="col">NIP</th>
                                         <th scope="col">Name</th>
                                     </tr>
                                 </thead>
                                 <?php for ($i = 0; $i < count($daftar_hadir['NIP']); $i++) : ?>
                                     <tbody>
                                         <tr>
                                             <th scope="row"><?php echo $daftar_hadir['NIP'][$i] ?></th>
                                             <td><?php echo $daftar_hadir['Nama_pegawai'][$i] ?></td>
                                         </tr>
                                     </tbody>
                                 <?php endfor ?>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Striped table end -->


         <?php } else { ?>
             <!-- //Kondisi jika tidak terdapat data pada absensi -->
             <div class="card">
                 <div class="card-body">
                     <h4 class="header-title"></h4>
                     <div class="single-table">
                         <div class="table-responsive">
                             <table class="table table-bordered">
                                 <thead class="text-uppercase">
                                     <tr>
                                         <th scope="col">NIP</th>
                                         <th scope="col">Name</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                     <tr>
                                         <th scope="row"></th>
                                         <td></td>
                                     </tr>
                                 </tbody>

                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         <?php } ?>
     </div>






     <!-- Date and Time -->
     <div class="col-md-7 mt-5 mb-3">
         <div class="card">
             <div class="seo-fact sbg1">
                 <div class="p-4 d-flex justify-content-between align-items-center">
                     <div class="seofct-icon">
                         <i class=" ti-alarm-clock"></i>
                     </div>
                     <div style="margin-left:10px;">
                         <h3 style="color: white;" id="MyClockDisplay" class="card-text" onload="showTime()"></h3>
                         <p style="color: white;"><?php echo $date ?></p>
                     </div>

                 </div>
                 <canvas id="seolinechart1" height="30"></canvas>
             </div>
         </div>
     </div>
     <!-- Date and Time -->

     <!-- TABEL Absensi -->
     <!-- Hoverable Rows Table start -->
     <div class="col-lg-7" style="margin:3px;">
         <div class="card">
             <div class="card-body">
                 <div class="single-table">
                     <div class="table-responsive">
                         <?php echo form_open('absensi/submit') ?>
                         <table class="table table-hover text-center">
                             <thead class="text-uppercase">
                                 <tr>
                                     <th scope="col">NIP</th>
                                     <th scope="col">Nama Pegawai</th>
                                     <th scope="col">Jabatan</th>
                                     <th scope="col">Action</th>
                                 </tr>
                             </thead>
                             <tbody id="myTable">
                                 <?php for ($i = 0; $i < count($pegawai); $i++) : ?>
                                     <tr>
                                         <td><?php echo $pegawai[$i]['id_pegawai'] ?></td>
                                         <td><?php echo $pegawai[$i]['nama_pegawai'] ?></td>
                                         <td><?php echo $pegawai[$i]['jabatan'] ?></td>
                                         <td>
                                             <input type="hidden" name="id_pegawai[<?php echo $pegawai[$i]['id_pegawai'] ?>]" value="<?php echo $pegawai[$i]['id_pegawai'] ?>">
                                             <input type="radio" name=kehadiran[<?php echo  $pegawai[$i]['id_pegawai'] ?>] value="Hadir">&nbsp Hadir &nbsp | &nbsp
                                             <input type="radio" name=kehadiran[<?php echo  $pegawai[$i]['id_pegawai'] ?>] value="Tidak Hadir">&nbsp Tidak Hadir &nbsp

                                         </td>
                                     </tr>
                                 <?php endfor ?>
                             </tbody>
                         </table>
                         <div style="margin-left:510px; margin-top:10px;">
                             <input type="submit" class="btn btn-primary" value="Submit">
                         </div>
                         <?php echo form_close() ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Hoverable Rows Table end -->
     <!-- TABEL Absensi -->

     </div>
     <!-- MAIN CONTENT END-->




     <!-- JAVSCRIPT -->
     <script>
         function showTime() {
             var date = new Date();
             var h = date.getHours(); // 0 - 23
             var m = date.getMinutes(); // 0 - 59
             var s = date.getSeconds(); // 0 - 59
             var session = "AM";

             if (h == 0) {
                 h = 12;
             }

             if (h > 12) {
                 h = h - 12;
                 session = "PM";
             }

             h = (h < 10) ? "0" + h : h;
             m = (m < 10) ? "0" + m : m;
             s = (s < 10) ? "0" + s : s;

             var time = h + ":" + m + ":" + s + " ";
             document.getElementById("MyClockDisplay").innerText = time;
             document.getElementById("MyClockDisplay").textContent = time;

             setTimeout(showTime, 1000);

         }

         showTime();
     </script>
     <!-- JAVASCRIPT -->