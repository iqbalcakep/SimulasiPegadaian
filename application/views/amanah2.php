<style>
   * {
   box-sizing: border-box;
   }
   #regForm {
   background-color: #ffffff;
   margin: 100px auto;
   font-family: Raleway;
   padding: 40px;
   width: 70%;
   min-width: 300px;
   }
   h1 {
   text-align: center;  
   }
   input {
   padding: 10px;
   width: 100%;
   font-size: 17px;
   font-family: Raleway;
   border: 1px solid #aaaaaa;
   }
   /* Mark input boxes that gets an error on validation: */
   input.invalid {
   background-color: #ffdddd;
   }
   /* Hide all steps by default: */
   .tab {
   display: none;
   }
   button {
   background-color: #4CAF50;
   color: #ffffff;
   border: none;
   padding: 10px 20px;
   font-size: 17px;
   font-family: Raleway;
   cursor: pointer;
   }
   button:hover {
   opacity: 0.8;
   }
   #prevBtn {
   background-color: #bbbbbb;
   }
   /* Make circles that indicate the steps of the form: */
   .step {
   height: 15px;
   width: 15px;
   margin: 0 2px;
   background-color: #bbbbbb;
   border: none;  
   border-radius: 50%;
   display: inline-block;
   opacity: 0.5;
   }
   .step.active {
   opacity: 1;
   }
   /* Mark the steps that are finished and valid: */
   .step.finish {
   background-color: #4CAF50;
   }
</style>
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
            <!-- form open -->
            <?php echo form_open('Amanah/detail'); ?>

                <!-- 1st page -->
                <div class="tab">
                    <ul class="my-5" style="padding:30px;">
                        <li class="mb-2" style="margin-top:10px;">
                            <div style="padding-top:40px">
                                <select id='jenis_kendaraan' onchange="(getMerek(this),selTenorAsr())" name="jenis_kendaraan" class='form-control'>
                                <option selected disabled >Jenis Kendaraan</option>
                                <option value="Mobil">Mobil</option>
                                <option value="Motor">Motor</option>
                                </select>
                            </div>
                        </li>
                        <br>
                        <li  class="mb-2">
                            <div >
                                <select id='tahun' name="tahun" class='form-control' required="">
                                <option>Tahun Kendaraan</option>
                                <?php for ($i=date('Y'); $i > date('Y')-10 ; $i--) {?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </li>
                        <br> 
                        <!-- <li class="mb-2" style="margin-top:10px;">
                            <div id="listmerek" style="padding-top:40px"></div>
                            </li>
                            <br>   
                            <div id="mereklain" style="display:none;opacity:0">
                            <li class="mb-2">
                                <div class="mt-10">
                                <input type="text" placeholder="Harga Kendaraan Anda.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Harga Kendaraan Anda..'" required class="single-input-accent"  id="hargatemp" name="hargatemp"  data-type="currency">
                                </div>
                            </li>
                            </div>
                            <br>  
                            <div id="bknmereklain" style="display:none;opacity:0">
                            <li class="mb-2" style="margin-top:10px;">
                                <div style="padding-top:40px">
                                <p style="float:left"><b>Tipe Kendaraan</b></p>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Tipe Kendaraan</th>
                                            <th>Harga</th>
                                            <th width="5%">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datakendaraan">
                                    </tbody>
                                </table>
                                </div>
                            </li>
                            </div>
                            <br>   -->
                    </ul>
                </div>
                <!-- end 1st -->

                <!-- 2nd page -->
                <div class="tab">
                    <ul class="my-5" style="padding:30px;">
                        <li class="mb-2">
                            <div class="mt-10">
                                <input type="text" placeholder="Harga Kendaraan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Harga Kendaraan'" required class="single-input-accent"  id="harga" name="harga" data-type="currency">
                            </div>
                        </li>
                        <br>
                        <li class="mb-2">
                            <div class="mt-10">
                                <input type="text" readonly placeholder="Uang Muka" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Uang Muka'" required class="single-input-accent"  id="uang_muka" name="uang_muka"  data-type="currency">
                            </div>
                        </li>
                        <br>
                        <li class="mb-2" >
                            <div style="padding-top:40px">
                                <select id='tipe_nasabah' name="tipe_nasabah" class='form-control'>
                                <option>Jenis Pegawai / Usaha</option>
                                <option value="pengusaha">Usaha Mikro</option>
                                <option value="pegawai">Pegawai Eksternal</option>
                                </select>
                            </div>
                        </li>
                        <li  class="mb-2">
                            <div id='tenorin'>
                            </div>
                        </li>
                        <br>
                        <li  >
                            <div id= "asuransi" >
                            </div>
                        </li>
                        <br>
                        <li class="mb-2">
                            <div class="mb-3" style="padding-top:0;">
                                <div align="center" id="angsuranShow">
                                <h2>Rp 0 / Bulan</h2>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end 2nd -->
                
                <!-- angsuran -->
                <div class="mb-3" style="padding-top=20%">
                    <div align="center" id="maxPin">
                    </div>
                    <div align="center" id="angsuranShow">
                    </div>
                </div>
                <!-- angsuran end -->
                
                <!-- 2 btn detail and angsuran -->
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
                <!-- end -->
                
                <!-- btn next and prev -->
                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
                <!-- end btn next and prev -->
                
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                </div>

            <?php echo form_close(); ?>
            <!-- form close -->
         </div>
      </div>
   </div>
</section>

<script>
   //AmanahIqbal
   
    getMerek = (e) =>{
        var jenis = e.options[e.selectedIndex].text;
        
        document.getElementById('listmerek').innerHTML = "";  
        
        document.getElementById('listmerek').innerHTML = "";
        $.ajax({
            type:"POST",
            url:"https://api.thegadeareamalang.com/simulasikreasi/index.php/Hps/getMerek",
            dataType:"json",
            data:{jenis:jenis},
            success:(res)=>{
                document.getElementById('listmerek').innerHTML += "<select onChange='getKendaraan(this)' id='merek' name='merk' class='form-control'>";
                document.getElementById('merek').innerHTML += "<option selected disabled >Merek "+jenis+"</option>";
                res.map(r=>{
                    document.getElementById('merek').innerHTML += "<option value='"+r.merk+"'>"+r.merk+"</option>";  
                })
                document.getElementById('merek').innerHTML += "<option value='mereklain'>Merek Lain...</option>";  
                document.getElementById('listmerek').innerHTML += "</select>";  
            }
        });
        
    }

    getKendaraan = (e) =>{
        var merek = e.options[e.selectedIndex].text;
        console.log(merek);
        if(merek!=="Merek Lain..."){
        $("#bknmereklain").css({"display":"block","opacity":"1","transition":"opacity 2s ease-in-out"});
        $("#mereklain").css({"display":"none","opacity":"0","transition":"opacity 2s ease-in-out"});
        var id = $('#datakendaraan');
        id.html("");
        var tahun = $("#tahun").val();
        var jenis = $("#jenis_kendaraan").val();
        $.ajax({
            type:"POST",
            url:"https://api.thegadeareamalang.com/simulasikreasi/index.php/Hps/getKendaraan",
            dataType:"json",
            data:{jenis:jenis,merek:merek,tahun:tahun},
            success:(res)=>{
                res.map(r=>{
                    id.append("<tr>");
                    id.append("<td>"+r.tipe+"</td>");
                    id.append("<td>"+new Intl.NumberFormat().format(r.harga)+"</td>");
                    id.append("<td><a onClick='setHarga("+r.harga+")' class='btn btn-info'> <i class='fa fa-pencil' aria-hidden='true'></i></a></td>");
                    id.append("</tr>")
                })
            }
        })
        }else{
        $("#bknmereklain").css({"display":"none","opacity":"0","transition":"opacity 2s ease-in-out"});
        $("#mereklain").css({"display":"block","opacity":"1","transition":"opacity 2s ease-in-out"});
        }

    }

    setHarga = (harga) =>{
        nextPrev(1);
        var minim = harga*0.1;
        $('#uang_muka').val(new Intl.NumberFormat().format(minim));
        $('#harga').val(new Intl.NumberFormat().format(harga));

    }
   
   //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   function selTenorAsr()
    {   
        var jenis = document.getElementById('jenis_kendaraan').value;
        if (jenis == 'Motor')
        {
            document.getElementById("tenorin").innerHTML="<select id='tenor' name='tenor' class='form-control' required><option>Metode Angsuran</option><option value='12'>1 Tahun</option><option value='24'>2 Tahun</option><option value='36'>3 Tahun</option></select>";
            document.getElementById("asuransi").innerHTML="<select id='tipe_asuransi' name='tipe_asuransi' class='form-control' required><option value='tlo'>TLO</option></select>";
        }
        else
        {
            document.getElementById("tenorin").innerHTML="<select id='tenor' name='tenor' class='form-control' required><option>Metode Angsuran</option><option value='12'>1 Tahun</option><option value='24'>2 Tahun</option><option value='36'>3 Tahun</option><option value='48'>4 Tahun</option><option value='60'>5 Tahun</option>";
            document.getElementById("asuransi").innerHTML="<select id='tipe_asuransi' name='tipe_asuransi' class='form-control' required><option value='tlo'>TLO</option><option value='comprehensive'>COMPREHENSIVE</option></select>";
            
        }
        
    }
      
   
    function getAngsuran(){
        var harga = document.getElementById('harga').value;
        var uangmuka = document.getElementById('uang_muka').value;
        var tenor = document.getElementById('tenor').value;
        var jenis_kendaraan = document.getElementById('jenis_kendaraan').value;
        var tipe_nasabah = document.getElementById('tipe_nasabah').value;
        var tipe_asuransi = document.getElementById('tipe_asuransi').value;
        var hrg = harga.replace(/,/g,"");
        var um = uangmuka.replace(/,/g,"");
        $.ajax({
            type: "POST",
            url: 'https://api.thegadeareamalang.com/simulasikreasi/index.php/Amanah',
            data: {harga:hrg , tenor:tenor , uang_muka:um , jenis_kendaraan:jenis_kendaraan , tipe_nasabah:tipe_nasabah , tipe_asuransi:tipe_asuransi},
            dataType: 'json',
            success : function(response){
                document.getElementById("angsuranShow").innerHTML ="<h4><small>Dp+Admin :</small> Rp "+new Intl.NumberFormat().format(response.total_um)+" </h4><br><h4><small>Angsuran : </small> Rp"+new Intl.NumberFormat().format(response.angsuran)+" /Bulan</h4>";
                //document.getElementById("angsuranShow").innerHTML ="<h4>sukses</h4>";
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            //alert(hrg+'-'+um+'-'+tenor+'-'+jenis_kendaraan+'-'+tipe_nasabah+'-'+tipe_asuransi);
            document.getElementById("alert").innerHTML ="<div class='alert alert-danger'><strong>Koneksi Terputus / inputan salah</strong></div>";
            testPause(2300);
            }
        });
    }
</script>
<!-- button next script -->
<script>
   var currentTab = 0; // Current tab is set to be the first tab (0)
   showTab(currentTab); // Display the current tab
   
   function showTab(n) {
     // This function will display the specified tab of the form...
     var x = document.getElementsByClassName("tab");
     x[n].style.display = "block";
     //... and fix the Previous/Next buttons:
     if (n == 0) {
       document.getElementById("prevBtn").style.display = "none";
     } else {
       document.getElementById("prevBtn").style.display = "inline";
     }
     if (n == (x.length - 1)) {
       document.getElementById("nextBtn").innerHTML = "Submit";
     } else {
       document.getElementById("nextBtn").innerHTML = "Next";
     }
     //... and run a function that will display the correct step indicator:
     fixStepIndicator(n)
   }
   
   function nextPrev(n) {
     // This function will figure out which tab to display
     var x = document.getElementsByClassName("tab");
     // Exit the function if any field in the current tab is invalid:
     if (n == 1 && !validateForm()) return false;
     // Hide the current tab:
     x[currentTab].style.display = "none";
     // Increase or decrease the current tab by 1:
     currentTab = currentTab + n;
     // if you have reached the end of the form...
     if (currentTab >= x.length) {
       // ... the form gets submitted:
       document.getElementById("regForm").submit();
       return false;
     }
     // Otherwise, display the correct tab:
     showTab(currentTab);
   }
   
   function validateForm() {
     // This function deals with validation of the form fields
     var x, y, i, valid = true;
     x = document.getElementsByClassName("tab");
     y = x[currentTab].getElementsByTagName("input");
     // A loop that checks every input field in the current tab:
     for (i = 0; i < y.length; i++) {
       // If a field is empty...
       if (y[i].value == "") {
         // add an "invalid" class to the field:
         y[i].className += " invalid";
         // and set the current valid status to false
         valid = false;
       }
     }
     // If the valid status is true, mark the step as finished and valid:
     if (valid) {
       document.getElementsByClassName("step")[currentTab].className += " finish";
     }
     return valid; // return the valid status
   }
   
   function fixStepIndicator(n) {
     // This function removes the "active" class of all steps...
     var i, x = document.getElementsByClassName("step");
     for (i = 0; i < x.length; i++) {
       x[i].className = x[i].className.replace(" active", "");
     }
     //... and adds the "active" class on the current step:
     x[n].className += " active";
   }
</script>