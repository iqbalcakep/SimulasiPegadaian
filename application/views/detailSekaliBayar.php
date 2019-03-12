<!-- Header Area Starts -->
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
<!-- Header Area End -->
<!-- Download Area Starts -->
<?php function rupiah($angka)
   {
       $hasil_rupiah = number_format($angka,0,',','.');
       return $hasil_rupiah;
   } ?>
<section class="download-area bgr">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12" style="padding:8%;margin-top:10px">
            <div class="section-top-border">
               <h3 class="mb-10 title_color">Detail Fleksi</h3>
               <div class="row">
                  <div class="col-lg-12">
                     <blockquote class="generic-blockquote">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Pinjaman</th>
                                    <td>Rp <?php echo rupiah($detail->pinjaman) ?></td>
                                </tr>
                                
                                <tr>
                                    <th>Sewa Modal</th>
                                    <td>Rp <?php echo rupiah($detail->sewaModal) ?> (<?php echo $detail->prsModal  ?> %)</td>
                                </tr>
                                <tr>
                                    <th>Biaya Admin</th>
                                    <td>Rp <?php echo rupiah($detail->biayaAdmin) ?> (<?php echo $detail->prsAdmin  ?> %)</td>
                                </tr>
                                <tr>
                                    <th>Total Bayar</th>
                                    <td>Rp <?php echo rupiah($detail->angsuran) ?></td>
                                </tr>
                                <tr>
                                    <th>Tenor</th>
                                    <td><?php echo rupiah($detail->tenor) ?> Bulan</td>
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
                     <h4>Persyaratan Kreasi Fleksi Sekali Bayar</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Barang Jaminan : BPKB Kendaraan bermotor (mobil atau sepeda motor)</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Pengusaha mikro atau pengusaha kecil yang memiliki usaha produktif. </h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Identitas calon nasabah yang jelas :</h5></li>
                                        <ul>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Kartu Tanda Penduduk/KTP,</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Kartu Keluarga/KK,</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> dan Surat Nikah (bila sudah menikah) dengan menunjukkan aslinya;</h5></li>
                                        </ul>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Memiliki tempat tinggal tetap. </h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Usia usahanya sudah lebih dari 1 (satu) tahun.</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Jenis usahanya tidak termasuk yang dilarang diberikan;</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Copy Surat Keterangan Usaha dengan menunjukkan aslinya;</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Copy rekening tagihan telepon/listrik/bukti pembayaran PBB yang terakhir;</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Menyerahkan dokumen kepemilikan agunan yang diperlukan;</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Jarak tempat usaha calon nasabah maksimal 15 km.</h5></li>
                                    </ul>
                     </blockquote>
                  </div>
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