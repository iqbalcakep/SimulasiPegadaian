<!-- Header Area Starts -->
<header class="header-area main-header">
   <div class="container">
      <div class="row">
         <div class="col-lg-2">
            <div class="logo-area">
               <a href="index.html"><img style="width:128px;height:auto" src="<?php echo base_url('') ?>assets/images/logo/logold.png" alt="logo"></a>
            </div>
         </div>
         <div class="col-lg-10">
            <div class="custom-navbar" style="width:50px;height:50px;">
               <a href="<?php echo site_url('home') ?>"><i style="color:white;font-size:20pt;text-align:center;padding:5px;" class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
            <div>
            </div>
            <!-- <div class="main-menu">
               <ul>
                   <li class="active"><a href="index.html">home</a></li>
                   <li><a href="about.html">about us</a></li>
                   <li><a href="job-category.html">category</a></li>
                   <li><a href="#">blog</a>
                       <ul class="sub-menu">
                           <li><a href="blog-home.html">Blog Home</a></li>
                           <li><a href="blog-details.html">Blog Details</a></li>
                       </ul>
                   </li>
                   <li><a href="contact-us.html">contact</a></li>
                   <li><a href="#">pages</a>
                       <ul class="sub-menu">
                           <li><a href="job-search.html">Job Search</a></li>
                           <li><a href="job-single.html">Job Single</a></li>
                           <li><a href="pricing-plan.html">Pricing Plan</a></li>
                           <li><a href="elements.html">Elements</a></li>
                       </ul>
                   </li>
                   <li class="menu-btn">
                       <a href="#" class="login">log in</a>
                       <a href="#" class="template-btn">sign up</a>
                   </li>
               </ul>
               </div> -->
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
               <h3 class="mb-10 title_color">Detail Kreasi Reguler</h3>
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