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
            <?php $this->load->view('pages/admin/message',$this->data);?>
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
                                        <li class = "active" style="cursor: pointer;">Employee</li>                
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6"> -->               
           
           
                <div class="card" style="    position: absolute;
                                            margin-top: 105px;
                                            margin-left: 30px;
                                            width: 75%;" >
                    <div class="card-header">                   
                        <strong class="card-title">Employee Table</strong>
                        
                    </div>
                <div class="table-stats order-table ov-h">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th class="serial">STT</th>
                            <th class="avatar">Avatar</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Role</th>                              
                            <th>Acction</th>                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
							if ($employee) {
                                $count = 1;
								foreach ($employee as $p) {                                
						?>
                        <tr>
                            <td class="serial"><?php echo $count++ ?></td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="../assets/img/employee/<?php echo $p->image?>" alt=""></a>
                                </div>
                            </td>
                            <td> <?php echo $p->id?> </td>
                            <td> <span class="age"><?php echo $p->name?></span> </td>
                            <td> <span class="gender"><?php if($p->gender==1){
                                echo "Male";
                            }else{
                                echo "Female";
                            }?></span></td>
                            <td><span class="count"><?php echo $p->adress?></span></td>
                            <td> <span class="gender"><?php if($p->role_id == 0){
                                echo "Admin";
                            }else{
                                echo "Employee";
                            }?></span></td>
                            
                            <td>
                                <a href="<?php echo base_url('admin/employee/edit/'.$p->id)?> "><span class="badge badge-complete hvr-grow">Edit</span></a>
                                <a class="confirm" href="<?php echo base_url('admin/employee/delete/'.$p->id)?>" ><span class="badge badge-pending hvr-grow">Delete</span></a>
                            </td>
                        </tr>
                        
                        <?php
                                }
                            }
                        ?>                                          
                    </tbody>
                    </table>
                     </div> <!-- /.table-stats -->
                 <!-- </div> -->
            </div>
        </div>
       
    </body>
</html>



