
<div class="whole-wrap">
   <div class="container">
      <div class="section-top-border">
         <div class="row">
            <div class="col-lg-12 col-md-12">
                <div style="background:#1b1919; padding:50px;">
                    <h3 class="mb-30 title_color" style="color:#cc9933;" align="center">Kreasi Reguler</h3>
                        <div class="mt-10">
                            <input class="form-control" type="number" id="pinjaman_input" name="pinjaman" placeholder="pinjaman" value=''>
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            <div class="form-select" id="tenor_id">
                                <select  name="tenor" id="tenor_input" class="form-control" required="required" >
                                <option value="12">12 Bulan</option>
                                <option value="18">18 Bulan</option>
                                <option value="24">24 Bulan</option>
                                <option value="36">36 Bulan</option>
                                <option value="48">48 Bulan</option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div align="center" id="angsuranShow">
                            <h1 style="color:#cc9933;"></h1>
                        </div>
                        <br>
                        <button type="submit" onclick="getAngsuran()" style="background-color:#cc9933!important;" class="template-btn col-lg-12">Detail</button>
                </div>
               <br>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
    function getAngsuran(){
        var pinjaman = document.getElementById('pinjaman_input').value;
        var tenor = document.getElementById('tenor_input').value;
        $.ajax({
            type: "POST",
            url: 'http://localhost/SimluasiPegadaian_API/index.php/reguler',
            data: {up:pinjaman, tenor:tenor},
            dataType: 'json',
            success : function(response){
                document.getElementById("angsuranShow").innerHTML ="<h1 style='color:#cc9933;''> Rp "+new Intl.NumberFormat().format(response.angsuran)+" / Bulan</h1>"
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("some error");}
        });
    }
</script>
