<html>
    <head>
        <?php $this->load->view('pages/head');?>
    </head>
    <body>       
        <div class="container">
            <div class="create__form__inner">
                <h3>Create your Account</h3>
                <div class="create__form">
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
					</div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                    </div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
					</div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">Create</button>
					</div>
                </div>
            </div>
        </div>
    </body>
</html>