
<style media="screen">
body {
background-image: url("<?php echo base_url(); ?>image/signup-bg.jpg");
}
.formerror p{
  color:red;
}
</style>
    <div class="main">
 
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="<?php echo site_url(); ?>register/register_req" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <?php
           if($this->uri->segment(2) == "inserted")
           {
           //base url - http://localhost/tutorial/codeigniter
           //redirect url - http://localhost/tutorial/codeigniter/main/inserted
                //main - segment(1)
                //inserted - segment(2)
                echo '<p class="text-success">Data Inserted</p>';
           } ?>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="name" placeholder="Your Name"/>
                            <span class="formerror"><?php echo form_error('username'); ?></span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                            <span class="formerror"><?php echo form_error('email'); ?></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span class="formerror"><?php echo form_error('password'); ?></span>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                            <span class="formerror"><?php echo form_error('re_password'); ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="usermobile" placeholder="Enter your Mobile Number"/>
                            <span class="formerror"><?php echo form_error('usermobile'); ?></span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="insertdetails" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?php echo base_url() ?>login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
