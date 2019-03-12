<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="clearfix"></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Ubah Kreasi Reguler </h4>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('Admin_biaya/update/'.$this->uri->segment(3));  ?>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="cc-payment" class="control-label mb-1">Tenor</label>
                                    <div class="input-group">    
                                    <input class="form-control" type="number" id="bulan" name="bulan" placeholder="Tenor" value="<?php echo $administrasi[0]->bulan ?>">
                                    <div class="input-group-addon">
                                            <span>bulan</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="cc-payment" class="control-label mb-1">Biaya Administrasi</label>
                                    <div class="input-group">
                                    
                                    <input class="form-control" type="number" step="0.001" id="adm" name="adm" placeholder="Biaya Admin" onchange="sum()" onkeyup="sum()" value="<?php echo $administrasi[0]->adm ?>">
                                    <div class="input-group-addon">
                                            <span>%</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="cc-payment" class="control-label mb-1">Jamkrindo</label>
                                    <div class="input-group">
                                    
                                    <input class="form-control" type="number" step="0.001" id="jamkrindo" name="jamkrindo" placeholder="Jamkrindo" onchange="sum()" onkeyup="sum()" value="<?php echo $administrasi[0]->jamkrindo ?>">
                                    <div class="input-group-addon">
                                            <span>%</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="cc-payment" class="control-label mb-1">Jasa Raharja</label>
                                    <div class="input-group">
                                    
                                    <input class="form-control" type="number" step="0.001" id="jasa_raharja" name="jasa_raharja" placeholder="Jasa Raharja" onchange="sum()" onkeyup="sum()" value="<?php echo $administrasi[0]->jasa_raharja ?>">
                                    <div class="input-group-addon">
                                            <span>%</span>
                                    </div>
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
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="cc-payment" class="control-label mb-1">Total Biaya Administrasi</label>
                                    <div class="input-group">
                                    
                                    <input class="form-control" type="number" step="0.001" id="biaya_admin" name="biaya_admin" placeholder="Biaya Admin" readonly value="<?php echo $administrasi[0]->biaya_admin ?>">
                                    <div class="input-group-addon">
                                            <span>%</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" tyle="background-color:#cc9933!important;" class="template-btn col-lg-12">Submit</button>
                           </div>
                            <?php echo form_close(); ?>
                            <!-- /.table-stats -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-lg-8 -->
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->