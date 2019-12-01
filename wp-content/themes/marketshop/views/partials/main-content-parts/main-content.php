<div id="container">
	<div class="container">
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-xs-12">
				<div class="row">
					<div class="col-sm-8">
						<?php echo View::render('partials/main-content-parts/slide-show');?>
					</div>
					<div class="col-sm-4 pull-right flip">
						<?php echo View::render('partials/main-content-parts/market-shop-banner');?>
					</div>
				</div>


				<!-- پرفروش ها محصولات Start-->
					<?php echo View::render('partials/main-content-parts/top-sale-product');?>
				<!-- پرفروش ها محصولات end-->

				<!-- Banner Start-->
					<?php echo View::render('partials/main-content-parts/middle-banner');?>
				<!-- Banner End-->

				<!-- دسته ها محصولات Slider Start-->
					<?php echo View::render('partials/main-content-parts/categories-slider');?>
				<!-- دسته ها محصولات Slider End-->

				<!-- دسته ها محصولات Slider Start -->
				<?php echo View::render('partials/main-content-parts/product-slider');?>
				<!-- دسته ها محصولات Slider End -->

				<!-- Banner Start -->
				<?php echo View::render('partials/main-content-parts/middle-marketshop-banner');?>
				<!-- Banner End -->

				<!-- برند Logo Carousel Start-->
				<?php echo View::render('partials/main-content-parts/brand-logo-carousel');?>
				<!-- برند Logo Carousel End -->
			</div>
			<!--Middle Part End-->
		</div>
	</div>
</div>


<!-- Feature Box Start-->
<?php echo View::render('partials/main-content-parts/feature-box');?>
<!-- Feature Box End-->