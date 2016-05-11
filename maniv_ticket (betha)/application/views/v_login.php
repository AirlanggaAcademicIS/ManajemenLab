<?php echo '<div class="form-box" id="login-box">
<div class="header">Login!!</div>' ?>
<?php
echo form_open(base_url().'login/','id="form-login"') ;
echo $info;
echo '<div class="body bg-gray">';
echo '<div class="form-group">';
$this->table->add_row(form_label('Nama Pengguna :').form_input('nama_user',set_value('nama_user'),'placeholder="username" class="form-control" required'));
echo '</div>';
echo '<div class="form-group">';
$this->table->add_row(form_label('Password :').form_password('pass_user','','placeholder="*******" class="form-control" required'));
echo '</div>';
$this->table->add_row(form_submit('login','Login','id="submit-login" class="btn bg-olive btn-block"'));
echo $this->table->generate();
echo form_close();
?>


<!--
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <?php echo form_open(base_url().'login/','id="form-login"') ; ?>
            	<?php echo $info; ?>
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="nama_user" class="form-control" placeholder="Nama Pengguna" requiered/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass_user" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" id="submit-login" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="facebook.com" target="blank">Lupa password??</a></p>
                    
                    <a href="#" class="text-center">Daftar Akun</a>
                </div>
            <?php echo form_close(); ?>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>
-->