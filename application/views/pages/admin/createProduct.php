<html>
    <head>
        <?php $this->load->view('pages/admin/layout/head');?>
    </head>
    <body>
        <aside id="left-panel" class="left-panel">
            <?php $this->load->view('pages/admin/layout/left')?>
        </aside>

        <div id="right-panel" class="right-panel">
            <header id="header" class="header">
                <?php $this->load->view('pages/admin/layout/header');?>
            </header>
            <!-- bread -->
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0" style="box-shadow: 1px 0px 22px -10px;">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Table</a></li>
                                        <li class="active">Data table</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end bread -->
            <div class="col-lg-6" style="   position: absolute;
                                            margin-left: 14%;
                                            margin-top: 8%;">
                <div class="card">
                    <div class="card-header">
                        <strong>Thêm mới thú cưng</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mã Pet</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                           
                           
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                                <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Giống loại</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                </div>
                            </div>
                          
                         
                           
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Giới tính</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">Đực
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input" style="margin-left: 10px;">Cái
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Price</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="" class="form-control"><small class="help-block form-text">Please enter your email</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Sale id</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password-input" name="password-input" placeholder="" class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                            </div>
                           
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Avatar</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Ảnh đi kèm</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file"></div>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>Inline</strong> Form
                    </div>
                    <div class="card-body card-block">
                        <form action="#" method="post" class="form-inline">
                            <div class="form-group"><label for="exampleInputName2" class="pr-1  form-control-label">Name</label><input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control"></div>
                            <div class="form-group"><label for="exampleInputEmail2" class="px-1  form-control-label">Email</label><input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control"></div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>