<html>
    <head>
        <?php $this->load->view('pages/layout/head');?>
    </head>
    <body>       
        <div class="container">
            <div class="create__form__inner">
                <h3>Create your Account</h3>
                <div class="create__form">
                  <form action="<?php echo base_url("register") ?>" enctype="multipart/form-data" method="POST">
                        <div class="col-md-12 form-group">
                            <span style="color:red !important; font-style: italic;"><?php echo form_error('name')?></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                        </div>
                        <div class="col-md-12 form-group">
                            <span style="color:red !important; font-style: italic;"><?php echo form_error('username')?></span>
                            <input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" >
                        </div>
                        <div class="col-md-12 form-group">
                            <span style="color:red !important; font-style: italic;"><?php echo form_error('password')?></span>
                            <input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" >
                        </div>
                        <div class="col-md-12 form-group">
                            <span style="color:red !important; font-style: italic;"><?php echo form_error('confirm_password')?></span>
                            <input type="password" class="form-control" id="name" name="confirm_password" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" >
                        </div>
                        <div class="col-md-12 form-group">
                        <label for="file-input" class=" form-control-label">Chọn avatar</label>
                           <input type="file" name="avatar" class="form-control-file">
                        </div>
                        <div class="col-md-12 form-group">
                            
                            <button type="submit" value="submit" class="primary-btn">Create</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>