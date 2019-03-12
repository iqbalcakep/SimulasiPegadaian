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
                            <h4 class="box-title">Ubah Fleksi Sekali Bayar </h4>
                        </div>
                        <div class="card-body">
                            <?php echo form_open('Admin_sekali/update/'.$this->uri->segment(3));  ?>
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="cc-payment" class="control-label mb-1">Nilai Minimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="min_fs" name="min_fs" placeholder="Nilai Minimum" value="<?php echo $sekali[0]->min_fs ?>">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="cc-payment" class="control-label mb-1">Nilai Maksimum</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <span>Rp.</span>
                                </div>
                                <input class="form-control" type="number" id="max_fs" name="max_fs" placeholder="Nilai Maximum" value="<?php echo $sekali[0]->max_fs ?>">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="cc-payment" class="control-label mb-1">Sewa Modal</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" step="0.001" id="sm_fs" name="sm_fs" placeholder="Sewa Modal" value="<?php echo $sekali[0]->sm_fs ?>">
                                    <div class="input-group-addon">
                                        <span>%</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-6">
                            <label for="cc-payment" class="control-label mb-1">Tenor</label>
                            <div class="input-group">
                                <select class="form-control" id="default-select" name="id_admin" placeholder="Tenor" value="<?php echo $sekali[0]->id_admin ?>">
                                    <?php foreach($administrasi as $key){ ?>
                                        <option value="<?php echo $key->id_admin?>" <?php if($sekali[0]->id_admin == $key->id_admin){echo 'selected';} ?> ><?php echo $key->bulan ?></option>
                                    <?php } ?>
                                </select>
                                <div class="input-group-addon">
                                    <span>bulan</span>
                                </div>
                            </div>
                            </div>                            
                            </div>
                            <div class="form-group">
                                <button type="submit" tyle="background-color:#cc9933!important;" class="template-btn col-lg-12 .btn-block btn-wa">Submit</button>
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