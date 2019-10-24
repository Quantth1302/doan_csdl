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
                <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Avatar</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Age</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="serial">1.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assets/')?>img/avatar/1.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5469 </td>
                            <td>  <span class="name">Louis Stanley</span> </td>
                            <td> <span class="product">iMax</span> </td>
                            <td><span class="count">231</span></td>
                            <td>
                                <span class="badge badge-complete hvr-grow">Edit</span>
                                <span class="badge badge-pending hvr-grow">Delete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">2.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assets/')?>img/avatar/2.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5468 </td>
                            <td>  <span class="name">Gregory Dixon</span> </td>
                            <td> <span class="product">iPad</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete hvr-grow">Edit</span>
                                <span class="badge badge-pending hvr-grow">Delete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">3.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assets/')?>img/avatar/3.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5467 </td>
                            <td>  <span class="name">Catherine Dixon</span> </td>
                            <td> <span class="product">SSD</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete hvr-grow">Edit</span>
                                <span class="badge badge-pending hvr-grow">Delete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">4.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="<?php echo base_url('assets/')?>img/avatar/4.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5466 </td>
                            <td>  <span class="name">Mary Silva</span> </td>
                            <td> <span class="product">Magic Mouse</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete hvr-grow">Edit</span>
                                <span class="badge badge-pending hvr-grow">Delete</span>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                     </div> <!-- /.table-stats -->
                 <!-- </div> -->
            </div>
            <!-- end bread -->

            <!-- table -->
           
        </div>
    </body>
</html>



