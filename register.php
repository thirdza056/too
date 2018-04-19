<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    	<div class="row">
		
    	<div class="col-lg-4 col-lg-offset-4">
		
        	<h3 class="text-center">CHAI-VPN</h3>
            <p class="text-center">สมัครสมาชิก in to get in CHAI-VPN</p>
			<CENTER>
			<img src = "<?= base_url('logo.png')?>" width="350" height="250" border="1">
			</CENTER>
				<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
            <hr class="clean">
              <?= form_open() ?>


              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input class="form-control" placeholder="ชื่อผู้ใช้งาน" name="username" type="text" autofocus required>
              </div>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                	<input type="email" class="form-control" id="email" name="email" placeholder="อีเมล์">
              </div>
			   <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-key"></i></span>
               	<input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
              </div>
			   <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-key"></i></span>
                	<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="ยืนยันรหัสผ่าน">
              </div>
             
        	  <button type="submit" class="btn btn-purple btn-block" value="Buat akun" class="btn-large waves-effect waves-light blue lighten-1"> สมัครสมาชิก</button>      
            </form>
            <hr>
            
            <p class="text-center text-gray">มีบัญชี อยู่แล้ว!</p>
          <a href="<?= base_url('login/login') ?>" class="btn btn-default btn-block"> มีบัญชี อยู่แล้ว</a>
        </div>
        </div>
    </div>
    <br>
<br>
<br>
