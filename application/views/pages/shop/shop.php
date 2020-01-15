<html>
    <head>
		<?php $this->load->view('pages/layout/head');?>
    </head>
    <body id="category">
        <!-- header -->
        <header class="header_area sticky-header">
            <?php $this->load->view('pages/shop/header');?>
        </header>	
        <!-- endheader -->
        
        <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Fashon Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<!-- left -->
				<?php $this->load->view('pages/shop/layout/left');?>
			<!-- end left -->
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php
							if($pets){
								foreach($pets as $p){						
						?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-custom hvr-grow" src="./assets/img/pet/<?php echo $p->image;?>" alt="">
								<div class="product-details">
									<h6><?php echo $p->description?></h6>
									<div class="price">
										<h6><?php echo $p->price?>VND</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="<?php echo base_url('shop/pet_detail/'.$p->id)?>" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php
								}
							}
						?>
						<!-- end singer -->
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<?php
							if($petsale){
								foreach($petsale as $ps){						
						?>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<a href="<?php echo base_url('shop/pet_detail/'.$ps->id)?>" class="social-info">
							<div class="single-related-product d-flex">
								<img class="img-fluid_custom" src="./assets/img/pet/<?php echo $ps->image?>" alt="">
								<div class="desc">
									<a href="#" class="title"><?php echo $ps->description?></a>
									<div class="price">
										<h6><?php echo $ps->price?></h6>
										<h6 class="l-through"><?php echo $ps->price*2?></h6>
									</div>
								</div>
							</div>
						</a>
						</div>
						<?php
								}
							}
						?>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						
							<img class="img-fluid d-block mx-auto" src="<?php echo base_url().'assets/img/category/c5.jpg';?>" alt="">
						
					</div>
				</div>
			</div>
		</div>
	</section>

        <!-- footer -->
        <footer class="footer-area section_gap">
            <?php $this->load->view('pages/layout/footer');?>
        </footer>	
    </body>
</html>