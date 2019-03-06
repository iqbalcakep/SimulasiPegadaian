    <!-- Pricing Table Starts -->
    <section class="pricing-table section-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-table text-center mb-4 mb-md-0">
                        <div class="table-top">
                            <h3>Kreasi Reguler</h3>
                            <i class="fa fa-money"></i>
                        </div>
                        <ul class="my-5" style="padding:30px;">
                            <?php echo form_open('reguler/detail'); ?>
                            <li class="mb-2">
                                <div class="mt-10">

                                    <input type="text"  oninput="getTenor()" placeholder="Jumlah Uang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required class="single-input-accent"  id="pinjaman_input" name="uang_pinjaman"  data-type="currency">
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
                            <!-- <li class="mb-2">
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select">
                                        <select name="" id="input" class="form-control">
                                            <option value="">Jangka</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>
                                            <option value="12">12</option>
                                            <option value="18">18</option>
                                            <option value="24">24</option>
                                            <option value="30">30</option>
                                            <option value="36">36</option>
                                            <option value="42">42</option>
                                            <option value="48">48</option>
                                            <option value="54">54</option>
                                            <option value="60">60</option>
                                        </select>
                                    </div>
                                </div>
                            </li>  -->
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
                document.getElementById("angsuranShow").innerHTML ="<h2> Rp "+new Intl.NumberFormat().format(response.angsuran)+" / Bulan</h1>"
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("some error");}
        });
    }

</script>

</body>
</html>
