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
               <h3 class="mb-10 title_color">Detail Multiguna</h3>
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
                                 <th>Angsuran Pokok</th>
                                 <td>Rp <?php echo rupiah($detail->angsuranPokok) ?></td>
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
                                 <th>Angsuran</th>
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
                     <h4>Persyaratan Kreasi  Multiguna</h4>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Barang Jaminan : BPKB Kendaraan bermotor (mobil atau sepeda motor)</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Penyaluran Pinjaman : Karyawan (Tetap, Perjanjian Kerja Waktu, Tertentu,</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> WNI berusia min. 21 tahun dan maks. 60 tahun.</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Untuk karyawan atau non karyawan dengan masa kerja minimal 1 tahun.</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Menyerahkan dokumen, meliputi: </h5></li>
                                        <ul>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Foto Nasabah</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Fotokopi KTP Nasabah dan Pasangan/Keluarga dalam Satu Kartu Keluarga</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Fotokopi Kartu Keluarga</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Foto Barang Jaminan (Fisik Kendaraan dan Dokumen Kepemilikan)</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Foto Tempat Kerja</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Fotokopi Izin Praktek Kerja/Usaha atau Surat Keterangan Kerja/Sejenisnya</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Fotokopi Bukti Kepemilikan Tempat Tinggal (khusus pekerja sektor non formal)</h5></li>
                                            <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Fotokopi Pajak Bumi dan Bangunan dan/atau Rekening Listrik/Telepon/Air (khusus pekerja sektor non formal)</h5></li>
                                        </ul>
                                        <li class="mb-3"><h5><i class="fa fa-arrow-right"></i> Pembayaran angsuran dapat melalui aplikasi Pegadaian Digital, Agen Pegadaian dan outlet Pegadaian di seluruh Indonesia</h5></li>
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