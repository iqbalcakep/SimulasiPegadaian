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
               <h3>Kreasi Fleksi Berjangka</h3>
               <i class="fa fa-money"></i>
            </div>
            <ul class="my-5" style="padding:30px;">
                            <?php echo form_open('Berjangka/detail'); ?>
                            <li class="mb-2">
                                <div class="mt-10">
                                    <input type="text" placeholder="Uang Pinjaman" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent"  id="pinjaman_input" name="uang_pinjaman"  data-type="currency">
                                </div>
                            </li><br>
                            <li  class="mb-2">
                                <div >
                                    <select id='pola_input' name="pola" onchange="getTenor()" class='form-control'>
                                    <option value="3">Metode Angsuran</option>
                                        <option value="3">3 Bulanan</option>
                                        <option value="4">4 Bulanan</option>
                                        <option value="6">6 Bulanan</option>
                                    </select>  
                                </div>
                            </li>
                            <br>
                            <li class="mb-2">
                                <div id="tenors">
                                <div class='icon'></div>
                                <div class='form-select'>
                                    <select id='tenor_input' name="tenor_pinjaman" class='form-control'>
                                        <option value="100">Bulan</option>
                                    </select>  
                                </div>
                            </div>
                            </li><br>
            </ul>
            <div class="mb-3" style="padding-top=20%">
                <div align="center" id="angsuranShow">
                </div>
            </div>
            <div class="mb-5" style="padding-left:5%;padding-right:5%;">
                   <div class="row">
                       <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="margin-top:15px">
                            <a  onclick="getAngsuran()" style="color:white;background-color:#cc9933;border-color: #cc9933;" class="btn btn-lg btn-info btn-block">Hitung Angsuran</a>
                       </div>
                       
                       <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" style="margin-top:15px">
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
    function getTenor()
    {
        var pola = document.getElementById('pola_input').value;
        var html = "";
        if (pola!=4)
        {
            var html = "<div class='icon'></div><div class='form-select' id='tenor_id'><select name='tenor_pinjaman' id='tenor_input' class='form-control' required='required' ><option value='12'>12 Bulan</option><option value='18'>18 Bulan</option><option value='24'>24 Bulan</option><option value='36'>36 Bulan</option></select>";
        }
        else
        {
            var html = "<div class='icon'></div><div class='form-select' id='tenor_id'><select name='tenor_pinjaman' id='tenor_input' class='form-control' required='required' ><option value='12'>12 Bulan</option><option value='24'>24 Bulan</option><option value='36'>36 Bulan</option></select>";
        }
         document.getElementById("tenors").innerHTML = html;  
    }
    function getAngsuran(){
        var pinjaman = document.getElementById('pinjaman_input').value;
        var tenor = document.getElementById('tenor_input').value;
        var pola = document.getElementById('pola_input').value;
        var pin = pinjaman.replace(/,/g,"");
        $.ajax({
            type: "POST",
            url: 'https://api.thegadeareamalang.com/simulasikreasi/index.php/Berjangka',
            data: {up:pin, tenor:tenor, pola:pola},
            dataType: 'json',
            success : function(response){
                document.getElementById("angsuranShow").innerHTML ="<h2> Rp "+new Intl.NumberFormat().format(response.angsuran)+" / "+pola+" Bulan</h1>"
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("some error");}
        });
    }

</script>

</body>
</html>
