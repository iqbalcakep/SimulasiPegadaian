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
                            <h4 class="box-title">Biaya Administrasi </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Tenor</th>
                                            <th>Biaya Administrasi</th>
                                            <th>Jamkrindo</th>
                                            <th>Jasa Raharja</th>
                                            <th>Total</th>
                                            <th>Biaya Administrasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($administrasi_list as $key) { ?>
                                        <tr>
                                            <td class="serial"><?php echo $key->id_admin ?></td>
                                            <td><?php echo $key->bulan." bulan" ?></td>
                                            <td><?php echo $key->adm." %" ?></td>
                                            <td><?php echo $key->jamkrindo." %" ?></td>
                                            <td><?php echo $key->jasa_raharja." %" ?></td>
                                            <td><?php echo $key->biaya_admin." %" ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Admin_biaya/update/').$key->id_admin ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo site_url('Admin_biaya/delete/').$key->id_admin ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
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
                                    <?php echo form_open('Admin_biaya/create'); ?>
                                    <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Tenor</label>
                                <div class="input-group">
                                <input class="form-control" type="text" id="bulan" name="bulan" placeholder="Tenor" >
                                <div class="input-group-addon">
                                        <span>bulan</span>
                                </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Biaya Administrasi</label>
                                <div class="input-group">
                                
                                <input class="form-control" type="number" step="0.001" id="adm" name="adm" placeholder="Biaya Admin" onchange="sum()" onkeyup="sum()">
                                <div class="input-group-addon">
                                        <span>%</span>
                                </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Jamkrindo</label>
                                <div class="input-group">
                                
                                <input class="form-control" type="number" step="0.001" id="jamkrindo" name="jamkrindo" placeholder="Jamkrindo" onchange="sum()" onkeyup="sum()">
                                <div class="input-group-addon">
                                        <span>%</span>
                                </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Jasa Raharja</label>
                                <div class="input-group">
                                
                                <input class="form-control" type="number" step="0.001" id="jasa_raharja" name="jasa_raharja" placeholder="Jasa Raharja" onchange="sum()" onkeyup="sum()">
                                <div class="input-group-addon">
                                        <span>%</span>
                                </div>
                                </div>
                            </div>
                            <script>
                            function sum() {
                                var txtFirstNumberValue = document.getElementById('adm').value;
                                var txtSecondNumberValue = document.getElementById('jamkrindo').value;
                                var txtThirdNumberValue = document.getElementById('jasa_raharja').value;
                                var result = parseFloat(txtFirstNumberValue) + parseFloat(txtSecondNumberValue) + parseFloat(txtThirdNumberValue);
                                if (!isNaN(result)) {
                                    document.getElementById('biaya_admin').value = result;
                                }
                            }
                            </script>
                            <div class="form-group col-lg-12">
                                <label for="cc-payment" class="control-label mb-1">Total Biaya Administrasi</label>
                                <div class="input-group">
                                
                                <input class="form-control" type="number" step="0.001" id="biaya_admin" name="biaya_admin" placeholder="Biaya Admin" readonly >
                                <div class="input-group-addon">
                                        <span>%</span>
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
<!-- /.content -->
<div class="modal fade none-border" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Ubah Data</strong></h4>
            </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success save-event waves-effect waves-light">Simpan</button>
        </div>
    </div>
</div>
</div>