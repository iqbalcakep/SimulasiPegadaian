<div class="whole-wrap">
   <div class="container">
      <div class="section-top-border">
         <div class="row">
            <div class="col-lg-12 col-md-12">
                <div style="background:#1b1919; padding:50px;">
                    <h3 class="mb-30 title_color" style="color:#cc9933;" align="center">Login Admin</h3>
                    <?php echo form_open('Admin/login'); ?>
                        <div class="mt-10">
                            <input class="form-control" type="text" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="mt-10">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="mt-10">
                            <button type="submit" tyle="background-color:#cc9933!important;" class="template-btn col-lg-12">Sign In</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
               <br>
            </div>
         </div>
      </div>
   </div>
</div>