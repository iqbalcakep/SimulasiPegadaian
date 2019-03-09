<!-- Download Area Starts -->
<?php function rupiah($angka)
      {
          $hasil_rupiah = number_format($angka,0,',','.');
          return $hasil_rupiah;
      } ?>
<section class="download-area bgr section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="padding-right:15%; padding-left:15%;">
            <div class="section-top-border">
						<h3 class="mb-10 title_color">Detail Arrum BPKB</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									
                                    
                                    <table class="table table-bordered table-hover">
                                    <tbody>
                                                <tr>
                                                    <th>Taksiran Kendaraan</th>
                                                    <td>Rp <?php echo rupiah($detail->pinjaman) ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <th>Uang Pinjaman</th>
                                                    <td>Rp <?php echo rupiah($detail->sewaModal) ?> (<?php echo $detail->prsModal  ?> %)</td>
                                                </tr>
                                                <tr>
                                                    <th>Metode Angsuran</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Tindakan</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Biaya Admin</th>
                                                    <td>Rp <?php echo rupiah($detail->biayaAdmin) ?> (<?php echo $detail->prsAdmin  ?> %)</td>
                                                </tr>
                                                <tr>
                                                    <th>Angsuran / <?= $detail->pola; ?> Bulan</th>
                                                    <td>Rp <?php echo rupiah($detail->angsuran) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tenor</th>
                                                    <td><?php echo rupiah($detail->tenor) ?> Bulan</td>
                                                </tr>
                                                <tr>
                                                    <th>Total Pembayaran Selama <?= $detail->tenor; ?> Bulan</th>
                                                    <td><?php echo rupiah($detail->total) ?> Bulan</td>
                                                </tr>

                                            </tbody>
                                    </table>
                                    
                                    
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

