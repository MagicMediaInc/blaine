<?php
/*
Template Name: Free Style Page
*/
get_header(); ?>

<div id="main-content" class="main-content">

	<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</div><!-- #post-<?php the_ID(); ?> -->
	<?php endwhile; ?>
	<?php if( 0 ) : ?>
	<div class="container inner-sm">
		<div class="product-items">
			<div class="grid-view row">
				<?php for( $i = 0; $i <= 9; $i++ ) : ?>
					<div class="col-md-3">
						<div class="product-item-wrap">
							<div class="product-item">
								<div class="product-labels">
									<div class="product-label label-sale"><span>Sale</span></div>
									<div class="product-label label-bestseller"><span>Bestseller</span></div>
								</div>
								<div class="product-image">
									<img src="http://localhost/~ibrahim/mediacenter/wp-content/uploads/2011/01/1.jpg" alt="Product 02">
								</div>
								<div class="product-body">
									<h4 class="product-title"><a href="#">CPU Core i5-4670K 3.4GHz BOX B82-12-122-41</a></h4>
									<div class="product-brand">Intel</div>
								</div>
								<div class="product-price-container prices">
									<del><span class="amount">$1399.00</span></del>
									<ins><span class="amount">$1199.00</span></ins>
								</div>
								<div class="hover-area">
									<div class="add-cart-button"><a class="le-button add_to_cart_button  product_type_simple" data-product_sku="" data-product_id="826" rel="nofollow" href="/~ibrahim/mediacenter/?post_type=product&amp;add-to-cart=826">Add to cart</a></div>
									<div class="wish-compare">
										<div class="button-holder">
										<div class="yith-wcwl-add-to-wishlist"><div class="yith-wcwl-add-button show"><a class="add_to_wishlist btn-add-to-wishlist" data-product-type="simple" data-product-id="826" href="http://localhost/~ibrahim/mediacenter/wp-content/plugins/yith-woocommerce-wishlist/yith-wcwl-ajax.php?action=add_to_wishlist&amp;add_to_wishlist=826"><i class="fa fa-heart"></i>Add to Wishlist</a></div><div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide"><a class="btn-add-to-wishlist" href="http://localhost/~ibrahim/mediacenter/?page_id=1287"><i class="fa fa-check"></i> Product Added</a></div><div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide"><a class="btn-add-to-wishlist" href="http://localhost/~ibrahim/mediacenter/?page_id=1287"><i class="fa-th-list fa"></i> Browse Wishlist</a></div><div class="yith-wcwl-wishlistaddresponse"></div></div>	</div>
									
										<div class="button-holder">
										<a data-product_id="826" class="btn-add-to-compare compare" href="/~ibrahim/mediacenter/?post_type=product&amp;action=yith-woocompare-add-product&amp;id=826&amp;_wpnonce=9e8908476e"><i class="fa fa-exchange"></i> Compare</a>    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
</div><!-- #main-content -->

<?php 
get_footer();