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
                            <h4 class="box-title">Ubah Kreasi Multiguna </h4>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('Admin_berjangka/update/'.$this->uri->segment(3));  ?>
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="cc-payment" class="control-label mb-1">Nilai Minimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="min_fb" name="min_fb" placeholder="Nilai Minimum" value="<?php echo $berjangka[0]->min_fb ?>">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="cc-payment" class="control-label mb-1">Nilai Maksimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="max_fb" name="max_fb" placeholder="Nilai Maximum" value="<?php echo $berjangka[0]->max_fb ?>">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="cc-payment" class="control-label mb-1">Sewa Modal</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.001" id="sm_fb" name="sm_fb" placeholder="Sewa Modal" value="<?php echo $berjangka[0]->sm_fb ?>">
                                    <div class="input-group-addon">
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-4">
                            <label for="cc-payment" class="control-label mb-1">Tenor</label>
                            <div class="input-group">
                                <select class="form-control" id="default-select" name="id_admin" placeholder="Tenor" value="<?php echo $berjangka[0]->id_admin ?>">
                                    <?php foreach($administrasi as $key){ ?>
                                        <option value="<?php echo $key->id_admin?>" <?php if($berjangka[0]->id_admin == $key->id_admin){echo 'selected';} ?> ><?php echo $key->bulan ?></option>
                                    <?php } ?>
                                </select>
                                <div class="input-group-addon">
                                    <span>bulan</span>
                                </div>
                            </div>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="cc-payment" class="control-label mb-1">Pola Pembayaran</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" id="pola_fb" name="pola_fb" placeholder="Sewa Modal" value="<?php echo $berjangka[0]->pola_fb ?>">
                                    <div class="input-group-addon">
                                        <span>bulan</span>
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