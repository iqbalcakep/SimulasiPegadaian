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
<section class="pricing-table" style="padding:3%;">
   <div class="row">
      <div class="col-md-12">
         <div class="single-table text-center mb-4 mb-md-0">
            <div class="table-top">
               <h3>AMAMNAH</h3>
               <i class="fa fa-money"></i>
            </div>
            <ul class="my-5" style="padding:30px;">
                <?php echo form_open('Amanah/detail'); ?>
                <!-- 1st page -->
                <div class="tab">
                    <li class="mb-2" style="margin-top:10px;">
                        <div style="padding-top:40px">
                            <select id='jenis' name="jenis" class='form-control'>
                            <option>Jenis Kendaraan</option>
                                <option value="200000">Mobil</option>
                                <option value="70000">Motor</option>
                            </select>  
                        </div>
                    </li>
                    <br>
                    <li class="mb-2" style="margin-top:10px;">
                        <div style="padding-top:40px">
                            <select id='merk' name="merk" class='form-control'>
                            <option>Merk Kendaraan</option>
                                <option value="200000">Honda</option>
                                <option value="70000">Yamaha</option>
                            </select>  
                        </div>
                    </li>
                    <br><br>
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
                            <tbody>
                                <tr>
                                    <td>PCX</td>
                                    <td>1.000.000</td>
                                    <td><a href="" class="btn btn-info"> <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        
                    </li>
                    <br>
                </div>
                <!-- 1st page end -->

                <!-- 2nd page -->
                <div class="tab">
                    <li class="mb-2">
                        <div class="mt-10">
                            <input type="text" placeholder="Harga Kendaraan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Harga Kendaraan'" required class="single-input-accent"  id="taksiran" name="taksiran"  data-type="currency">
                        </div>
                    </li><br>
                    <li  class="mb-2">
                        <div >
                            <select id='akad' name="akad" class='form-control' required="">
                                <?php for ($i=date('Y'); $i > date('Y')-10 ; $i--) {?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                            </select>  
                        </div>
                    </li><br>
                    <li  class="mb-2">
                        <div >
                            <select id='akad' name="akad" class='form-control' required="">
                                <option>Metode Angsuran</option>
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
                            <option>Jenis Pegawai / Usaha</option>
                                <option value="200000">Usaha Mikro</option>
                                <option value="70000">Pegawai Eksternal</option>
                            </select>  
                        </div>
                    </li><br>
                </div>
                <!-- 2nd page end -->
                
            </ul>
            <div style="overflow:auto;">
                <div style="float:none;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <!-- <span class="step"></span>
                <span class="step"></span> -->
            </div>
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
