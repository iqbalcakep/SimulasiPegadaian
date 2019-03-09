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
                            <h4 class="box-title">Kreasi Multiguna </h4>
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
                                            <th>Biaya Administrasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($multi_list as $key) { ?>
                                        <tr>
                                            <td class="serial"><?php echo $key->id_multi ?></td>
                                            <td><?php echo "Rp ".number_format($key->min_multi)." - Rp ".number_format($key->max_multi) ?></td>
                                            <td><?php echo $key->sm_multi." %" ?></td>
                                            <td><?php echo $key->bulan." bulan" ?></td>
                                            <td><?php echo $key->biaya_admin." %" ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Admin_multi/update/').$key->id_multi ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo site_url('Admin_muti/delete/').$key->id_multi ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
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
                                    <?php echo form_open('Admin_multi/create'); ?>
                                    
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Nilai Minimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="min_multi" name="min_multi" placeholder="Nilai Minimum" >
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Nilai Maksimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="max_multi" name="max_multi" placeholder="Nilai Maximum" >
                                </div>
                            </div>
                            
                            
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Sewa Modal</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.001" id="sm_multi" name="sm_multi" placeholder="Sewa Modal">
                                    <div class="input-group-addon">
                                        <span>%</span>
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