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
                                        <li class = "active" style="cursor: pointer;">Pets</li>                
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
                        <strong class="card-title">Pets Table</strong>
                        <a href="<?php echo base_url('admin/product/create');?>">
                        <button style=" float: right;
                                        border-radius: 5px;
                                        background-color: #42428a;
                                        text-transform: uppercase;
                                        color: white;
                                        padding: 5px 15px;
                                        font-weight: normal;
                                        font-size: 14px;
                                        cursor:pointer;"
                                        class="hvr-grow">
                        Insert</button>
                        </a>
                    </div>
                <div class="table-stats order-table ov-h" >
                <table class="table table-striped "id="dataTables-example">
                    <thead>
                        <tr>
                            <th class="serial">ID</th>
                            <th class="avatar">Customer ID</th>
                            <th>Employee ID</th>
                            <th>Pet Id</th>
                            <th>Total Price</th>
                            <th>Create Time</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
							if ($rp) {
                                $count = 1;
								foreach ($rp as $p) {                                
						?>
                        <tr>
                            <td class="serial"><?php echo $p->id ?></td>
                            
                            <td>  <span class="age"><?php echo $p->cus_name?></span></td>
                            
                            <td> <?php echo $p->em_name?> </td>
                            <td>  <span class="age"><?php echo $p->pet_id?></span></td>
                            <td> <span class="gender"><?php echo $p->total_price?></span> </td>
                            <td><span class="count"><?php echo $p->created_time?></span></td>
                          
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



