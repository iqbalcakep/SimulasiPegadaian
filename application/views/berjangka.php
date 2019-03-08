
   <!-- Pricing Table Starts -->
   <section class="pricing-table section-padding">
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
                                    <input type="text" placeholder="Jumlah Uang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent"  id="pinjaman_input" name="uang_pinjaman"  data-type="currency">
                                </div>
                            </li><br>
                            <li class="mb-2">
                            <div class='icon'></div>
                                <div class='form-select'>
                                    <select id='pola_input' name="pola" onchange="getTenor()" class='form-control'>
                                    <option value="3">Metode Angsuran</option>
                                        <option value="3">03 Bulanan</option>
                                        <option value="4">04 Bulanan</option>
                                        <option value="6">06 Bulanan</option>
                                    </select>  
                                </div>
                            </li><br>
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
                        <div align="center" id="angsuranShow">
                        </div>
                        <br><br>
                        <a onclick="getAngsuran()" class="template-btn">Hitung Angsuran</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="template-btn">Detail Pinjaman</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Table End -->
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
            url: 'http://localhost/SimluasiPegadaian_API/index.php/Berjangka',
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
