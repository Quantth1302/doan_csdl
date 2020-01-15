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
                                        <li><a href="<?php echo base_url('admin')?>">Home</a></li>
                                        <li><a href="<?php echo base_url('admin/employee')?>">Employee</a></li>
                                        <li class="active" style="cursor: pointer;">Edit</li>
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
                        <strong>Update Employee</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <!-- id -->
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                <div class="col-12 col-md-9"><span style="color:red !important; font-style: italic;"><?php echo form_error('id')?></span><input type="text" id="text" name="id" placeholder="Text" value="<?php echo $employee->id?>"class="form-control"></div>
                            </div>

                           <!-- name -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nameabel></div>
                                <div class="col-12 col-md-9"><input type="text" id="text" name="name" placeholder="Text" class="form-control" value="<?php echo $employee->name?>"></div>
                            </div>

                        
                
                        <!-- gender -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio" name="gender" value="1" class="form-check-input" checked=<?php if ($employee->gender==1) echo "checked"?>>Male
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input  style="margin-left: 10px;" type="radio" id="inline-radio" name="gender" value="0" class="form-check-input" checked=<?php if ($employee->gender==0) echo "checked"?>>Female
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                           <!-- email -->
                           <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Adress</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="password-input" value="<?php echo $employee->adress?>" name="adress" placeholder="" class="form-control"></div>
                            </div>
                           <!-- username -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="password-input" value="<?php echo $employee->username?>" name="username" placeholder="" class="form-control"></div>
                            </div>
                            <!-- password -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password-input" value="<?php echo $employee->password?>" name="password" placeholder="" class="form-control"></div>
                            </div>
                              <!-- Role-->
                              <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Role</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="password-input" value="<?php echo $employee->role_id?>" name="role_id" placeholder="" class="form-control"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">image</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="image" value="<?php echo $employee->image?>" name="image" class="form-control-file"></div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Update" class="btn btn-primary" >
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
               
            </div>
        </div>
        <script>
            var check = <?php echo $Pet->gender?>;
            if(check == 1){
                $('#inline-radio').checked ="checked";
            }else{
                $('#inline-radio').checked =" ";
            }
        </script>
    </body>
</html>