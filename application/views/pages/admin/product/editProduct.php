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
                        <strong>Update Pet</strong> 
                    </div>
                    <div class="card-body card-block">
                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <!-- id -->
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                <div class="col-12 col-md-9"><span style="color:red !important; font-style: italic;"><?php echo form_error('id')?></span><input type="text" id="text" name="id" placeholder="Text" value="<?php echo $Pet->id?>"class="form-control"></div>
                            </div>

                           <!-- age -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Age</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text" name="age" placeholder="Text" class="form-control" value="<?php echo $Pet->age?>"></div>
                            </div>

                            <!-- description -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9"><textarea name="description" id="textarea-input"  rows="9"  class="form-control" ><?php echo $Pet->description?></textarea></div>
                            </div>
                            <!-- price -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="price" value="<?php echo $Pet->price?>" name="price" placeholder="" class="form-control"></div>
                            </div>
                            <!-- special id -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Giống loại</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="species_id" id="selectLg" class="form-control-lg form-control" value="<?php echo $Pet->species_id?>">
                                        <option value="0">Cho</option>
                                        <option value="1">Meo</option>
                                        <option value="2">Chim</option>
                                    </select>
                                </div>
                            </div>
                        <!-- gender -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio" name="gender" value="1" class="form-check-input" checked=<?php if ($Pet->gender==1) echo "checked"?>>Male
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input  style="margin-left: 10px;" type="radio" id="inline-radio" name="gender" value="0" class="form-check-input" checked=<?php if ($Pet->gender==0) echo "checked"?>>Female
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- sale id -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Sale id</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="password-input" value="<?php echo $Pet->sale_id?>" name="sale_id" placeholder="" class="form-control"></div>
                            </div>
                           
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">image</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="image" value="<?php echo $Pet->image?>" name="image" class="form-control-file"></div>
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
            var check = $Pet->gender;
            if(check == 1){
                $('#inline-radio').checked ="checked";
            }else{
                $('#inline-radio').checked =" ";
            }
        </script>
    </body>
</html>