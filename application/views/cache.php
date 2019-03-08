
<div class="whole-wrap">
   <div class="container">
      <div class="section-top-border">
         <div class="row">
            <div class="col-lg-12 col-md-12">
                <div style="background:#1b1919; padding:50px;">
                    <h3 class="mb-30 title_color" style="color:#cc9933;" align="center">Kreasi Reguler</h3>
                    <?php echo form_open('reguler/detail'); ?>
                        <div class="mt-10">
                            <input type="text" oninput="getTenor()" placeholder="Jumlah Pinjaman" class="form-control" id="pinjaman_input" name="uang_pinjaman"  data-type="currency" value="" required>
                        <div class="input-group-icon mt-10" >
                            <div id="tenors">
                                <div class='icon'></div>
                                <div class='form-select'>
                                    <select id='tenor_input' name="tenor_pinjaman" class='form-control'>
                                        <option value="100">Bulan</option>
                                    </select>                 
                                </div>
                            </div>
                        <br><br>
                        <div align="center" id="angsuranShow">
                            <h1 style="color:#cc9933;"></h1>
                        </div>
                        <br>
                        <a onclick="getAngsuran()" style="background-color:#cc9933!important;" class="template-btn col-lg-12">angsuran</a>
                        <br>
                        <button type="submit" style="background-color:#cc9933!important;" class="template-btn col-lg-12">Detail</button>
                        <?php echo form_close(); ?>
                </div>
               <br>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
    function getTenor()
    {
        var pinjaman = document.getElementById('pinjaman_input').value;
        var pin = parseInt(pinjaman.replace(/,/g,""));
        var html = "";
        if (pin<100000000)
        {
            var html = "<div class='icon'></div><div class='form-select' id='tenor_id'><select name='tenor_pinjaman' id='tenor_input' class='form-control' required='required' ><option value='12'>12 Bulan</option><option value='18'>18 Bulan</option><option value='24'>24 Bulan</option><option value='36'>36 Bulan</option></select>";
        }
        else
        {
            var html = "<div class='icon'></div><div class='form-select' id='tenor_id'><select name='tenor_pinjaman' id='tenor_input' class='form-control' required='required' ><option value='12'>12 Bulan</option><option value='18'>18 Bulan</option><option value='24'>24 Bulan</option><option value='36'>36 Bulan</option><option value='48'>48 Bulan</option></select>";
        }
         document.getElementById("tenors").innerHTML = html; 
    }
    function getAngsuran(){
        var pinjaman = document.getElementById('pinjaman_input').value;
        var tenor = document.getElementById('tenor_input').value;
        var pin = pinjaman.replace(/,/g,"");
        $.ajax({
            type: "POST",
            url: 'http://localhost/SimluasiPegadaian_API/index.php/reguler',
            data: {up:pin, tenor:tenor},
            dataType: 'json',
            success : function(response){
                document.getElementById("angsuranShow").innerHTML ="<h1 style='color:#cc9933;''> Rp "+new Intl.NumberFormat().format(response.angsuran)+" / Bulan</h1>"
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("some error");}
        });
    }

</script>
