<?php
 $servername="jhdjjtqo9w5bzq2t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
 $dBUsername="db361uh5fgdhosa8";
 $dBPassword="c17zbecid7wripme";
 $dBName="uozxi82sks708ppq";
   $conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
   $totalamount = $_GET['totalamount'];
   $authtoken = $_GET['auth'];
   $username = $_GET['username'];
   $total = $_GET['totalamount'];
  
   function generateSignature($data, $passPhrase = null) {
    // Create parameter string
    $pfOutput = '';
    foreach( $data as $key => $val ) {
        if(!empty($val)) {
            $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
        }
    }
    // Remove last ampersand
    $getString = substr( $pfOutput, 0, -1 );
    if( $passPhrase !== null ) {
        $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
    }
    return md5( $getString );
}
?>
<?php
$cartTotal = 10.00;
$data = array(
    'merchant_id' => '10000100',
    'merchant_key' => '46f0cd694581a',
    'return_url' => 'https://canibu.herokuapp.com/Shop.php',
    'cancel_url' => 'https://canibu.herokuapp.com/F1.php',
    'notify_url' => 'https://canibuy.co.za/Orderget.php',
    'name_first' => 'Test2',
    'name_last'  => 'Last Name',
    'email_address'=> 'test@test.com',
    'm_payment_id' => '1234', 
    'amount' => '456',
    'item_name' => 'Order#123',
);
$signature = generateSignature($data);
$data['signature'] = $signature;
?>
<html class="ie ie8" lang="en-US">
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-203117545-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-203117545-1');
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Canibu is a website application that is powered by the South African police service (SAPS) and the Technology innovation agency (TIA) for the purpose of disposing cannabis.">
    <meta name="keywords" content="Canibu, canibu, canibu.co.za, cannabis disposal agency, cannabis, disposal, powered by SAPS, powered by TIA">
    <meta name="author" content="Kahrent Technology Africa (Pty) Ltd">
<title>Canibu - Delivery</title>
<link rel="stylesheet" 
href="c7c58cca0fc9c8acb3530bf8cbf53297.css" 
data-minify="1" />
<link rel="stylesheet" 
href="plugIcons.css" />
<link rel="stylesheet" 
href="deliveryd.css" />
<style> 
input[type=submit]{
  float: right;
  margin-top: 20px;
}
</style>
 <style id='rs-plugin-settings-inline-css' type='text/css'>.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}</style>
 <script type='text/javascript' 
	src='jquery-1.12.4-wp.js'>
</script> 
<link rel="shortcut icon" href="https://res.cloudinary.com/ddjrcafre/image/upload/c_scale,w_100/v1621676015/1200px-SAPS_badge.svg_hiit7p.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://res.cloudinary.com/ddjrcafre/image/upload/c_scale,w_100/v1621676015/1200px-SAPS_badge.svg_hiit7p.png">
	
	<style>
	.basel-promo-popup{max-width:900px}.site-logo{width:20%}.site-logo img{max-width:196px;max-height:95px}.widgetarea-head,.main-nav{width:40%}.right-column{width:40%}.basel-woocommerce-layered-nav .basel-scroll{max-height:181px}.header-banner{height:40px}.header-banner-display .website-wrapper{margin-top:40px}.topbar-menu ul>li{line-height:42px}.topbar-wrapp,.topbar-content:before{height:42px}.sticky-header-prepared.basel-top-bar-on .header-shop,.sticky-header-prepared.basel-top-bar-on .header-split,.enable-sticky-header.basel-header-overlap.basel-top-bar-on .main-header{top:42px}.site-logo img{max-height:95px}.act-scroll .site-logo img,.header-clone .site-logo img{max-height:60px}.header-clone .main-nav .menu>li>a{height:60px;line-height:60px}.sticky-header-real:not(.global-header-menu-top) .switch-logo-enable .basel-logo{height:95px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable .basel-logo{height:60px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable{transform:translateY(-60px);-webkit-transform:translateY(-60px)}.main-nav .menu>li>a{height:95px;line-height:95px}.act-scroll .main-nav .menu>li>a{height:60px;line-height:60px}.header-shop .right-column .header-links{height:95px;line-height:95px}.header-shop.act-scroll .right-column .header-links{height:60px;line-height:60px}.basel-header-overlap .title-size-default,.basel-header-overlap .title-size-small,.basel-header-overlap .title-shop.without-title.title-size-default,.basel-header-overlap .title-shop.without-title.title-size-small{padding-top:135px}.basel-header-overlap .title-shop.without-title.title-size-large,.basel-header-overlap .title-size-large{padding-top:215px}@media (max-width:991px){.header-banner{height:40px}.header-banner-display .website-wrapper{margin-top:40px}.topbar-menu ul>li{line-height:38px}.topbar-wrapp,.topbar-content:before{height:38px}.sticky-header-prepared.basel-top-bar-on .header-shop,.sticky-header-prepared.basel-top-bar-on .header-split,.enable-sticky-header.basel-header-overlap.basel-top-bar-on .main-header{top:38px}.main-header .wrapp-header{min-height:60px}.site-logo img{max-height:60px}.act-scroll .site-logo img,.header-clone .site-logo img{max-height:60px}.main-header .switch-logo-enable .basel-logo{height:60px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable .basel-logo{height:60px}.sticky-header-real:not(.global-header-menu-top) .act-scroll .switch-logo-enable{transform:translateY(-60px);-webkit-transform:translateY(-60px)}.basel-header-overlap .title-size-default,.basel-header-overlap .title-size-small,.basel-header-overlap .title-shop.without-title.title-size-default,.basel-header-overlap .title-shop.without-title.title-size-small{padding-top:80px}.basel-header-overlap .title-shop.without-title.title-size-large,.basel-header-overlap .title-size-large{padding-top:120px}}.product-category-thumbnail img,.category-grid-item .category-link{width:100%}.product-grid-item .product-element-top>a img,.basel-hover-alt .hover-img img,.product-list-image .hover-img img{width:100%}#product-28083 .product-images .image-action-zoom figure img[src$=".png"],#product-28083 .product-images .image-action-zoom .owl-item,#product-28084 .product-images .image-action-zoom figure img[src$=".png"],#product-28084 .product-images .image-action-zoom .owl-item,#product-28085 .product-images .image-action-zoom figure img[src$=".png"],#product-28085 .product-images .image-action-zoom .owl-item,#product-28078 .product-images .image-action-zoom figure img[src$=".png"],#product-28078 .product-images .image-action-zoom .owl-item{background:#fff}.basel-product-categories>li.cat-item-109{display:none}.main-header form.has-categories-dropdown .search-by-category ul .children{display:none}.col-five>.vc_col-sm-2{width:20%}iframe[name='google_conversion_frame']{height:0!important;width:0!important;line-height:0!important;font-size:0!important;margin-top:-13px;float:left}.dropdown-scroll>.sub-menu-dropdown{height:540px;overflow:hidden}.header-spacing+.header-menu-top{margin-top:-40px}.woocommerce-ordering.with-list .selected-order{font-weight:700}.header-categories .main-nav .menu li.menu-item-design-full-width>.sub-menu-dropdown{margin-top:-78px}.hide-pag .owl-pagination,.hide-pag .owl-buttons{display:none}.color-scheme-light .testimonial .testimonial-content footer>span{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme:hover .owl-controls.clickable .owl-buttons div.disabled{color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-buttons div{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme .owl-controls.clickable .owl-buttons div:hover{color:rgba(255,255,255,1)}.color-scheme-light .owl-theme .owl-controls .owl-page span{background-color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-page.active span,.color-scheme-light .owl-theme .owl-controls.clickable .owl-page:hover span{background-color:#fff}.basel-buttons .product-compare-button>a,.single-product-content .entry-summary .button.compare,.basel-hover-base .basel-add-btn>a,.basel-hover-base .product-compare-button a{text-transform:none}.rtl .has-border,.rtl .has-border>.vc_column-inner{border:none!important}.related-and-upsells .product-grid-item .hover-img img{width:100%}.hidden-nav-button{display:none!important}.dropdown-scroll .wpb_single_image{border:2px solid #f7f7f7}.page-id-25728 .dropdown-scroll .wpb_single_image,.page-id-23954 .dropdown-scroll .wpb_single_image{border:2px solid rgba(255,255,255,.1)}.widget_product_categories .cat-item-109 .cat-item:nth-child(even){display:none}@media (max-width:1024px) and (min-width:991px){.header-categories .categories-menu-dropdown .sub-menu-dropdown{width:680px}}@media (max-width:991px){.sticky-footer-on .footer-container{visibility:visible}}.menu-item-19907>.sub-menu-dropdown{background-size:contain}.woocommerce-checkout-review-order-table td{width:50%}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout){border-color:#333;background-color:#333}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout):hover{opacity:.7}.blazy-image-loading{position:relative}.blazy-image-loading:after{position:absolute;top:50%;margin-top:-15px;margin-left:-15px;opacity:.3;left:50%;content:" ";width:35px;height:35px;display:inline-block;vertical-align:middle;border:1px solid #000;border-radius:50%;border-left-color:transparent!important;border-right-color:transparent!important;-webkit-animation:load-spin 450ms infinite linear;animation:load-spin 450ms infinite linear}.color-scheme-light .color-scheme-dark .product-grid-item .product-title>a{color:#252222}.woocommerce-password-strength:empty{margin:0;padding:0}.basel-pagination:before{content:'';display:block;clear:both}.basel-hover-button .basel-buttons .product-compare-button>a:before,.basel-hover-button .basel-buttons .quick-view>a:before,.basel-hover-info .basel-buttons .product-compare-button>a:before,.basel-hover-info .basel-buttons .quick-view>a:before{border-color:#FFF!important}.single-product .site-content>.woocommerce-message{display:none}.basel-entry-meta li.modified-date{display:none!important}.owl-carousel .blog-design-masonry.has-post-thumbnail .post-date{left:10px}.instagram-widget.instagram-slider .instagram-pics li{-webkit-flex-basis:100%;-ms-flex-basis:100%;flex-basis:100%;max-width:100%}.slick-slide.active-thumb{transition:none!important}.basel-font-weight-600{font-weight:600}.basel-wishlist-share>span{margin-top:5px}.browser-Firefox .wrapp-header{height:0}.global-header-vertical .main-page-wrapper{margin-top:0;padding-top:0}@media (min-width:992px){.buy-basel{position:fixed;bottom:40px;left:40px;background-color:#000;color:#fff;padding:10px 20px;border-radius:30px;text-transform:uppercase;transition:all .3s ease;z-index:1000}.buy-basel img{margin-right:10px;margin-bottom:1px}.buy-basel:hover,.buy-basel:focus{background-color:#97ca58;color:#fff;text-decoration:none;border-color:#000}.rtl .buy-basel{left:auto;right:40px}.rtl .buy-basel img{margin-right:0;margin-left:10px}}@media (min-width:768px) and (max-width:991px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.shop-loop-head{width:100%}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}}@media (min-width:481px) and (max-width:767px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}@media (max-width:480px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}
	</style>
	<link rel="stylesheet" href="cart.css" />
	<noscript>
	<style>
	.woocommerce-product-gallery{opacity:1!important}
	</style>
	</noscript>
	<style type="text/css">
	.recentcomments a{display:inline!important;padding:0!important;margin:0!important}</style><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/><meta name="generator" content="Powered by Slider Revolution 6.1.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." /><style data-type="basel-dynamic-css">
		.page-title-default{background-color:black;background-size:cover}
		.topbar-wrapp{background-color:midnightblue}
		.main-header{border-color:#f5f5f5;border-style:solid;border-bottom-width:2pxpx}
		.footer-container{background-color:black}body,p,	
		.widget_nav_mega_menu .menu>li>a,.mega-navigation .menu>li>a,.basel-navigation .menu>li.menu-item-design-full-width .sub-sub-menu li a,.basel-navigation .menu>li.menu-item-design-sized .sub-sub-menu li a,.basel-navigation .menu>li.menu-item-design-default .sub-menu li a,.font-default{font-family:Karla,Arial,Helvetica,sans-serif}h1 a,h2 a,h3 a,h4 a,h5 a,h6 a,h1,h2,h3,h4,h5,h6,.title,table th,.wc-tabs li a,.masonry-filter li a,.woocommerce .cart-empty,.basel-navigation .menu>li.menu-item-design-full-width .sub-menu>li>a,.basel-navigation .menu>li.menu-item-design-sized .sub-menu>li>a,.mega-menu-list>li>a,fieldset legend,table th,.basel-empty-compare,.compare-field,.compare-value:before,.color-scheme-dark .info-box-inner h1,.color-scheme-dark .info-box-inner h2,.color-scheme-dark .info-box-inner h3,.color-scheme-dark .info-box-inner h4,.color-scheme-dark .info-box-inner h5,.color-scheme-dark .info-box-inner h6{font-family:Karla,Arial,Helvetica,sans-serif}.product-title a,.post-slide .entry-title a,.category-grid-item .hover-mask h3,.basel-search-full-screen .basel-search-inner input[type="text"],.blog-post-loop .entry-title,.post-title-large-image .entry-title,.single-product-content .entry-title{font-family:Lora,Arial,Helvetica,sans-serif;font-weight:400}.title-alt,.subtitle,.font-alt,.basel-entry-meta{font-family:Lato,Arial,Helvetica,sans-serif;font-weight:400;font-style:italic}.widgettitle,.widget-title{font-family:Karla,Arial,Helvetica,sans-serif;font-weight:700;color:#0a0a0a}.main-nav .menu>li>a{font-family:Karla,Arial,Helvetica,sans-serif}.color-primary,.mobile-nav ul li.current-menu-item>a,.main-nav .menu>li.current-menu-item>a,.main-nav .menu>li.onepage-link.current-menu-item>a,.main-nav .menu>li>a:hover,.main-nav .menu>li>a:focus,.basel-navigation .menu>li.menu-item-design-default ul li:hover>a,.basel-navigation .menu>li.menu-item-design-full-width .sub-menu li a:hover,.basel-navigation .menu>li.menu-item-design-sized .sub-menu li a:hover,.basel-product-categories.responsive-cateogires li.current-cat>a,.basel-product-categories.responsive-cateogires li.current-cat-parent>a,.basel-product-categories.responsive-cateogires li.current-cat-ancestor>a,.basel-my-account-links a:hover:before,.basel-my-account-links a:focus:before,.mega-menu-list>li>a:hover,.mega-menu-list .sub-sub-menu li a:hover,a[href^=tel],.topbar-menu ul>li>.sub-menu-dropdown li>a:hover,.btn.btn-color-primary.btn-style-bordered,.button.btn-color-primary.btn-style-bordered,button.btn-color-primary.btn-style-bordered,.added_to_cart.btn-color-primary.btn-style-bordered,input[type=submit].btn-color-primary.btn-style-bordered,a.login-to-prices-msg,a.login-to-prices-msg:hover,.basel-dark .single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:before,.basel-dark .single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:before,.basel-dark .read-more-section .btn-read-more,.basel-dark .products-footer .basel-blog-load-more,.basel-dark .products-footer .basel-products-load-more,.basel-dark .products-footer .basel-portfolio-load-more,.basel-dark .blog-footer .basel-blog-load-more,.basel-dark .blog-footer .basel-products-load-more,.basel-dark .blog-footer .basel-portfolio-load-more,.basel-dark .portfolio-footer .basel-blog-load-more,.basel-dark .portfolio-footer .basel-products-load-more,.basel-dark .portfolio-footer .basel-portfolio-load-more,.basel-dark .color-primary,.basel-hover-link .swap-elements .btn-add a,.basel-hover-link .swap-elements .btn-add a:hover,.basel-hover-link .swap-elements .btn-add a:focus,.blog-post-loop .entry-title a:hover,.blog-post-loop.sticky .entry-title:before,.post-slide .entry-title a:hover,.comments-area .reply a,.single-post-navigation a:hover,blockquote footer:before,blockquote cite,.format-quote .entry-content blockquote cite,.format-quote .entry-content blockquote cite a,.basel-entry-meta .meta-author a,.search-no-results.woocommerce .site-content:before,.search-no-results .not-found .entry-header:before,.login-form-footer .lost_password:hover,.login-form-footer .lost_password:focus,.error404 .page-title,.menu-label-new:after,.widget_shopping_cart .product_list_widget li .quantity .amount,.product_list_widget li ins .amount,.price ins>.amount,.price ins,.single-product .price,.single-product .price .amount,.popup-quick-view .price,.popup-quick-view .price .amount,.basel-products-nav .product-short .price,.basel-products-nav .product-short .price .amount,.star-rating span:before,.comment-respond .stars a:hover:after,.comment-respond .stars a.active:after,.single-product-content .comment-form .stars span a:hover,.single-product-content .comment-form .stars span a.active,.tabs-layout-accordion .basel-tab-wrapper .basel-accordion-title:hover,.tabs-layout-accordion .basel-tab-wrapper .basel-accordion-title.active,.single-product-content .woocommerce-product-details__short-description ul>li:before,.single-product-content #tab-description ul>li:before,.blog-post-loop .entry-content ul>li:before,.comments-area .comment-list li ul>li:before,.brands-list .brand-item a:hover,.footer-container .footer-widget-collapse.footer-widget-opened .widget-title:after,.sidebar-widget li a:hover,.filter-widget li a:hover,.sidebar-widget li>ul li a:hover,.filter-widget li>ul li a:hover,.basel-price-filter ul li a:hover .amount,.basel-hover-effect-4 .swap-elements>a,.basel-hover-effect-4 .swap-elements>a:hover,.product-grid-item .basel-product-cats a:hover,.product-grid-item .basel-product-brands-links a:hover,.wishlist_table tr td.product-price ins .amount,.basel-buttons .product-compare-button>a.added:before,.basel-buttons .basel-wishlist-btn>a.added:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist a:hover,.single-product-content .container .entry-summary .yith-wcwl-add-to-wishlist a:hover:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:before,.single-product-content .entry-summary .yith-wcwl-add-to-wishlist .yith-wcwl-add-button.feid-in>a:before,.basel-sticky-btn .basel-sticky-btn-wishlist a.added,.basel-sticky-btn .basel-sticky-btn-wishlist a:hover,.single-product-content .entry-summary .wishlist-btn-wrapper a:hover,.single-product-content .entry-summary .wishlist-btn-wrapper a:hover:before,.single-product-content .entry-summary .wishlist-btn-wrapper a.added:before,.vendors-list ul li a:hover,.product-list-item .product-list-buttons .basel-wishlist-btn a:hover,.product-list-item .product-list-buttons .basel-wishlist-btn a:focus,.product-list-item .product-list-buttons .product-compare-button a:hover,.product-list-item .product-list-buttons .product-compare-button a:focus,.product-list-item .product-list-buttons .basel-wishlist-btn>a.added:before,.product-list-item .product-list-buttons .product-compare-button>a.added:before,.basel-sticky-btn .basel-sticky-btn-compare a.added,.basel-sticky-btn .basel-sticky-btn-compare a:hover,.single-product-content .entry-summary .compare-btn-wrapper a:hover,.single-product-content .entry-summary .compare-btn-wrapper a:hover:before,.single-product-content .entry-summary .compare-btn-wrapper a.added:before,.single-product-content .entry-summary .basel-sizeguide-btn:hover,.single-product-content .entry-summary .basel-sizeguide-btn:hover:before,.blog-post-loop .entry-content ul li:before,.basel-menu-price .menu-price-price,.basel-menu-price.cursor-pointer:hover .menu-price-title,.comments-area #cancel-comment-reply-link:hover,.comments-area .comment-body .comment-edit-link:hover,.popup-quick-view .entry-summary .entry-title a:hover,.wpb_text_column ul:not(.social-icons)>li:before,.widget_product_categories .basel-cats-toggle:hover,.widget_product_categories .toggle-active,.widget_product_categories li.current-cat-parent>a,.widget_product_categories li.current-cat>a,.woocommerce-checkout-review-order-table tfoot .order-total td .amount,.widget_shopping_cart .product_list_widget li .remove:hover,.basel-active-filters .widget_layered_nav_filters ul li a .amount,.title-wrapper.basel-title-color-primary .title-subtitle,.widget_shopping_cart .widget_shopping_cart_content>.total .amount,.color-scheme-light .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tab.vc_active>a,.wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic .vc_tta-tab.vc_active>a{color:#179a94}.wishlist-info-widget .wishlist-count,.basel-toolbar-compare .compare-count,.basel-cart-design-2>a .basel-cart-number,.basel-cart-design-3>a .basel-cart-number,.basel-sticky-sidebar-opener:not(.sticky-toolbar):hover,.basel-sticky-sidebar-opener:not(.sticky-toolbar):focus,.btn.btn-color-primary,.button.btn-color-primary,button.btn-color-primary,.added_to_cart.btn-color-primary,input[type=submit].btn-color-primary,.btn.btn-color-primary:hover,.btn.btn-color-primary:focus,.button.btn-color-primary:hover,.button.btn-color-primary:focus,button.btn-color-primary:hover,button.btn-color-primary:focus,.added_to_cart.btn-color-primary:hover,.added_to_cart.btn-color-primary:focus,input[type=submit].btn-color-primary:hover,input[type=submit].btn-color-primary:focus,.btn.btn-color-primary.btn-style-bordered:hover,.btn.btn-color-primary.btn-style-bordered:focus,.button.btn-color-primary.btn-style-bordered:hover,.button.btn-color-primary.btn-style-bordered:focus,button.btn-color-primary.btn-style-bordered:hover,button.btn-color-primary.btn-style-bordered:focus,.added_to_cart.btn-color-primary.btn-style-bordered:hover,.added_to_cart.btn-color-primary.btn-style-bordered:focus,input[type=submit].btn-color-primary.btn-style-bordered:hover,input[type=submit].btn-color-primary.btn-style-bordered:focus,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:hover,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:focus,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:hover,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:focus,.no-results .searchform #searchsubmit,.no-results .searchform #searchsubmit:hover,.no-results .searchform #searchsubmit:focus,.comments-area .comment-respond input[type=submit],.comments-area .comment-respond input[type=submit]:hover,.comments-area .comment-respond input[type=submit]:focus,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:hover,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:focus,.woocommerce .checkout_coupon .button,.woocommerce .checkout_coupon .button:hover,.woocommerce .checkout_coupon .button:focus,.woocommerce .place-order button,.woocommerce .place-order button:hover,.woocommerce .place-order button:focus,.woocommerce-order-pay #order_review .button,.woocommerce-order-pay #order_review .button:hover,.woocommerce-order-pay #order_review .button:focus,.woocommerce input[name=track],.woocommerce input[name=track]:hover,.woocommerce input[name=track]:focus,.woocommerce input[name=save_account_details],.woocommerce input[name=save_address],.woocommerce-page input[name=save_account_details],.woocommerce-page input[name=save_address],.woocommerce input[name=save_account_details]:hover,.woocommerce input[name=save_account_details]:focus,.woocommerce input[name=save_address]:hover,.woocommerce input[name=save_address]:focus,.woocommerce-page input[name=save_account_details]:hover,.woocommerce-page input[name=save_account_details]:focus,.woocommerce-page input[name=save_address]:hover,.woocommerce-page input[name=save_address]:focus,.search-no-results .not-found .entry-content .searchform #searchsubmit,.search-no-results .not-found .entry-content .searchform #searchsubmit:hover,.search-no-results .not-found .entry-content .searchform #searchsubmit:focus,.error404 .page-content>.searchform #searchsubmit,.error404 .page-content>.searchform #searchsubmit:hover,.error404 .page-content>.searchform #searchsubmit:focus,.return-to-shop .button,.return-to-shop .button:hover,.return-to-shop .button:focus,.basel-hover-excerpt .btn-add a,.basel-hover-excerpt .btn-add a:hover,.basel-hover-excerpt .btn-add a:focus,.basel-hover-standard .btn-add>a,.basel-hover-standard .btn-add>a:hover,.basel-hover-standard .btn-add>a:focus,.basel-price-table .basel-plan-footer>a,.basel-price-table .basel-plan-footer>a:hover,.basel-price-table .basel-plan-footer>a:focus,.basel-pf-btn button,.basel-pf-btn button:hover,.basel-pf-btn button:focus,.basel-info-box.box-style-border .info-btn-wrapper a,.basel-info-box.box-style-border .info-btn-wrapper a:hover,.basel-info-box.box-style-border .info-btn-wrapper a:focus,.basel-info-box2.box-style-border .info-btn-wrapper a,.basel-info-box2.box-style-border .info-btn-wrapper a:hover,.basel-info-box2.box-style-border .info-btn-wrapper a:focus,.basel-hover-quick .woocommerce-variation-add-to-cart .button,.basel-hover-quick .woocommerce-variation-add-to-cart .button:hover,.basel-hover-quick .woocommerce-variation-add-to-cart .button:focus,.product-list-item .product-list-buttons>a,.product-list-item .product-list-buttons>a:hover,.product-list-item .product-list-buttons>a:focus,.wpb_video_wrapper .button-play,.basel-navigation .menu>li.callto-btn>a,.basel-navigation .menu>li.callto-btn>a:hover,.basel-navigation .menu>li.callto-btn>a:focus,.basel-dark .products-footer .basel-blog-load-more:hover,.basel-dark .products-footer .basel-blog-load-more:focus,.basel-dark .products-footer .basel-products-load-more:hover,.basel-dark .products-footer .basel-products-load-more:focus,.basel-dark .products-footer .basel-portfolio-load-more:hover,.basel-dark .products-footer .basel-portfolio-load-more:focus,.basel-dark .blog-footer .basel-blog-load-more:hover,.basel-dark .blog-footer .basel-blog-load-more:focus,.basel-dark .blog-footer .basel-products-load-more:hover,.basel-dark .blog-footer .basel-products-load-more:focus,.basel-dark .blog-footer .basel-portfolio-load-more:hover,.basel-dark .blog-footer .basel-portfolio-load-more:focus,.basel-dark .portfolio-footer .basel-blog-load-more:hover,.basel-dark .portfolio-footer .basel-blog-load-more:focus,.basel-dark .portfolio-footer .basel-products-load-more:hover,.basel-dark .portfolio-footer .basel-products-load-more:focus,.basel-dark .portfolio-footer .basel-portfolio-load-more:hover,.basel-dark .portfolio-footer .basel-portfolio-load-more:focus,.basel-dark .feedback-form .wpcf7-submit,.basel-dark .mc4wp-form input[type=submit],.basel-dark .single_add_to_cart_button,.basel-dark .basel-compare-col .add_to_cart_button,.basel-dark .basel-compare-col .added_to_cart,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart,.basel-dark .single-product-content .comment-form .form-submit input[type=submit],.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .register .button,.basel-dark .login .button,.basel-dark .lost_reset_password .button,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-dark .woocommerce .cart-actions .coupon .button,.basel-dark .feedback-form .wpcf7-submit:hover,.basel-dark .mc4wp-form input[type=submit]:hover,.basel-dark .single_add_to_cart_button:hover,.basel-dark .basel-compare-col .add_to_cart_button:hover,.basel-dark .basel-compare-col .added_to_cart:hover,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:hover,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .register .button:hover,.basel-dark .login .button:hover,.basel-dark .lost_reset_password .button:hover,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.basel-dark .woocommerce .cart-actions .coupon .button:hover,.basel-ext-primarybtn-dark:focus,.basel-dark .feedback-form .wpcf7-submit:focus,.basel-dark .mc4wp-form input[type=submit]:focus,.basel-dark .single_add_to_cart_button:focus,.basel-dark .basel-compare-col .add_to_cart_button:focus,.basel-dark .basel-compare-col .added_to_cart:focus,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:focus,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:focus,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .register .button:focus,.basel-dark .login .button:focus,.basel-dark .lost_reset_password .button:focus,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-dark .woocommerce .cart-actions .coupon .button:focus,.basel-stock-progress-bar .progress-bar,.widget_price_filter .ui-slider .ui-slider-handle:after,.widget_price_filter .ui-slider .ui-slider-range,.widget_tag_cloud .tagcloud a:hover,.widget_product_tag_cloud .tagcloud a:hover,div.bbp-submit-wrapper button,div.bbp-submit-wrapper button:hover,div.bbp-submit-wrapper button:focus,#bbpress-forums .bbp-search-form #bbp_search_submit,#bbpress-forums .bbp-search-form #bbp_search_submit:hover,#bbpress-forums .bbp-search-form #bbp_search_submit:focus,body .select2-container--default .select2-results__option--highlighted[aria-selected],.basel-add-img-msg:before,.product-video-button a:hover:before,.product-360-button a:hover:before,.mobile-nav ul li .up-icon,.scrollToTop:hover,.scrollToTop:focus,.basel-sticky-filter-btn:hover,.basel-sticky-filter-btn:focus,.categories-opened li a:active,.basel-price-table .basel-plan-price,.header-categories .secondary-header .mega-navigation,.widget_nav_mega_menu,.meta-post-categories,.slider-title:before,.title-wrapper.basel-title-style-simple .title:after,.menu-label-new,.product-label.onsale,.color-scheme-light .vc_tta-tabs.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tab.vc_active>a span:after,.wpb-js-composer .vc_tta.vc_general.vc_tta-style-classic .vc_tta-tab.vc_active>a span:after,.portfolio-with-bg-alt .portfolio-entry:hover .entry-header>.portfolio-info{background-color:#179a94}.btn.btn-color-primary,.button.btn-color-primary,button.btn-color-primary,.added_to_cart.btn-color-primary,input[type=submit].btn-color-primary,.btn.btn-color-primary:hover,.btn.btn-color-primary:focus,.button.btn-color-primary:hover,.button.btn-color-primary:focus,button.btn-color-primary:hover,button.btn-color-primary:focus,.added_to_cart.btn-color-primary:hover,.added_to_cart.btn-color-primary:focus,input[type=submit].btn-color-primary:hover,input[type=submit].btn-color-primary:focus,.btn.btn-color-primary.btn-style-bordered:hover,.btn.btn-color-primary.btn-style-bordered:focus,.button.btn-color-primary.btn-style-bordered:hover,.button.btn-color-primary.btn-style-bordered:focus,button.btn-color-primary.btn-style-bordered:hover,button.btn-color-primary.btn-style-bordered:focus,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:hover,.widget_shopping_cart .widget_shopping_cart_content .buttons .checkout:focus,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:hover,.basel-search-dropdown .basel-search-wrapper .basel-search-inner form button:focus,.comments-area .comment-respond input[type=submit],.comments-area .comment-respond input[type=submit]:hover,.comments-area .comment-respond input[type=submit]:focus,.sidebar-container .mc4wp-form input[type=submit],.sidebar-container .mc4wp-form input[type=submit]:hover,.sidebar-container .mc4wp-form input[type=submit]:focus,.footer-container .mc4wp-form input[type=submit],.footer-container .mc4wp-form input[type=submit]:hover,.footer-container .mc4wp-form input[type=submit]:focus,.filters-area .mc4wp-form input[type=submit],.filters-area .mc4wp-form input[type=submit]:hover,.filters-area .mc4wp-form input[type=submit]:focus,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:hover,.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout>a.button:focus,.woocommerce .checkout_coupon .button,.woocommerce .checkout_coupon .button:hover,.woocommerce .checkout_coupon .button:focus,.woocommerce .place-order button,.woocommerce .place-order button:hover,.woocommerce .place-order button:focus,.woocommerce-order-pay #order_review .button,.woocommerce-order-pay #order_review .button:hover,.woocommerce-order-pay #order_review .button:focus,.woocommerce input[name=track],.woocommerce input[name=track]:hover,.woocommerce input[name=track]:focus,.woocommerce input[name=save_account_details],.woocommerce input[name=save_address],.woocommerce-page input[name=save_account_details],.woocommerce-page input[name=save_address],.woocommerce input[name=save_account_details]:hover,.woocommerce input[name=save_account_details]:focus,.woocommerce input[name=save_address]:hover,.woocommerce input[name=save_address]:focus,.woocommerce-page input[name=save_account_details]:hover,.woocommerce-page input[name=save_account_details]:focus,.woocommerce-page input[name=save_address]:hover,.woocommerce-page input[name=save_address]:focus,.search-no-results .not-found .entry-content .searchform #searchsubmit,.search-no-results .not-found .entry-content .searchform #searchsubmit:hover,.search-no-results .not-found .entry-content .searchform #searchsubmit:focus,.error404 .page-content>.searchform #searchsubmit,.error404 .page-content>.searchform #searchsubmit:hover,.error404 .page-content>.searchform #searchsubmit:focus,.no-results .searchform #searchsubmit,.no-results .searchform #searchsubmit:hover,.no-results .searchform #searchsubmit:focus,.return-to-shop .button,.return-to-shop .button:hover,.return-to-shop .button:focus,.basel-hover-excerpt .btn-add a,.basel-hover-excerpt .btn-add a:hover,.basel-hover-excerpt .btn-add a:focus,.basel-hover-standard .btn-add>a,.basel-hover-standard .btn-add>a:hover,.basel-hover-standard .btn-add>a:focus,.basel-price-table .basel-plan-footer>a,.basel-price-table .basel-plan-footer>a:hover,.basel-price-table .basel-plan-footer>a:focus,.basel-pf-btn button,.basel-pf-btn button:hover,.basel-pf-btn button:focus,.basel-info-box.box-style-border .info-btn-wrapper a,.basel-info-box.box-style-border .info-btn-wrapper a:hover,.basel-info-box.box-style-border .info-btn-wrapper a:focus,.basel-info-box2.box-style-border .info-btn-wrapper a,.basel-info-box2.box-style-border .info-btn-wrapper a:hover,.basel-info-box2.box-style-border .info-btn-wrapper a:focus,.basel-hover-quick .woocommerce-variation-add-to-cart .button,.basel-hover-quick .woocommerce-variation-add-to-cart .button:hover,.basel-hover-quick .woocommerce-variation-add-to-cart .button:focus,.product-list-item .product-list-buttons>a,.product-list-item .product-list-buttons>a:hover,.product-list-item .product-list-buttons>a:focus,.wpb_video_wrapper .button-play,.woocommerce-store-notice__dismiss-link:hover,.woocommerce-store-notice__dismiss-link:focus,.basel-compare-table .compare-loader:after,.basel-sticky-sidebar-opener:not(.sticky-toolbar):hover,.basel-sticky-sidebar-opener:not(.sticky-toolbar):focus,.basel-dark .read-more-section .btn-read-more,.basel-dark .products-footer .basel-blog-load-more,.basel-dark .products-footer .basel-products-load-more,.basel-dark .products-footer .basel-portfolio-load-more,.basel-dark .blog-footer .basel-blog-load-more,.basel-dark .blog-footer .basel-products-load-more,.basel-dark .blog-footer .basel-portfolio-load-more,.basel-dark .portfolio-footer .basel-blog-load-more,.basel-dark .portfolio-footer .basel-products-load-more,.basel-dark .portfolio-footer .basel-portfolio-load-more,.basel-dark .products-footer .basel-blog-load-more:hover,.basel-dark .products-footer .basel-blog-load-more:focus,.basel-dark .products-footer .basel-products-load-more:hover,.basel-dark .products-footer .basel-products-load-more:focus,.basel-dark .products-footer .basel-portfolio-load-more:hover,.basel-dark .products-footer .basel-portfolio-load-more:focus,.basel-dark .blog-footer .basel-blog-load-more:hover,.basel-dark .blog-footer .basel-blog-load-more:focus,.basel-dark .blog-footer .basel-products-load-more:hover,.basel-dark .blog-footer .basel-products-load-more:focus,.basel-dark .blog-footer .basel-portfolio-load-more:hover,.basel-dark .blog-footer .basel-portfolio-load-more:focus,.basel-dark .portfolio-footer .basel-blog-load-more:hover,.basel-dark .portfolio-footer .basel-blog-load-more:focus,.basel-dark .portfolio-footer .basel-products-load-more:hover,.basel-dark .portfolio-footer .basel-products-load-more:focus,.basel-dark .portfolio-footer .basel-portfolio-load-more:hover,.basel-dark .portfolio-footer .basel-portfolio-load-more:focus,.basel-dark .products-footer .basel-blog-load-more:after,.basel-dark .products-footer .basel-products-load-more:after,.basel-dark .products-footer .basel-portfolio-load-more:after,.basel-dark .blog-footer .basel-blog-load-more:after,.basel-dark .blog-footer .basel-products-load-more:after,.basel-dark .blog-footer .basel-portfolio-load-more:after,.basel-dark .portfolio-footer .basel-blog-load-more:after,.basel-dark .portfolio-footer .basel-products-load-more:after,.basel-dark .portfolio-footer .basel-portfolio-load-more:after,.basel-dark .feedback-form .wpcf7-submit,.basel-dark .mc4wp-form input[type=submit],.basel-dark .single_add_to_cart_button,.basel-dark .basel-compare-col .add_to_cart_button,.basel-dark .basel-compare-col .added_to_cart,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart,.basel-dark .single-product-content .comment-form .form-submit input[type=submit],.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .register .button,.basel-dark .login .button,.basel-dark .lost_reset_password .button,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-dark .woocommerce .cart-actions .coupon .button,.basel-dark .feedback-form .wpcf7-submit:hover,.basel-dark .mc4wp-form input[type=submit]:hover,.basel-dark .single_add_to_cart_button:hover,.basel-dark .basel-compare-col .add_to_cart_button:hover,.basel-dark .basel-compare-col .added_to_cart:hover,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:hover,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .register .button:hover,.basel-dark .login .button:hover,.basel-dark .lost_reset_password .button:hover,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.basel-dark .woocommerce .cart-actions .coupon .button:hover,.basel-ext-primarybtn-dark:focus,.basel-dark .feedback-form .wpcf7-submit:focus,.basel-dark .mc4wp-form input[type=submit]:focus,.basel-dark .single_add_to_cart_button:focus,.basel-dark .basel-compare-col .add_to_cart_button:focus,.basel-dark .basel-compare-col .added_to_cart:focus,.basel-dark .basel-sticky-btn .basel-sticky-add-to-cart:focus,.basel-dark .single-product-content .comment-form .form-submit input[type=submit]:focus,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .register .button:focus,.basel-dark .login .button:focus,.basel-dark .lost_reset_password .button:focus,.basel-dark .wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-dark .woocommerce .cart-actions .coupon .button:focus,.cookies-buttons .cookies-accept-btn:hover,.cookies-buttons .cookies-accept-btn:focus,.blockOverlay:after,.basel-price-table:hover,.title-shop .nav-shop ul li a:after,.widget_tag_cloud .tagcloud a:hover,.widget_product_tag_cloud .tagcloud a:hover,div.bbp-submit-wrapper button,div.bbp-submit-wrapper button:hover,div.bbp-submit-wrapper button:focus,#bbpress-forums .bbp-search-form #bbp_search_submit,#bbpress-forums .bbp-search-form #bbp_search_submit:hover,#bbpress-forums .bbp-search-form #bbp_search_submit:focus,.basel-hover-link .swap-elements .btn-add a,.basel-hover-link .swap-elements .btn-add a:hover,.basel-hover-link .swap-elements .btn-add a:focus,.basel-hover-link .swap-elements .btn-add a.loading:after,.scrollToTop:hover,.scrollToTop:focus,.basel-sticky-filter-btn:hover,.basel-sticky-filter-btn:focus,blockquote{border-color:#179a94}.with-animation .info-box-icon svg path,.single-product-content .entry-summary .basel-sizeguide-btn:hover svg{stroke:#179a94}.button,button,input[type=submit],.yith-woocompare-widget a.button.compare,.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .login .button,.basel-dark .register .button,.basel-dark .widget_shopping_cart .buttons a,.basel-dark .yith-woocompare-widget a.button.compare,.basel-dark .widget_price_filter .price_slider_amount .button,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit,.basel-dark .basel-widget-layered-nav-dropdown__submit,.basel-dark .woocommerce .cart-actions input[name="update_cart"]{background-color:#ECECEC}.button,button,input[type=submit],.yith-woocompare-widget a.button.compare,.basel-dark .basel-registration-page .basel-switch-to-register,.basel-dark .login .button,.basel-dark .register .button,.basel-dark .widget_shopping_cart .buttons a,.basel-dark .yith-woocompare-widget a.button.compare,.basel-dark .widget_price_filter .price_slider_amount .button,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit,.basel-dark .basel-widget-layered-nav-dropdown__submit,.basel-dark .woocommerce .cart-actions input[name="update_cart"]{border-color:#ECECEC}.button:hover,.button:focus,button:hover,button:focus,input[type=submit]:hover,input[type=submit]:focus,.yith-woocompare-widget a.button.compare:hover,.yith-woocompare-widget a.button.compare:focus,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .login .button:hover,.basel-dark .login .button:focus,.basel-dark .register .button:hover,.basel-dark .register .button:focus,.basel-dark .widget_shopping_cart .buttons a:hover,.basel-dark .widget_shopping_cart .buttons a:focus,.basel-dark .yith-woocompare-widget a.button.compare:hover,.basel-dark .yith-woocompare-widget a.button.compare:focus,.basel-dark .widget_price_filter .price_slider_amount .button:hover,.basel-dark .widget_price_filter .price_slider_amount .button:focus,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:hover,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:focus,.basel-dark .basel-widget-layered-nav-dropdown__submit:hover,.basel-dark .basel-widget-layered-nav-dropdown__submit:focus,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:hover,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:focus{background-color:#3E3E3E}.button:hover,.button:focus,button:hover,button:focus,input[type=submit]:hover,input[type=submit]:focus,.yith-woocompare-widget a.button.compare:hover,.yith-woocompare-widget a.button.compare:focus,.basel-dark .basel-registration-page .basel-switch-to-register:hover,.basel-dark .basel-registration-page .basel-switch-to-register:focus,.basel-dark .login .button:hover,.basel-dark .login .button:focus,.basel-dark .register .button:hover,.basel-dark .register .button:focus,.basel-dark .widget_shopping_cart .buttons a:hover,.basel-dark .widget_shopping_cart .buttons a:focus,.basel-dark .yith-woocompare-widget a.button.compare:hover,.basel-dark .yith-woocompare-widget a.button.compare:focus,.basel-dark .widget_price_filter .price_slider_amount .button:hover,.basel-dark .widget_price_filter .price_slider_amount .button:focus,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:hover,.basel-dark .woocommerce-widget-layered-nav-dropdown__submit:focus,.basel-dark .basel-widget-layered-nav-dropdown__submit:hover,.basel-dark .basel-widget-layered-nav-dropdown__submit:focus,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:hover,.basel-dark .woocommerce .cart-actions input[name="update_cart"]:focus{border-color:#3E3E3E}.basel-hover-alt .btn-add>a{color:#000}.single_add_to_cart_button,.basel-sticky-btn .basel-sticky-add-to-cart,.woocommerce .cart-actions .coupon .button,.added_to_cart.btn-color-black,input[type=submit].btn-color-black,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-hover-quick .quick-shop-btn>a,table.compare-list tr.add-to-cart td a,.basel-compare-col .add_to_cart_button,.basel-compare-col .added_to_cart{background-color:#000}.single_add_to_cart_button,.basel-sticky-btn .basel-sticky-add-to-cart,.woocommerce .cart-actions .coupon .button,.added_to_cart.btn-color-black,input[type=submit].btn-color-black,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button,.basel-hover-quick .quick-shop-btn>a,table.compare-list tr.add-to-cart td a,.basel-compare-col .add_to_cart_button,.basel-compare-col .added_to_cart{border-color:#000}.basel-hover-alt .btn-add>a:hover,.basel-hover-alt .btn-add>a:focus{color:#333}.single_add_to_cart_button:hover,.single_add_to_cart_button:focus,.basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-sticky-btn .basel-sticky-add-to-cart:focus,.woocommerce .cart-actions .coupon .button:hover,.woocommerce .cart-actions .coupon .button:focus,.added_to_cart.btn-color-black:hover,.added_to_cart.btn-color-black:focus,input[type=submit].btn-color-black:hover,input[type=submit].btn-color-black:focus,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-hover-quick .quick-shop-btn>a:hover,.basel-hover-quick .quick-shop-btn>a:focus,table.compare-list tr.add-to-cart td a:hover,table.compare-list tr.add-to-cart td a:focus,.basel-compare-col .add_to_cart_button:hover,.basel-compare-col .add_to_cart_button:focus,.basel-compare-col .added_to_cart:hover,.basel-compare-col .added_to_cart:focus{background-color:#333}.single_add_to_cart_button:hover,.single_add_to_cart_button:focus,.basel-sticky-btn .basel-sticky-add-to-cart:hover,.basel-sticky-btn .basel-sticky-add-to-cart:focus,.woocommerce .cart-actions .coupon .button:hover,.woocommerce .cart-actions .coupon .button:focus,.added_to_cart.btn-color-black:hover,.added_to_cart.btn-color-black:focus,input[type=submit].btn-color-black:hover,input[type=submit].btn-color-black:focus,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:hover,.wishlist_table tr td.product-add-to-cart>.add_to_cart.button:focus,.basel-hover-quick .quick-shop-btn>a:hover,.basel-hover-quick .quick-shop-btn>a:focus,table.compare-list tr.add-to-cart td a:hover,table.compare-list tr.add-to-cart td a:focus,.basel-compare-col .add_to_cart_button:hover,.basel-compare-col .add_to_cart_button:focus,.basel-compare-col .added_to_cart:hover,.basel-compare-col .added_to_cart:focus{border-color:#333}.basel-promo-popup{background-repeat:no-repeat;background-size:cover;background-position:left center}@font-face{font-weight:400;font-style:normal;font-family:"simple-line-icons";
		src:url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.eot?v=5.1.0);src:url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.eot") format("embedded-opentype"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.woff?v=5.1.0) format("woff"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.woff2?v=5.1.0) format("woff2"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.ttf?v=5.1.0) format("truetype"),url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/Simple-Line-Icons.svg?v=5.1.0") format("svg")}@font-face{font-weight:400;font-style:normal;font-family:"basel-font";src:url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.eot?v=5.1.0);src:url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.eot") format("embedded-opentype"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.woff?v=5.1.0) format("woff"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.woff2?v=5.1.0) format("woff2"),url(https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.ttf?v=5.1.0) format("truetype"),url("https://basel-cec2.kxcdn.com/basel/wp-content/themes/basel/fonts/basel-font.svg?v=5.1.0") format("svg")}.product-category-thumbnail img,.category-grid-item .category-link{width:100%}.product-grid-item .product-element-top>a img,.basel-hover-alt .hover-img img,.product-list-image .hover-img img{width:100%}#product-28083 .product-images .image-action-zoom figure img[src$=".png"],#product-28083 .product-images .image-action-zoom .owl-item,#product-28084 .product-images .image-action-zoom figure img[src$=".png"],#product-28084 .product-images .image-action-zoom .owl-item,#product-28085 .product-images .image-action-zoom figure img[src$=".png"],#product-28085 .product-images .image-action-zoom .owl-item,#product-28078 .product-images .image-action-zoom figure img[src$=".png"],#product-28078 .product-images .image-action-zoom .owl-item{background:#fff}.basel-product-categories>li.cat-item-109{display:none}.main-header form.has-categories-dropdown .search-by-category ul .children{display:none}.col-five>.vc_col-sm-2{width:20%}iframe[name='google_conversion_frame']{height:0!important;width:0!important;line-height:0!important;font-size:0!important;margin-top:-13px;float:left}.dropdown-scroll>.sub-menu-dropdown{height:540px;overflow:hidden}.header-spacing+.header-menu-top{margin-top:-40px}.woocommerce-ordering.with-list .selected-order{font-weight:700}.header-categories .main-nav .menu li.menu-item-design-full-width>.sub-menu-dropdown{margin-top:-78px}.hide-pag .owl-pagination,.hide-pag .owl-buttons{display:none}.color-scheme-light .testimonial .testimonial-content footer>span{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme:hover .owl-controls.clickable .owl-buttons div.disabled{color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-buttons div{color:rgba(255,255,255,.8)}.color-scheme-light .owl-theme .owl-controls.clickable .owl-buttons div:hover{color:rgba(255,255,255,1)}.color-scheme-light .owl-theme .owl-controls .owl-page span{background-color:rgba(255,255,255,.6)}.color-scheme-light .owl-theme .owl-controls .owl-page.active span,.color-scheme-light .owl-theme .owl-controls.clickable .owl-page:hover span{background-color:#fff}.basel-buttons .product-compare-button>a,.single-product-content .entry-summary .button.compare,.basel-hover-base .basel-add-btn>a,.basel-hover-base .product-compare-button a{text-transform:none}.rtl .has-border,.rtl .has-border>.vc_column-inner{border:none!important}.related-and-upsells .product-grid-item .hover-img img{width:100%}.hidden-nav-button{display:none!important}.dropdown-scroll .wpb_single_image{border:2px solid #f7f7f7}.page-id-25728 .dropdown-scroll .wpb_single_image,.page-id-23954 .dropdown-scroll .wpb_single_image{border:2px solid rgba(255,255,255,.1)}.widget_product_categories .cat-item-109 .cat-item:nth-child(even){display:none}@media (max-width:1024px) and (min-width:991px){.header-categories .categories-menu-dropdown .sub-menu-dropdown{width:680px}}@media (max-width:991px){.sticky-footer-on .footer-container{visibility:visible}}.menu-item-19907>.sub-menu-dropdown{background-size:contain}.woocommerce-checkout-review-order-table td{width:50%}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout){border-color:#333;background-color:#333}.basel-dark .cart-widget-side .widget_shopping_cart .buttons a:not(.checkout):hover{opacity:.7}.blazy-image-loading{position:relative}.blazy-image-loading:after{position:absolute;top:50%;margin-top:-15px;margin-left:-15px;opacity:.3;left:50%;content:" ";width:35px;height:35px;display:inline-block;vertical-align:middle;border:1px solid #000;border-radius:50%;border-left-color:transparent!important;border-right-color:transparent!important;-webkit-animation:load-spin 450ms infinite linear;animation:load-spin 450ms infinite linear}.color-scheme-light .color-scheme-dark .product-grid-item .product-title>a{color:#252222}.woocommerce-password-strength:empty{margin:0;padding:0}.basel-pagination:before{content:'';display:block;clear:both}.basel-hover-button .basel-buttons .product-compare-button>a:before,.basel-hover-button .basel-buttons .quick-view>a:before,.basel-hover-info .basel-buttons .product-compare-button>a:before,.basel-hover-info .basel-buttons .quick-view>a:before{border-color:#FFF!important}.single-product .site-content>.woocommerce-message{display:none}.basel-entry-meta li.modified-date{display:none!important}.owl-carousel .blog-design-masonry.has-post-thumbnail .post-date{left:10px}.instagram-widget.instagram-slider .instagram-pics li{-webkit-flex-basis:100%;-ms-flex-basis:100%;flex-basis:100%;max-width:100%}.slick-slide.active-thumb{transition:none!important}.basel-font-weight-600{font-weight:600}.basel-wishlist-share>span{margin-top:5px}.browser-Firefox .wrapp-header{height:0}.global-header-vertical .main-page-wrapper{margin-top:0;padding-top:0}@media (min-width:1025px){.buy-basel{position:fixed;bottom:40px;left:40px;background-color:#000;color:#fff;padding:10px 20px;border-radius:30px;text-transform:uppercase;transition:all .3s ease;z-index:1000}.buy-basel img{margin-right:10px;margin-bottom:1px}.buy-basel:hover,.buy-basel:focus{background-color:#97ca58;color:#fff;text-decoration:none;border-color:#000}.rtl .buy-basel{left:auto;right:40px}.rtl .buy-basel img{margin-right:0;margin-left:10px}}@media (min-width:768px) and (max-width:1024px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.shop-loop-head{width:100%}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}}@media (min-width:577px) and (max-width:767px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}@media (max-width:576px){.buy-basel{display:none}.swatch-on-grid .basel-tooltip-label{display:none}.dropdown-scroll>.sub-menu-dropdown{display:none}.basel-back-btn>span:before,.basel-products-nav .product-btn>a span:before{top:0}.single-product-content .product-images .thumbs-position-left .thumbnails{margin-top:4px}body .basel-parallax{background-attachment:scroll!important}.basel-text-block-wrapper .basel-text-block{max-width:100%}}</style><style type="text/css" data-type="vc_custom-css">.single-breadcrumbs-wrapper .woocommerce-breadcrumb{line-height:40px}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1474542040110{margin-bottom:80px!important}</style><noscript><style>.wpb_animate_when_almost_visible{opacity:1}</style></noscript><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player,[data-lazy-src]{display:none!important}</style></noscript>
	</head>
	
	<body class="page-template-default page page-id-19922 theme-basel woocommerce-no-js wrapper-full-width global-cart-design-1 global-search-full-screen global-header-shop mobile-nav-from-left basel-light catalog-mode-off categories-accordion-on global-wishlist-enable basel-top-bar-on basel-ajax-shop-on basel-ajax-search-on enable-sticky-header header-full-width sticky-header-real offcanvas-sidebar-mobile offcanvas-sidebar-tablet sticky-toolbar-on wpb-js-composer js-comp-ver-6.1 vc_responsive">
	</div>
	<div class="website-wrapper">
	<div class="topbar-wrapp color-scheme-light">
	<div class="container">
	<div class="topbar-content">
	<div class="top-bar-left"> 
	
	</div>
	<div class="top-bar-right">
	<div class="topbar-menu">
	<div class="menu-top-bar-container">
	<ul id="menu-top-bar" class="menu">
	<li id="menu-item-20488" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20488 menu-item-design-default item-event-hover">
	<a href="Items.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
	Items
	</a></li></ul></div></div></div></div></div></div>
	
	<header class="main-header header-has-no-bg header-shop icons-design-line color-scheme-dark">
	<div class="container">
	<div class="wrapp-header">
	<div class="main-nav site-navigation basel-navigation menu-left" role="navigation">
	<div class="menu-main-navigation-container">
</div>
</div>
<div class="site-logo">
<div class="basel-logo-wrap"> 
<a href="Items.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>" class="basel-logo basel-main-logo" rel="home"> 
<img  src="https://res.cloudinary.com/ddjrcafre/image/upload/c_scale,w_100/v1621676015/1200px-SAPS_badge.svg_hiit7p.png" alt="Basel" /> 
</a></div></div>
<div class="right-column">
<div >
<div >
	<a href="Donor.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
	<span class="basel-cart-totals"> 
		<span class="basel-cart-number">
		<strong>Total</strong>
		</span> 
		<span class="subtotal-dividerCart">
		<strong>: </strong>R
		</span>
		<span class="woocommerce-Price-amount amount">
		<span class="woocommerce-Price-currencySymbol">
		</span><span> </span><span class="totalpricedelivery"></span></span></span> 
        </span> 
	</a>
	</div>
	</div>
</div></div></div></div>
</header>

<div class="clear">
</div>
<div class="main-page-wrapper">
<div class="page-title page-title-default title-size-small title-design-centered color-scheme-light" style="">
<div class="container">
</div></div>
<div class="container">
<div class="row">
<div class="site-content col-sm-12" role="main">
<article id="post-19922" class="post-19922 page type-page status-publish hentry">
<div class="entry-content">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner"><div class="wpb_wrapper">
<div class="title-wrapper  basel-title-color-primary basel-title-style-bordered basel-title-size-default text-center vc_custom_1474542040110">
<div class="liner-continer"> 
<span class="left-line">
</span>
<h4 class="title" >
<strong>
Delivery details
</strong>
<span class="title-separator">
<span>
</span>
</span>
</h4> 
<span class="right-line">
</span>
</div>
<span class="title-after_title">

</span></div><div class="woocommerce"><div class="single-product" data-product-page-preselected-id="0"><div class="single-breadcrumbs-wrapper"><div class="container"> <a href="javascript:baselThemeModule.backHistory()" class="basel-back-btn basel-tooltip"><span>Back</span></a><nav class="woocommerce-breadcrumb">
<a href="Items.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
Items
</a><span class="breadcrumb-last"> 
Delivery details
</span>
</nav>
</div>
</div>

<form action="https://canibu.co.za/Paymentprocess.php" method="get" id="plug" name="moneytree">
   <label for="Country">Country:</label><input type="text" name="Country" value="South Africa" readonly>
   <label>Province:</label><input type="text" name="Province" value="Gauteng" readonly>
   <label>City:</label>
<select name="City" id="city" form="plug" required>
  <option value="" disabled selected>Select City</option>
  <option value="Johannesburg" >Johannesburg</option>
  <option value="Tshwane/Pretoria" >Tshwane/Pretoria</option>
</select>

<div id="hidePTAtown" style="display:none">
<label>District:</label>
<select class="PTAtown" name="Towns" id="townsPTA" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="PretoriaEast" disabled >Pretoria East</option>
  <option value="PretoriaNorthEast" disabled >Pretoria North East</option>
  <option value="PretoriaNorthWest" disabled >Pretoria North West</option>
  <option value="Centurion" disabled >Centurion</option>
  <option value="PretoriaCentralWest" disabled >Pretoria Central West</option>
  <option value="PretoriaCentral">Pretoria Central</option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hideJHBtown" style="display:none">
<label>District:</label>
<select class="JHBtown" name="Towns" id="townsJHB" form="plug" required>
  <option value="" disabled selected>Select District</option>
  <option value="JHBNorth" disabled >Johannesburg North</option>
  <option value="JHBNorthWest" disabled >Johannesburg North-West</option>
  <option value="JHBSouthWest" disabled >Johannesburg South-West</option>
  <option value="JHBSouth" disabled >Johannesburg South</option>
  <option value="JHBEast" disabled >Johannesburg East</option>
  <option value="JHBCentral">Johannesburg Central</option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBNorthsuburb" style="display:none">
<label>Area:</label>
<select class="JHBNorthsuburb" name="suburbs" id="suburbsJHBNorth" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Fourways"> Fourways </option>
  <option value="Midrand"> Midrand </option>
  <option value="Randburg"> Randburg </option>
  <option value="Sandton"> Sandton </option>
  <option value="StrijdomPark"> Strijdom Park </option>
  <option value="Sunninghill"> Sunninghill </option>
  <option value="Woodmead"> Woodmead </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBEastsuburb" style="display:none">
<label>Area:</label>
<select class="JHBEastsuburb" name="suburbs" id="suburbsJHBEast" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Alexandra"> Alexandra </option>
  <option value="Bruma"> Bruma </option>
  <option value="IvoryPark"> Ivory Park </option>
  <option value="Wynberg"> Wynberg </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBNorthWestsuburb" style="display:none">
<label>Area:</label>
<select class="JHBNorthWestsuburb" name="suburbsJHBNorthWest" id="suburbsJHBNorthWest" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="AucklandPark"> Auckland Park </option>
  <option value="ConstantiaKloof"> ConstantiaKloof </option>
  <option value="Diepsloot"> Diepsloot </option>
  <option value="Kyasands"> Kya Sands </option>
  <option value="Northgate"> Northgate </option>
  <option value="Roodepoort"> Roodepoort </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBCentral" style="display:none">
<label>Area:</label>
<select class="JHBCentralareas" name="areasJHBCentral" id="areasJHBCentral" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Amalgam" disabled > Auckland Park </option>
  <option value="AucklandPark" disabled > Auckland Park </option>
  <option value="Belgravia" disabled > Belgravia </option>
  <option value="Bellevue" disabled > Bellevue </option>
  <option value="Benrose" disabled > Benrose </option>
  <option value="Berea" disabled > Berea </option>
  <option value="Bertrams" disabled > Bertrams </option>
  <option value="BezuidenhoutValley" disabled > Bezuidenhout Valley </option>
  <option value="Birdhaven" disabled > Birdhaven </option>
  <option value="Birnam" disabled > Birnam </option>
  <option value="Booysens" disabled > Booysens </option>
  <option value="Braamfontein" > Braamfontein </option>
  <option value="Braampark" disabled > Braampark </option>
  <option value="Bramley" disabled > Bramley </option>
  <option value="BramleyView" disabled > Bramley View </option>
  <option value="Brixton" disabled > Brixton </option>
  <option value="Bruma" disabled > Bruma </option>
  <option value="Burghersdorp" disabled > Burghersdorp </option>
  <option value="CaseyPark" disabled > Casey Park </option>
  <option value="Cheltondale" disabled > Cheltondale </option>
  <option value="Cleveland" disabled > Cleveland </option>
  <option value="Coronationville" disabled > Coronationville </option>
  <option value="Crosby" disabled > Crosby </option>
  <option value="Crown" disabled > Crown </option>
  <option value="CrownCity" disabled > Crown City </option>
  <option value="CrownNorth" disabled > Crown North </option>
  <option value="Cyrildene" disabled > Cyrildene </option>
  <option value="Denver" disabled > Denver </option>
  <option value="Doornfontein" > Doornfontein </option>
  <option value="Drostepark" disabled > Drostepark </option>
  <option value="EltonHill" disabled > Elton Hill </option>
  <option value="Emmarentia" disabled > Emmarentia </option>
  <option value="Fairmount" disabled > Fairmount </option>
  <option value="FairmountRidge" disabled > Fairmount Ridge </option>
  <option value="Fairvale" disabled > Fairvale </option>
  <option value="Fairview" disabled > Fairview </option>
  <option value="Fairway" disabled > Fairway </option>
  <option value="Fairwood" disabled > Fairwood </option>
  <option value="Fellside" disabled > Fellside </option>
  <option value="Fordsburg" disabled > Fordsburg </option>
  <option value="ForestTown" disabled > Forest Town </option>
  <option value="Formain" disabled > Formain </option>
  <option value="Glenhazel" disabled > Glenhazel </option>
  <option value="GeorgeGoch" disabled > George Goch </option>
  <option value="Greenside" disabled > Greenside </option>
  <option value="HawkinsEstate" disabled > Hawkins Estate </option>
  <option value="HighlandsNorth" disabled > Highlands North </option>
  <option value="Hillbrow"> Hillbrow </option>
  <option value="HoughtonEstate" disabled > Houghton Estate </option>
  <option value="HurstHill" disabled > Hurst Hill </option>
  <option value="JanHofmeyer" disabled > Jan Hofmeyer </option>
  <option value="Jeppestown" disabled > Jeppestown </option>
  <option value="JeppestownSouth" disabled > Jeppestown South </option>
  <option value="JohannesburgCBD" > Johannesburg CBD </option>
  <option value="Kensington" disabled > Kensington </option>
  <option value="Kew" disabled > Kew </option>
  <option value="Killarney" disabled > Killarney </option>
  <option value="Langlaagte" disabled > Langlaagte </option>
  <option value="LakeViewEstate" disabled > Lake View Estate </option>
  <option value="Linksfield" disabled > Linksfield </option>
  <option value="LinksfieldNorth" disabled > Linksfield North </option>
  <option value="LinksfieldRidge" disabled > Linksfield Ridge </option>
  <option value="LombardyEast" disabled > LombardyEast </option>
  <option value="Lorentzville" disabled > Lorentzville </option>
  <option value="Lyndhurst" disabled > Lyndhurst </option>
  <option value="Malvern" disabled > Malvern </option>
  <option value="Martindale" disabled > Martindale </option>
  <option value="Maryvale" disabled > Maryvale </option>
  <option value="Mayfair" disabled > Mayfair </option>
  <option value="MayfairWest" disabled > Mayfair West </option>
  <option value="MelroseEstate" disabled > Melrose Estate </option>
  <option value="MelroseNorth" disabled > Melrose North </option>
  <option value="Melville" disabled > Melville </option>
  <option value="MoutainView" disabled > Moutain View </option>
  <option value="NewCentre" disabled > New Centre </option>
  <option value="Newtown" > Newtown </option>
  <option value="NewDoornfontein" > New Doornfontein </option>
  <option value="Norwood" disabled > Norwood </option>
  <option value="Oaklands" disabled > Oaklands </option>
  <option value="Observatory" disabled > Observatory </option>
  <option value="Ophirton" disabled > Ophirton </option>
  <option value="Orchards" disabled > Orchards </option>
  <option value="Pageview" disabled > Pageview </option> 
  <option value="ParkCentral" disabled > Park Central </option>
  <option value="Parktown" disabled > Parktown </option>
  <option value="ParktownNorth" disabled > Parktown North </option>
  <option value="Parkwood" disabled > Parkwood </option>
  <option value="RaedeneEstate" disabled > Raedene Estate </option>
  <option value="Reuven" disabled > Reuven </option>
  <option value="Raumaraispark" disabled > Raumaraispark </option>
  <option value="Rembrandtpark" disabled > Rembrandt park </option>
  <option value="Richmond" disabled > Richmond </option>
  <option value="Riverlea" disabled > Riverlea </option>
  <option value="Rosebank" disabled > Rosebank </option>
  <option value="Rossmore" disabled > Rossmore </option>
  <option value="SalisburyClaims" disabled > Salisbury Claims </option>
  <option value="Sandringham" disabled > Sandringham </option>
  <option value="SavoyEstate" disabled > Savoy Estate </option>
  <option value="Saxonwold" disabled > Saxonwold </option>
  <option value="Selby" disabled > Selby </option>
  <option value="Silvamonte" disabled > Silvamonte </option>
  <option value="Sophiatown" disabled > Sophiatown </option>
  <option value="SouthKensington" disabled > South Kensington </option>
  <option value="Sunningdale" disabled > Sunningdale </option>
  <option value="Troyeville" disabled > Troyeville </option>
  <option value="Uitsaaisentrum" disabled > Troyeville </option>
  <option value="Victoria" disabled > Victoria </option>
  <option value="Vrededorp" disabled > Vrededorp </option>
  <option value="Waverley" disabled > Waverley </option>
  <option value="Wemmer" disabled > Wemmer </option>
  <option value="Westbury" disabled > Westbury </option>
  <option value="Westdene" disabled > Westdene </option>
  <option value="WestCliff" disabled > West Cliff </option>
  <option value="Wolhuter" disabled > Wolhuter </option>
  <option value="Yoeville" disabled > Yoeville </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBSouth" style="display:none">
<label>Area:</label>
<select class="JHBSouthsuburb" name="suburbsJHBSouth" id="suburbsJHBSouth" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Aeroton"> Aeroton </option>
  <option value="CityDeep"> City Deep </option>
  <option value="Diepkloof"> Diepkloof </option>
  <option value="Ennerdale"> Ennerdale </option>
  <option value="Lenasig"> Lenasig </option>
  <option value="OrangeFarm"> OrangeFarm </option>
  <option value="SouthGate"> South Gate </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBSouthWest" style="display:none">
<label>Area:</label>
<select class="JHBSouthWestsuburb" name="suburbsJHBSouthWest" id="suburbsJHBSouthWest" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Dobsonville"> Dobsonville </option>
  <option value="Soweto"> Soweto </option>
  <option value="ProteaGlen"> Protea Glen </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBSandtonsuburb" style="display:none">
<label>Area:</label>
<select class="JHBSandtonsuburb" name="suburbs" id="suburbsJHBSandton" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Bryanston"> Bryanston </option>
  <option value="Craighall Park"> Craighall Park </option>
  <option value="Hurlingham"> Hurlingham </option>
  <option value="Hyde Park"> Hyde Park </option>
  <option value="Illovo"> Illovo </option>
  <option value="Inanda"> Inanda </option>
  <option value="Parkmore"> Parkmore </option>
  <option value="Paulshof"> Paulshof </option>
  <option value="Rosebank"> Rosebank </option>
  <option value="Sandhurst"> Sandhurst </option>
  <option value="Sandowns"> Sandowns </option>
  <option value="Sandton"> Sandton </option>
  <option value="Strathavon"> Strathavon </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBRandburgsuburb" style="display:none">
<label>Area:</label>
<select class="JHBRandburg" name="suburbs" id="suburbsJHBRandburg" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="AldaraPark"> Aldara Park </option>
  <option value="BellairsPark"> Bellairs Park </option>
  <option value="Berario"> Berario </option>
  <option value="BeverlyGardens"> Beverly Gardens </option>
  <option value="Blackheath"> Blackheath </option>
  <option value="Blairgowrie"> Blairgowrie </option>
  <option value="Bloubosrand"> Bloubosrand </option>
  <option value="Bordeaux"> Bordeaux </option>
  <option value="Boskruin"> Boskruin </option>
  <option value="Bromhof"> Bromhof </option>
  <option value="CedarCreek"> Cedar Creek </option>
  <option value="CedarHills"> Cedar Hills </option>
  <option value="CedarLakes"> Cedar Lakes </option>
  <option value="Chartwell"> Chartwell </option>
  <option value="Cresta"> Cresta </option>
  <option value="DanielBrinkPark"> Daniel Brink Park </option>
  <option value="Darrenwood"> Darrenwood </option>
  <option value="Fairland"> Fairland </option>
  <option value="Fernbrook"> Fernbrook </option>
  <option value="Ferndale"> Ferndale </option>
  <option value="Fontainebleau"> Fontainebleau </option>
  <option value="Hoogland"> Hoogland </option>
  <option value="Jacanlee"> Jacanlee </option>
  <option value="JohannesburgNorth"> Johannesburg North </option>
  <option value="JukskeiPark"> Jukskei Park </option>
  <option value="Kelland"> Kelland </option>
  <option value="KellyRidge"> Kelly Ridge </option>
  <option value="KensingtonB"> Kensington B </option>
  <option value="KyaSands"> Kya Sands </option>
  <option value="Lanseria"> Lanseria </option>
  <option value="Linden"> Linden </option>
  <option value="Malanshof"> Malanshof </option>
  <option value="Maroeladal"> Maroeladal </option>
  <option value="Moret"> Moret </option>
  <option value="Noordhang"> Noordhang </option>
  <option value="NorthRiding"> North Riding </option>
  <option value="Northcliff"> Northcliff </option>
  <option value="Northgate"> Northgate </option>
  <option value="Northwold"> Northwold </option>
  <option value="NorthwoldGardens"> Northwold Gardens </option>
  <option value="OliveCrest"> Olive Crest </option>
  <option value="Olivedale"> Olivedale </option>
  <option value="PierneefPark"> Pierneef Park </option>
  <option value="PinePark"> Pine Park </option>
  <option value="PresidentRidge"> President Ridge </option>
  <option value="RandburgCentral"> Randburg Central </option>
  <option value="Randpark"> Randpark </option>
  <option value="RandparkRidge"> Randpark Ridge </option>
  <option value="Risidale"> Risidale </option>
  <option value="RobinAcres"> Robin Acres </option>
  <option value="RobinHills"> Robin Hills </option>
  <option value="Robindale"> Robindale </option>
  <option value="Ruiterhof"> Ruiterhof </option>
  <option value="Saranton"> Saranton </option>
  <option value="Sharonlea"> Sharonlea </option>
  <option value="Sonneglans"> Sonneglans </option>
  <option value="Strijdompark"> Strijdompark </option>
  <option value="Sundowner"> Sundowner </option>
  <option value="TheWillows"> The Willows </option>
  <option value="Valeriedene"> Valeriedene </option>
  <option value="VandiaGrove"> Vandia Grove </option>
  <option value="VictoryPark"> Victory Park </option>
  <option value="Waterford"> Waterford </option>
  <option value="Windsor"> Windsor </option>
  <option value="WindsorEast"> Windsor East </option>
  <option value="WindsorGlen"> Windsor Glen </option>
  <option value="WindsorWest"> Windsor West </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hidePTAeastsuburb" style="display:none">
<label>Area:</label>
<select class="PTAeastSuburb" name="suburbs" id="suburbsPTAeast" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="AlphenPark"> Alphen Park </option>
  <option value=" Arcadia "> Arcadia </option>
  <option value=" AshleaGardens "> Ashlea Gardens </option>
  <option value=" BaileysMuckleneuk "> Bailey's Muckleneuk </option>
  <option value=" Brooklyn "> Brooklyn </option>
  <option value=" Brummeria "> Brummeria </option>
  <option value=" Bryntirion "> Bryntirion </option>
  <option value=" Colbyn "> Colbyn </option>
  <option value=" ConstantiaPark "> Constantia Park </option>
  <option value=" DieWilgers "> Die Wilgers </option>
  <option value=" Eastcliff "> Eastcliff </option>
  <option value=" Eastwood "> Eastwood </option>
  <option value=" Elarduspark "> Elarduspark </option>
  <option value=" Equestria "> Equestria </option>
  <option value=" Erasmuskloof "> Erasmuskloof </option>
  <option value=" Erasmusrand "> Erasmusrand </option>
  <option value=" FaerieGlen "> Faerie Glen </option>
  <option value=" Garsfontein "> Garsfontein </option>
  <option value=" Groenkloof "> Groenkloof </option>
  <option value=" Hatfield "> Hatfield </option>
  <option value=" Hillcrest "> Hillcrest </option>
  <option value=" Kilberry "> Kilberry </option>
  <option value=" LaMontagne "> La Montagne </option>
  <option value=" Lukasrand "> Lukasrand </option>
  <option value=" Lynnrodene "> Lynnrodene </option>
  <option value=" Lynnwood "> Lynnwood </option>
  <option value=" LynnwoodGlen "> Lynnwood Glen </option>
  <option value=" LynnwoodManor "> Lynnwood Manor </option>
  <option value=" LynnwoodPark "> Lynnwood Park </option>
  <option value=" LynnwoodRidge "> Lynnwood Ridge </option>
  <option value=" Menlopark "> Menlopark </option>
  <option value=" Menlyn "> Menlyn </option>
  <option value=" Meyerspark "> Meyerspark </option>
  <option value=" MonumentPark "> Monument Park </option>
  <option value=" Mooikloof "> Mooikloof </option>
  <option value=" MoreletaPark "> Moreleta Park </option>
  <option value=" Muckleneuk "> Muckleneuk </option>
  <option value=" Murrayfield "> Murrayfield </option>
  <option value=" NewMuckleneuk "> New Muckleneuk </option>
  <option value=" Newlands "> Newlands </option>
  <option value=" Olympus "> Olympus </option>
  <option value=" PretoriusPark "> Pretorius Park </option>
  <option value=" Rietvalleirand "> Rietvalleirand </option>
  <option value=" Silverlakes  "> Silverlakes </option>
  <option value=" Sterrewag "> Sterrewag </option>
  <option value=" Sunnyside "> Sunnyside </option>
  <option value=" Trevenna "> Trevenna </option>
  <option value=" ValDeGrace "> Val De Grace </option>
  <option value=" Wapadrand "> Wapadrand </option>
  <option value=" Waterkloof "> Waterkloof </option>
  <option value=" WaterkloofGlen "> Waterkloof Glen </option>
  <option value=" WaterkloofPark "> Waterkloof Park </option>
  <option value=" WaterkloofRidge "> Waterkloof Ridge </option>
  <option value=" WillowGlen "> Willow Glen </option>
  <option value=" WillowParkManor "> Willow Park Manor </option>
  <option value=" WingatePark "> Wingate Park </option>
  <option value=" Woodhill "> Woodhill </option>
  <option value=" Woodlands "> Woodlands </option>
  <option value=" Zwavelpoort "> Zwavelpoort </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTANorthEastsuburb" style="display:none">
<label>Area:</label>
<select class="PTANorthEastsuburb" name="suburbsPTANorthEast" id="suburbsPTANorthEast" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Annlin"> Annlin </option>
  <option value=" Bellevue "> Bellevue </option>
  <option value=" Bergtuin "> Bergtuin </option>
  <option value=" Deerness "> Deerness </option>
  <option value=" Derdepoort "> Derdepoort </option>
  <option value=" DerdepoortPark "> Derdepoort Park </option>
  <option value=" Despatch "> Despatch </option>
  <option value=" Doornpoort "> Doornpoort </option>
  <option value=" Eastlynne "> Eastlynne </option>
  <option value=" Eersterust "> Eersterust </option>
  <option value=" Ekklesia "> Ekklesia </option>
  <option value=" Gezina "> Gezina </option>
  <option value=" JanNiemandPark "> Jan Niemand Park </option>
  <option value=" KilneryPark "> Kilnery Park </option>
  <option value=" Koedoespoort "> Koedoespoort </option>
  <option value=" Lyndopark "> Lyndopark </option>
  <option value=" Magalieskruin "> Magalieskruin </option>
  <option value=" Mamelodi "> Mamelodi </option>
  <option value=" Nelmapius "> Nelmapius </option>
  <option value=" Queenswood "> Queenswood </option>
  <option value=" Rietfontein "> Rietfontein </option>
  <option value=" Rietondale "> Rietondale </option>
  <option value=" Riviera "> Riviera </option>
  <option value=" Silverton "> Silverton </option>
  <option value=" SilvertonDale "> Silvertondale </option>
  <option value=" Sinoville "> Sinoville </option>
  <option value=" Villieria "> Villieria </option>
  <option value=" Waltloo "> Waltloo </option>
  <option value=" Waverley "> Waverley </option>
  <option value=" WeavindPark "> Weavind Park </option>
  <option value=" Wonderboom "> Wonderboom </option>
  <option value=" WonderboomSouth "> Wonderboom South </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTANorthWestsuburb" style="display:none">
<label>Area:</label>
<select class="PTANorthWestsuburb" name="suburbsPTANorthWest" id="suburbsPTANorthWest" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Amandasig"> Amandasig </option>
  <option value=" Booysens "> Booysens </option>
  <option value=" Claremont "> Claremont </option>
  <option value=" Chantelle "> Chantelle </option>
  <option value=" Florauna "> Florauna </option>
  <option value=" Garankuwa "> Garankuwa </option>
  <option value=" Hammanskraal "> Hammanskraal </option>
  <option value=" Hermanstad "> Hermanstad </option>
  <option value=" Karenpark "> Karenpark </option>
  <option value=" Kirkney "> Kirkney </option>
  <option value=" Klerksoord "> Klerksoord </option>
  <option value=" Mabopane "> Mabopane </option>
  <option value=" Dorandia "> Dorandia </option>
  <option value=" NinaPark "> Nina Park </option>
  <option value=" PhilipNelPark "> Philip Nel Park </option>
  <option value=" PretoriaGardens "> Pretoria Gardens </option>
  <option value=" PretoriaNorth "> Pretoria North </option>
  <option value=" ProclamationHill "> Proclamation Hill </option>
  <option value=" Rosslyn "> Rosslyn </option>
  <option value=" Soshanguve "> Soshanguve </option>
  <option value=" Suiderberg "> Suiderberg </option>
  <option value=" Orchards "> Orchards </option>
  <option value=" Themba "> Themba </option>
  <option value=" Tileba "> Tileba </option>
  <option value=" Wolmer "> Wolmer </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTACentralsuburb" style="display:none">
<label>Area:</label>
<select class="PTACentralsuburb" name="suburbsPTACentral" id="suburbsPTACentral" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Arcadia" disabled > Arcadia </option>
  <option value="Bryntirion" disabled > Bryntirion </option>
  <option value="Eastwood" disabled > Eastwood </option>
  <option value="LisdoganPark" disabled > Lisdogan Park </option>
  <option value="PretoriaCBD" disabled > Pretoria CBD </option>
  <option value="Sunnyside" disabled > Sunnyside </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hidePTACentralWestsuburb" style="display:none">
<label>Area:</label>
<select class="PTACentralWestsuburb" name="suburbsPTACentralWest" id="suburbsPTACentralWest" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Atteridgeville"> Atteridgeville </option>
  <option value=" LotusGardens "> Lotus Gardens </option>
  <option value=" CapitalPark "> Capital Park </option>
  <option value=" Danville "> Danville </option>
  <option value=" Daspoort "> Daspoort </option>
  <option value=" Elandspoort "> Elandspoort </option>
  <option value=" Eloffsdal "> Eloffsdal </option>
  <option value=" Kwaggasrand "> Kwaggasrand </option>
  <option value=" Laudium "> Laudium </option>
  <option value=" LesMarais "> Les Marais </option>
  <option value=" Mayville "> Mayville </option>
  <option value=" MountainView "> Mountain View </option>
  <option value=" PretoriaWest "> Pretoria West </option>
  <option value=" Salvokop "> Salvokop </option>
  <option value=" Saulsville "> Saulsville </option>
  <option value=" Weskoppies "> Weskoppies </option>
  <option value=" Wespark "> Wespark </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>
<div id="hideCenturionsuburb" style="display:none">
<label>Area:</label>
<select class="Centurionsuburb" name="suburbs" id="suburbsPTACenturion" form="plug" required>
  <option value="" disabled selected>Select Area</option>
  <option value="Clubview"> Clubview </option>
  <option value=" CornwallHill "> Cornwall Hill </option>
  <option value=" Doringkloof "> Doringkloof </option>
  <option value=" Eldoraigne "> Eldoraigne </option>
  <option value=" Erasmia "> Erasmia </option>
  <option value=" Heuweloord "> Heuweloord </option>
  <option value=" Kloofsig "> Kloofsig </option>
  <option value=" Lyttleton "> Lyttleton </option>
  <option value=" Irene "> Irene </option>
  <option value=" Olievenhoutbosch "> Olievenhoutbosch </option>
  <option value=" PierreVanRyneveldPark "> Pierre Van Ryneveld Park </option>
  <option value=" TheReeds "> The Reeds </option>
  <option value=" Rooihuiskraal "> Rooihuiskraal </option>
  <option value=" SunderlandRidge "> Sunderland Ridge </option>
  <option value=" Wierdapark "> Wierdapark </option>
  <option value=" Weskoppies "> Weskoppies </option>
  <option value=" Wespark "> Wespark </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideDoornfontein" style="display:none">
<label>Street:</label>
<select class="Doornfontein" name="streetsDoornfontein" id="streetsDoornfontein" form="plug" required>
  <option value="" disabled selected>Select Street</option>
  <option value="Beit"> Beit St </option>
  <option value="Buxton"> Buxton St </option>
  <option value="Currey"> Currey St </option>
  <option value="Davies"> Davies St </option>
  <option value="End"> End St </option>
  <option value="Height"> Height St </option>
  <option value="JoeSlove"> Joe Slove Dr </option>
  <option value="Moseley"> Moseley St </option>
  <option value="Nind"> Nind St </option>
  <option value="Rockey"> Rockey St </option>
  <option value="Saratoga"> Saratoga Ave </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideNewDoornfontein" style="display:none">
<label>Street:</label>
<select class="NewDoornfontein" name="streetsNewDoornfontein" id="streetsNewDoornfontein" form="plug" required>
  <option value="" disabled selected>Select Street</option>
  <option value="Beacon"> Beacon St </option>
  <option value="Charles"> Charles St </option>
  <option value="Error"> Error St </option>
  <option value="LowerPage"> Lower Page St </option>
  <option value="LowerRoss"> Lower Ross St </option>
  <option value="Sivewright"> Sivewright Ave </option>
  <option value="Staib"> Staib St </option>
  <option value="VanBeek"> Van Beek St </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideHillbrow" style="display:none">
<label>Street:</label>
<select class="Hillbrow" name="streetsHillbrow" id="streetsHillbrow" form="plug" required>
  <option value="" disabled selected>Select Street</option>
  <option value="Banket"> Banket St </option>
  <option value="Bok"> Bok St </option>
  <option value="Bruce"> Bruce St </option>
  <option value="Caroline"> Caroline St </option>
  <option value="Claim"> Claim St </option>
  <option value="Commissioner"> Commissioner St </option>
  <option value="DeVilliers"> De Villiers St </option>
  <option value="End"> End St </option>
  <option value="Esselen"> Esselen St </option>
  <option value="Goldreich"> Goldreich St </option>
  <option value="Goud"> Goud St </option>
  <option value="Hancock"> Hancock St </option>
  <option value="Banket"> Banket St </option>
  <option value="HelenJoseph"> Helen Joseph St </option>
  <option value="Kapteijn"> Kapteijn St </option>
  <option value="Kerk"> Kerk St </option>
  <option value="Koch"> Koch St </option>
  <option value="Kotze"> Kotze St </option>
  <option value="LilianNgoyi"> Lilian Ngoyi St </option>
  <option value="Leyds"> Leyds St </option>
  <option value="MarketStraat"> Market Straat St </option>
  <option value="Mooi"> Mooi St </option>
  <option value="Nugget"> Nugget St </option>
  <option value="Ockerse"> Ockerse St </option>
  <option value="PaulNel"> PaulNel St </option>
  <option value="Pietersen"> Pietersen St </option>
  <option value="Polly"> Polly St </option>
  <option value="Plein"> Plein St </option>
  <option value="Pretoria"> Pretoria St </option>
  <option value="Pritchard"> Pritchard St </option>
  <option value="Quartz"> Quartz St </option>
  <option value="RahimaMoosa"> Rahima Moosa St </option>
  <option value="SophieDeBruyn"> Sophie De Bruyn St </option>
  <option value="Smit"> Smit St </option>
  <option value="Troye"> Troye St </option>
  <option value="Twist"> Twist St </option>
  <option value="VanDerMerwe"> Van Der Merwe St </option>
  <option value="Willie"> Willie St </option>
  <option value="Wolmarans"> Wolmarans St </option>
  <option value="Yettah"> Yettah St </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideNewtown" style="display:none">
<label>Street:</label>
<select class="Newtown" name="streetsNewtown" id="streetsNewtown" form="plug" required>
  <option value="" disabled selected>Select Street</option>
  <option value="BarneySimmonds"> Barney Simmonds St </option>
  <option value="Carr"> Carr St </option>
  <option value="DollyRathebe"> Dolly Rathebe Rd </option>
  <option value="GerardSekoto"> Gerard Sekoto St </option>
  <option value="GwigwiMrwebi"> Gwigwi Mrwebi St </option>
  <option value="Harrison"> Harrison St </option>
  <option value="HelenJoseph"> Helen Joseph St </option>
  <option value="Jennings"> Jennings St </option>
  <option value="LilianNgoyi"> Lilian Ngoyi St </option>
  <option value="Mahlathini"> Mahlathini St </option>
  <option value="Malherbe"> Malherbe St </option>
  <option value="MargaretMangana"> Margaret Mangana St </option>
  <option value="MiriamMakeba"> Miriam Makeba St </option>
  <option value="NoriaMabasa"> Noria Mabasa St </option>
  <option value="NtemiPiliso"> Ntemi Piliso St </option>
  <option value="RahimaMoosa"> Rahima Moosa St </option>
  <option value="Sauer"> Sauer St </option>
  <option value="Simmonds"> Simmonds St </option>
  <option value="Vorster"> Vorster St </option>
  <option value="Quin"> Quin St </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideBraamfontein" style="display:none">
<label>Street:</label>
<select class="Braamfontein" name="streetsBraamfontein" id="streetsBraamfontein" form="plug" required>
  <option value="" disabled selected>Select Street</option>
  <option value="Ameshoff"> Ameshoff St </option>
  <option value="Biccard"> Biccard St </option>
  <option value="Bertha"> Bertha St </option>
  <option value="Bok"> Bok St </option>
  <option value="Clarendon"> Clarendon St </option>
  <option value="DeBeer"> De Beer St </option>
  <option value="DeKort"> De Kort St </option>
  <option value="DeVilliers"> DeVilliers St </option>
  <option value="Eendracht"> Eendracht St </option>
  <option value="Eloff"> Eloff St </option>
  <option value="Esselen"> Esselen St </option>
  <option value="Harrison"> Harrison St </option>
  <option value="Henri"> Henri St </option>
  <option value="Hoek"> Hoek St </option>
  <option value="Hoofd"> Hoofd St </option>
  <option value="Hospital"> Hospital St </option>
  <option value="JanSmuts"> Jan Smuts Ave </option>
  <option value="Joubert"> Joubert St </option>
  <option value="KingGeorge"> King George St </option>
  <option value="Klein"> Klein St </option>
  <option value="Leyds"> Leyds St </option>
  <option value="Loveday"> Loveday St </option>
  <option value="Melle"> Melle St </option>
  <option value="Pretoria"> Pretoria St </option>
  <option value="Queens"> Queens St </option>
  <option value="Rissik"> Rissik St </option>
  <option value="SamHancock"> Sam Hancock St </option>
  <option value="Simmonds"> Simmonds St </option>
  <option value="Smit"> Smit St </option>
  <option value="Station"> Station St </option>
  <option value="Stiemens"> Stiemens St </option>
  <option value="Twist"> Twist St </option>
  <option value="Wanderers"> Wanderers St </option>
  <option value="Yale"> Yale St </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hideJHBCBD" style="display:none">
<label>Street:</label>
<select class="JHBCBD" name="streetsJHBCBD" id="streetsJHBCBD" form="plug" required>
  <option value="" disabled selected>Select Street</option>
  <option value="Albert"> Albert St </option>
  <option value="AlbertinaSisulu"> AlbertinaSisulu Rd </option>
  <option value="Anderson"> Anderson St </option>
  <option value="Banket"> Banket St </option>
  <option value="Claim"> Claim St </option>
  <option value="Delvers"> Delvers St </option>
  <option value="DeVilliers"> De Villiers St </option>
  <option value="Durban"> Durban St </option>
  <option value="Eloff"> Eloff St </option>
  <option value="End"> End St </option>
  <option value="Ferreira"> Ferreira St </option>
  <option value="Fox"> Fox St </option>
  <option value="Fraser"> Fraser St </option>
  <option value="Frederick"> Frederick St </option>
  <option value="GerardSekoto"> Gerard Sekoto St </option>
  <option value="Goud"> Goud St </option>
  <option value="Grahamstown"> Grahamstown St </option>
  <option value="Hall"> Hall St </option>
  <option value="Harrison"> Harrison St </option>
  <option value="Heidelberg"> Heidelberg St </option>
  <option value="HelenJoseph"> Helen Joseph St </option>
  <option value="Joubert"> Joubert St </option>
  <option value="Kay"> Kay St </option>
  <option value="Kerk"> Kerk St </option>
  <option value="Kort"> Kort St </option>
  <option value="Kruis"> Kruis St </option>
  <option value="LilianNgoyi"> Lilian Ngoyi St </option>
  <option value="Loveday"> Loveday St </option>
  <option value="Main"> Main St </option>
  <option value="Maclaren"> Maclaren St </option>
  <option value="Marshal"> Marshal St </option>
  <option value="Meilde"> Meilde St </option>
  <option value="MiriamMakeba"> Miriam Makeba St </option>
  <option value="Mooi"> Mooi St </option>
  <option value="NtemiPiliso"> Ntemi Piliso St </option>
  <option value="Nugget"> Nugget St </option>
  <option value="Plein"> Plein St </option>
  <option value="Polly"> Polly St </option>
  <option value="Pritchard"> Pritchard St </option>
  <option value="Quartz"> Quartz St </option>
  <option value="RahimaMoosa"> Rahima Moosa St </option>
  <option value="Rissik"> Rissik St </option>
  <option value="Salisbury"> Salisbury St </option>
  <option value="Sauer"> Sauer St </option>
  <option value="Simmonds"> Simmonds St </option>
  <option value="Small"> Small St </option>
  <option value="Thorpe"> Thorpe St </option>
  <option value="Troye"> Troye St </option>
  <option value="Twist"> Twist St </option>
  <option value="Village"> Village Rd </option>
  <option value="Null" style="display:none" >Null</option>
</select>
</div>

<div id="hidecribtype" style="display:none">
<label>Structure Type:</label>
<select class="cribtype" name="Crib" id="Cribtype" form="plug" required>
  <option value="" disabled selected>Select Structure Type</option>
  <option value="House">House</option>
  <option value="Estate">Residential Estate</option>
  <option value="Complex">Residential Complex</option>
  <option value="Flat">Residential Flat Building</option>
  <option value="Office">Office Complex</option>
  <option value="Mall">Mall</option>
  <option value="Shop">Shopping Complex</option>
</select>
</div>
<div id="hideEstate" style="display:block">
   <label>Estate name:</label><input type="text" name="Estate" placeholder="Enter Estate Name" id="Estate1" required>
</div>
<div id="hideComplex" style="display:block">
   <label>Complex name:</label><input type="text" name="Complex" placeholder="Enter Complex Name" id="Complex1"  required>
</div>
<div id="hideBuilding" style="display:block">
   <label>Building name:</label><input type="text" name="Building" placeholder="Enter Building Name" id="Building1"  required>
</div>
<div id="hideMall" style="display:block">
   <label>Mall name:</label><input type="text" name="Mall" placeholder="Enter Mall Name" id="Mall1"  required>
</div>
<div id="hideOffice" style="display:block">
   <label>Company name:</label><input type="text" name="Shop" placeholder="Enter Company Name" id="Company1" required>
</div>
<div id="hideShop" style="display:block">
   <label>Shop name:</label><input type="text" name="Shop" placeholder="Enter Shop Name" id="Shop1" required>
</div>
<div id="hideNumber" style="display:block">
   <label>Unit number:</label><input type="text" name="Unit-number" placeholder="Enter Unit Number" id="Unit1" required>
</div>
<div id="hideHouseNumber" style="display:block">
   <label>House number:</label><input type="text" name="House-number" placeholder="Enter House Number"  id="House1" required>
</div>
<div id="hideContactNumber" style="display:block">
   <label>Recipient contact number:</label><input type="text" name="Contact-number" placeholder="Enter Contact Number" required>
</div>
<div id="hideName" style="display:block">
   <label>Recipient name:</label><input type="text" name="Recipient-number" placeholder="Enter Recipient Name" required>
</div>
<input type="hidden" name="NLgrams" id="NLgrams" value="">
<input type="hidden" name="DPgrams" id="DPgrams" value="">
<input type="hidden" name="BWgrams" id="BWgrams" value="">
<input type="hidden" name="OCgrams" id="OCgrams" value="">
<input type="hidden" name="PRgrams" id="PRgrams" value="">
<input type="hidden" name="CCgrams" id="CCgrams" value="">
<input type="hidden" name="CCESgrams" id="CCESgrams" value="">
<input type="hidden" name="PEgrams" id="PEgrams" value="">
<input type="hidden" name="auth" value="<?php echo $_GET['auth'] ?>">
<input type="hidden" name="totalamount" value="<?php echo $total ?>">
<input type="submit" name="Pay" value="Submit">
</form> 
</div></div></div></div></div></div></div></article></div></div></div></div>

<footer class="footer-container color-scheme-light">
<div class="container main-footer">
</div>
<div class="copyrights-wrapper copyrights-centered">
<div class="container">
<div class="min-footer">
<div class="col-left"> 
<i class="fa fa-copyright">
</i> 
2021 
<span>
Powered by the SAPS and TIA [<a href="A3.php?auth=<?php echo $_GET['auth'];?>">About us</a>]<br>Terms and conditions [<a href="A1.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">Here</a>]
</span>
<br>Contact us <a href="C.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">[Here]</a></div></div></div></div></footer></div>
<div class="basel-close-side">
</div>
<div class="basel-toolbar icons-design-line basel-toolbar-label-show">
<div class="basel-toolbar-shop basel-toolbar-item"> 
<a href="Items.php?username=<?php echo $_GET['username'];?>&auth=<?php echo $_GET['auth'];?>">
<span class="basel-toolbar-label"> 
Items
</span> </a></div>
<div class="king"> 
<img src="https://img.icons8.com/ios-glyphs/30/000000/medieval-crown.png"/>
</div>
<div class="queen"> 
<img src="https://img.icons8.com/pastel-glyph/30/000000/like--v1.png"/>
</div>
<div class="lighter">  
<img src="https://img.icons8.com/pastel-glyph/30/000000/hand-lighter-without-flame.png"/>
</a></div></div> 
</div>
<a href="#" class="scrollToTop basel-tooltip">
Scroll To Top
</a> 

</div> 
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"> </button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"> </button><div class="pswp__caption"><div class="pswp__caption__center">
</div></div></div></div></div> 

<script src="159ee3662dfb9514a247e01325dcd82e.js" data-minify="1" defer>
</script>
<script 
src="Order.js" >
</script>
<script 
src="DeliveryPriceDisplay.js" >
</script>
<script 
src="Values.js" >
</script>
<script 
src="Inputhide.js" >
</script>
<script 
src="Form.js" >
</script>
<script 
src="Deliverypricedisplay.js" >
</script>
</body>
</html>