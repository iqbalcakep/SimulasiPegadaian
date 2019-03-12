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

<!-- Pricing Table Starts -->
<section class="pricing-table" style="padding:8%;">
   <div class="row">
      <div class="col-md-12">
         <div class="single-table text-center mb-4 mb-md-0">
            <div class="table-top">
               <h3>AMAMNAH</h3>
               <i class="fa fa-money"></i>
            </div>
            <ul class="my-5" style="padding:30px;">
                <?php echo form_open('Amanah/detail'); ?>
                <li class="mb-2">
                    <div class="mt-10">
                        <input type="text" placeholder="Taksiran Kendaraan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Uang Pinjaman'" required class="single-input-accent"  id="taksiran" name="taksiran"  data-type="currency">
                    </div>
                </li><br>
                <li  class="mb-2">
                    <div >
                        <select id='akad' name="akad" class='form-control'>
                        <option value="3">Metode Angsuran</option>
                            <option value="12">12 Bulanan</option>
                            <option value="18">18 Bulanan</option>
                            <option value="24">24 Bulanan</option>
                            <option value="30">30 Bulanan</option>
                            <option value="36">36 Bulanan</option>
                        </select>  
                    </div>
                </li>
                <br>
                <li class="mb-2" style="margin-top:10px;">
                    <div style="padding-top:40px">
                        <select id='jenis' name="jenis" class='form-control'>
                        <option value="3">Jenis Kendaraan</option>
                            <option value="200000">Mobil</option>
                            <option value="70000">Motor</option>
                        </select>  
                    </div>
                </li>
                <br>
            </ul>
            <div class="mb-3" style="padding-top=20%">
                <div align="center" id="maxPin">
                </div>
                <div align="center" id="angsuranShow">
                </div>
            </div>
            <div class="mb-5" style="padding-left:5%;padding-right:5%;">
                   <div class="row">
                       <div class="col-lg-6 col-xs-12 col-sm-12" style="margin-top:15px">
                            <a  onclick="getAngsuran()" style="color:white;background-color:#cc9933;border-color: #cc9933;" class="btn btn-lg btn-info btn-block">Hitung Angsuran</a>
                       </div>
                       
                       <div class="col-lg-6 col-xs-12 col-sm-12" style="margin-top:15px">
                            <button type="submit"  style="color:white;background-color:#cc9933;border-color: #cc9933;" class="btn btn-lg btn-success btn-block">Detail Pinjaman</button>
                       </div>
                   </div>
            </div>
            <?php echo form_close(); ?>
            
            
         </div>
      </div>
   </div>
</section>
<script>
  $(document).ready(function(){
    $("#taksiran").on('keypress',function(){
      var taksiran = document.getElementById('taksiran').value;
      var pinjaman = taksiran.replace(/,/g,"");
      var total = pinjaman*10*0.7;
      $('#pinjaman').val(new Intl.NumberFormat().format(total));
    });
    document.getElementById('taksiran').addEventListener('keydown', function (event) {
    if (event.keyCode == 8) {
      var taksiran = document.getElementById('taksiran').value;
      var pinjaman = taksiran.replace(/,/g,"");
      var total = pinjaman/10*0.7;
      $('#pinjaman').val(new Intl.NumberFormat().format(total));
      }
    else if(event.keyCode == 46)
      var taksiran = document.getElementById('taksiran').value;
      var pinjaman = taksiran.replace(/,/g,"");
      var total = pinjaman/10*0.7;
      $('#pinjaman').val(new Intl.NumberFormat().format(total));
    });
  });

  function getAngsuran(){
        var taksiran = document.getElementById('taksiran').value;
        var akad = document.getElementById('akad').value;
        var jenis = document.getElementById('jenis').value;
        var pin = taksiran.replace(/,/g,"");
        $.ajax({
            type: "POST",
            url: 'https://api.thegadeareamalang.com/simulasikreasi/index.php/Arrum',
            data: {taksiran:pin, akad:akad, jenis:jenis},
            dataType: 'json',
            success : function(response){
                document.getElementById("maxPin").innerHTML ="<h4><small>Maximal Pinjaman : </small> Rp"+new Intl.NumberFormat().format(response.pinjaman)+" </h4>"
                document.getElementById("angsuranShow").innerHTML ="<h4><small>Angsuran : </small> Rp"+new Intl.NumberFormat().format(response.angsuran)+" /Bulan</h4>"
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("some error");}
        });
    }
</script>