<header class="header-area main-header">
   <div class="container">
      <div class="row">
         <div class="col-lg-2">
            <div class="logo-area">
               <a><img style="width:128px;height:auto" src="<?php echo base_url('') ?>assets/images/logo/logold.png" alt="logo"></a>
            </div>
         </div>
         <div class="col-lg-10">
            <div class="custom-navbar" style="width:50px;height:50px;">
               <a href="<?php echo site_url('home') ?>"><i style="color:white;font-size:20pt;text-align:center;padding:5px;" class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
            <div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- Download Area Starts -->
<?php function rupiah($angka)
      {
          $hasil_rupiah = number_format($angka,0,',','.');
          return $hasil_rupiah;
      } ?>
<section class="download-area bgr ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="padding:8%;margin-top:10px">
            <div class="section-top-border">
						<h3 class="mb-10 title_color">Detail Amanah</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									
                                    
                                    <table class="table table-bordered table-hover">
                                    <tbody>
                                                <tr>
                                                    <th>Taksiran Kendaraan</th>
                                                    <td>Rp <?php echo rupiah($detail->taksiran) ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Uang Pinjaman</th>
                                                    <td>Rp <?php echo rupiah($detail->pinjaman) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Mu'nah</th>
                                                    <td>Rp <?php echo rupiah($detail->munah) ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Angsuran Pokok</th>
                                                    <td>Rp <?php echo rupiah($detail->angsuranPokok) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Angsuran/bulan</th>
                                                    <td>Rp <?php echo rupiah($detail->angsuran) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kendaraan</th>
                                                    <td><?php echo $detail->jenis; ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya Admin</th>
                                                    <td>Rp <?php echo rupiah($detail->biayaAdmin) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Kafalah</th>
                                                    <td>Rp<?php  echo rupiah($detail->kafalah) ?> (<?php echo $detail->rate_kafalah ?>%)</td>
                                                </tr>
                                                <tr>
                                                    <th>Akad</th>
                                                    <td><?php echo $detail->tenor ?> Bulan</td>
                                                </tr>
                                                

                                            </tbody>
                                    </table>
                                    <h6><font color="red">* Belum termasuk biaya notaris</font></h6>
                                    
                                    
								</blockquote>
							</div>
						</div>
						<div class="row">
                  <div class="col-lg-12">
                     <blockquote class="generic-blockquote">
                     <h4>Persayaratan Arrum BPKB</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Memiliki usaha memenuhi kriteria kelayakan serta telah berjalan 1 (satu) tahun atau lebih. </h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Fotocopy KTP dan Kartu Keluarga. </h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Menyerahkan dokumen yang sah.</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Menyerahkan dokumen kepemilikan kendaraan bermotor (BPKB asli, fotocopy STNK dan faktur pembelian).</h5></li>
                                    </ul>
                     </blockquote>
                  </div>
					</div>
            </div>
            <!-- <div class="col-lg-6 pr-0">
                <div class="download-img"></div>
            </div> -->
        </div>
    </div>
</section>
<!-- Download Area End -->

