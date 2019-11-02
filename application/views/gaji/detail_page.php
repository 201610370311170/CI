<!-- page title area start -->
<div class="page-title-area" style="padding:20px">
    <div class="row align-items-center">
        <div class="col-sm-6 clearfix">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="<?php echo base_url('/') ?>">Home</a></li>
                    <li><a href="<?php echo base_url('gaji') ?>">Gaji</a></li>
                    <li>Detail Page</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-area">
                        <div class="invoice-head">
                            <div class="row">
                                <div class="iv-left col-6">
                                    <span>DETAIL GAJI</span>
                                </div>
                                <div class="iv-right col-6 text-md-right">
                                    <span>#<?php echo $gaji_pegawai[0]['id_gaji'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="invoice-address">
                                    <h5>
                                        <?php echo $data_pegawai[0]['nama_pegawai']; ?>
                                    </h5>
                                    <p> Email : <?php echo $data_pegawai[0]['email'] ?></p>
                                    <p>
                                        Jabatan : <?php echo $data_pegawai[0]['jabatan'] ?>
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <ul class="invoice-date">
                                    <h3><?php echo $bulan . " " . date("Y") ?></h3>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-table table-responsive mt-5">
                            <table class="table table-bordered table-hover text-right">
                                <thead>
                                    <tr class="text-capitalize">

                                        <th class="text-left" style="width: 45%; min-width: 130px;">description</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Jumlah Kehadiran</td>
                                        <td><?php echo $gaji_pegawai[0]['kehadiran'] . " hari" ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Target</td>
                                        <td><?php echo $gaji_pegawai[0]['capaian_target_bulanan'] ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">Gaji bulan ini : <?php echo $gaji_pegawai[0]['nominal'] ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="invoice-buttons text-right">
                        <a href="#" class="invoice-btn">print invoice</a>
                        <a href="#" class="invoice-btn">send invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>