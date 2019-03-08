<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Kreasi Fleksi Berjangka </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Nilai UP</th>
                                            <th>Sewa Modal</th>
                                            <th>Tenor</th>
                                            <th>Pola Pembayaran</th>
                                            <th>Biaya Administrasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($berjangka_list as $key) { ?>
                                        <tr>
                                            <td class="serial"><?php echo $key->id_berjangka ?></td>
                                            <td><?php echo "Rp ".number_format($key->min_fb)." - Rp ".number_format($key->max_fb) ?></td>
                                            <td><?php echo $key->sm_fb." %" ?></td>
                                            <td><?php echo $key->bulan." bulan" ?></td>
                                            <td><?php echo $key->pola_fb." bulan" ?></td>
                                            <td><?php echo $key->biaya_admin." %" ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Admin_berjangka/update/').$key->id_berjangka ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo site_url('Admin_berjangka/delete/').$key->id_berjangka ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-stats -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-lg-6 col-xl-12">
                            <div class="card br-0">
                                <div class="card-body">
                                    <h4 class="box-title">Tambah Data </h4>
                                </div>
                                <div class="card-body">
                                    <?php echo form_open('Admin_berjangka/create'); ?>
                                    
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Nilai Minimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="min_fb" name="min_fb" placeholder="Nilai Minimum" >
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Nilai Maksimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="max_fb" name="max_fb" placeholder="Nilai Maximum" >
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Sewa Modal</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.001" id="sm_fb" name="sm_fb" placeholder="Sewa Modal">
                                    <div class="input-group-addon">
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Pola Pembayaran</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="pola_fb" name="pola_fb" placeholder="Pola Pembayaran">
                                    <div class="input-group-addon">
                                        <span>bulan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                            <label for="cc-payment" class="control-label mb-1">Tenor</label>
                            <div class="input-group">
                            <select class="form-control" id="default-select" name="id_admin" placeholder="Tenor">
                                                <?php foreach($administrasi as $key){ ?>
                                                <option value="<?php echo $key->id_admin?>"><?php echo $key->bulan." bulan" ?></option>
                                                <?php } ?>
                                            </select>
                                <div class="input-group-addon">
                                    <span>bulan</span>
                                </div>
                            </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" tyle="background-color:#cc9933!important;" class="template-btn col-lg-12">Submit</button>
                           </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>