<html>
    <head>
        <?php $this->load->view('pages/admin/layout/head');?>
    </head>
    <body>
    <?php 
            if ($role) {
                foreach ($role as $r) {  
                    $R = $r->role_id;
                }
            }                             
        ?>       
        <aside id="left-panel" class="left-panel">
            <?php
            if($R == 0){
                $this->load->view('pages/admin/layout/left');
            }else{
                $this->load->view('pages/admin/layout/leftEmployee');
            }
            ?>
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
                                        <li><a href="<?php echo base_url('admin/product')?>">Pets</a></li>
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
                        <strong>Update Pet</strong> 
                    </div>
                    <div class="card-body card-block">
                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <!-- id -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID</label></div>
                                <div class="col-12 col-md-9"><span style="color:red !important; font-style: italic;"><?php echo form_error('id')?></span><input type="text" id="text" name="id" placeholder="Text" value="<?php echo $Food->id?>" class="form-control"></div>
                            </div>

                           <!-- name -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text" name="name" placeholder="Text" value="<?php echo $Food->name?>" class="form-control" required></div>
                            </div>
                            
                            <!-- price -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="price" name="price" placeholder="" value="<?php echo $Food->price?>" class="form-control" required></div>
                            </div>
                             <!-- quantity -->
                             <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantity</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text" name="quantity" placeholder="Text" value="<?php echo $Food->quantity?>" class="form-control" required></div>
                            </div>
                            <!-- special id -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Giống loại</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="species_id" id="selectLg" class="form-control-lg form-control" value="<?php echo $Food->species_id?>">
                                        <option value="0">Cho</option>
                                        <option value="1">Meo</option>
                                        <option value="2">Chim</option>
                                    </select>
                                </div>
                            </div>                                            
                            
                           <!-- image -->
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">image</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="image" value="<?php echo $Food->image?>" name="image" class="form-control-file" ></div>
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
       
    </body>
</html>