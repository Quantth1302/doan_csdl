<html>
    <head>
        <?php $this->load->view('pages/admin/layout/head')?>
    </head>
    <body>
        <aside id="left-panel" class="left-panel">
            <?php $this->load->view('pages/admin/layout/left')?>
        </aside>
        
        <div id="right-panel" class="right-panel">
            <header id="header" class="header">
                <?php $this->load->view('pages/admin/layout/header');?>
            </header>
            <div class="container" style="padding: 30px 30px 0 30px;">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">$<span class="count">23569</span></div>
                                            <div class="stat-heading">Revenue</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">3435</span></div>
                                            <div class="stat-heading">Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">349</span></div>
                                            <div class="stat-heading">Templates</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">2986</span></div>
                                            <div class="stat-heading">Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="container" style=" padding: 0 30px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Traffic </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card-body">
                                            <!-- <canvas id="TrafficChart"></canvas>   -->
                                            <div id="traffic-chart" class="traffic-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="50" x2="50" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="161.53125" x2="161.53125" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="273.0625" x2="273.0625" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="384.59375" x2="384.59375" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="496.125" x2="496.125" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line x1="607.65625" x2="607.65625" y1="15" y2="300" class="ct-grid ct-horizontal"></line><line y1="300" y2="300" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line><line y1="259.2857142857143" y2="259.2857142857143" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line><line y1="218.57142857142856" y2="218.57142857142856" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line><line y1="177.85714285714286" y2="177.85714285714286" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line><line y1="137.14285714285714" y2="137.14285714285714" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line><line y1="96.42857142857142" y2="96.42857142857142" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line><line y1="55.71428571428572" y2="55.71428571428572" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="607.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 50 300 L 50 300 C 87.177 251.143 124.354 200.89 161.531 153.429 C 198.708 105.967 235.885 15 273.063 15 C 310.24 15 347.417 83.901 384.594 96.429 C 421.771 108.956 458.948 106.526 496.125 120.857 C 533.302 135.189 570.479 240.286 607.656 300 L 607.656 300 Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M 50 300 L 50 300 C 87.177 210.429 124.354 31.286 161.531 31.286 C 198.708 31.286 235.885 177.857 273.063 177.857 C 310.24 177.857 347.417 137.143 384.594 137.143 C 421.771 137.143 458.948 157.603 496.125 177.857 C 533.302 198.111 570.479 257.657 607.656 297.557 L 607.656 300 Z" class="ct-area"></path></g><g class="ct-series ct-series-c"><path d="M 50 300 L 50 300 C 87.177 259.286 124.354 215.663 161.531 177.857 C 198.708 140.051 235.885 72 273.063 72 C 310.24 72 347.417 177.857 384.594 177.857 C 421.771 177.857 458.948 55.714 496.125 55.714 C 533.302 55.714 570.479 191.429 607.656 259.286 L 607.656 300 Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="305" width="111.53125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 112px; height: 20px;">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="161.53125" y="305" width="111.53125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 112px; height: 20px;">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="273.0625" y="305" width="111.53125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 112px; height: 20px;">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="384.59375" y="305" width="111.53125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 112px; height: 20px;">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="496.125" y="305" width="111.53125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 112px; height: 20px;">May</span></foreignObject><foreignObject style="overflow: visible;" x="607.65625" y="305" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">Jun</span></foreignObject><foreignObject style="overflow: visible;" y="259.2857142857143" x="10" height="40.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="218.57142857142856" x="10" height="40.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">5000</span></foreignObject><foreignObject style="overflow: visible;" y="177.85714285714283" x="10" height="40.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">10000</span></foreignObject><foreignObject style="overflow: visible;" y="137.14285714285714" x="10" height="40.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">15000</span></foreignObject><foreignObject style="overflow: visible;" y="96.42857142857142" x="10" height="40.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">20000</span></foreignObject><foreignObject style="overflow: visible;" y="55.71428571428572" x="10" height="40.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">25000</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="40.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 41px; width: 30px;">30000</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">35000</span></foreignObject></g></svg></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card-body">
                                            <div class="progress-box progress-1">
                                                <h4 class="por-title">Visits</h4>
                                                <div class="por-txt">96,930 Users (40%)</div>
                                                <div class="progress mb-2" style="height: 5px;">
                                                    <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress-box progress-2">
                                                <h4 class="por-title">Bounce Rate</h4>
                                                <div class="por-txt">3,220 Users (24%)</div>
                                                <div class="progress mb-2" style="height: 5px;">
                                                    <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress-box progress-2">
                                                <h4 class="por-title">Unique Visitors</h4>
                                                <div class="por-txt">29,658 Users (60%)</div>
                                                <div class="progress mb-2" style="height: 5px;">
                                                    <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress-box progress-2">
                                                <h4 class="por-title">Targeted  Visitors</h4>
                                                <div class="por-txt">99,658 Users (90%)</div>
                                                <div class="progress mb-2" style="height: 5px;">
                                                    <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div> <!-- /.card-body -->
                                    </div>
                                </div> <!-- /.row -->
                                <div class="card-body"></div>
                            </div>
                        </div><!-- /# column -->
                    </div>
                </div>
        </div><!-- .content -->


        <div class="clearfix"></div>
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
    </body>
</html>