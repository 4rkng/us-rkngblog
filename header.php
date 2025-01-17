<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();?>
	<!--fontawesome-->
	<script defer src="<?php bloginfo('stylesheet_directory');?>/fonts/fontawesome-free-5.15.1-web/js/all.js"></script>
	<!--google site console-->
	<meta name="google-site-verification" content="AwiHah9Ve70ksPreUDiWZWqh0O77uL-nqXIENzhFcRI" />
</head>

<body <?php body_class();?>>
<?php do_action('wp_body_open');?>
<div class="site" id="page">
<!--ヘッダ固定ここから-->
<header class="sticky-top">
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap');?></a>

		<nav id="main-nav" class="navbar navbar-expand-lg navbar-light shadow-sm p-2 fadein_navbar">

	<!--container class-->
		<?php if ('container' == $container): ?>
			<div class="container">
		<?php endif;?>


		<div id="nav_title_area">
					<!-- Your site title as branding in the menu -->

	<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><img src="<?php bloginfo('stylesheet_directory');?>/src/svg/blog_logo/blog_title.svg" width="100%" height="100%"></img></a>

<!-- end custom logo -->
</div>
	<div class="d-flex flex-row order-2 order-lg-3">
	<!--social media icon-->
	<span class="header-sns-link">
		<a href="https://don.mamemo.online/@rk/"><i class="fab fa-mastodon"></i></a>
		<a href="https://co.misskey.io/@rk/">
<svg class="svg-inline--fa fa-w-16 fa-fw"aria-hidden="true" focusable="false" role="img" version="1.1" viewBox="0 0 225.24 256.53" xmlns="http://www.w3.org/2000/svg"><path d="m112.63 0c-4.0923 0-7.873 2.183-9.9199 5.7266-5.7762 10.005-12.904 22.35-18.006 31.187-4.1125 7.1231-4.1125 15.896 0 23.02 5.0963 8.8286 12.217 21.157 17.99 31.158 2.0498 3.5493 5.836 5.7363 9.9355 5.7363s7.8877-2.187 9.9375-5.7363c5.7734-10.001 12.891-22.328 17.988-31.158 4.1125-7.1216 4.1125-15.896 0-23.02-5.1021-8.8372-12.228-21.182-18.006-31.187-2.0454-3.5435-5.8276-5.7266-9.9199-5.7266zm0 8.6426c1.0054 0 1.9328 0.53621 2.4356 1.4062l18.006 31.186c2.5683 4.4481 2.5683 9.9288 0 14.377-5.0978 8.83-12.215 21.157-17.99 31.158-0.5056 0.8758-1.44 1.416-2.4512 1.416s-1.9456-0.54022-2.4512-1.416c-5.7734-10.001-12.891-22.328-17.988-31.156-2.5683-4.4496-2.5683-9.9308 0-14.379 5.1021-8.8372 12.228-21.18 18.004-31.186 0.50272-0.87004 1.4315-1.4062 2.4355-1.4062zm101.13 49.76c-11.553 3.46e-4 -25.805 0.001897-36.01 0.001953-8.225-2e-6 -15.823 4.3867-19.936 11.51-5.0976 8.8278-12.216 21.156-17.99 31.156-2.0489 3.5498-2.0498 7.9243 0 11.475 2.0498 3.5503 5.8388 5.7378 9.9375 5.7383 11.548-6.8e-4 25.783-0.00176 35.979-0.00195 8.2238 7.2e-4 15.823-4.3867 19.936-11.51 5.1022-8.8371 12.23-21.179 18.006-31.186 2.0461-3.5432 2.0462-7.911 0-11.455-2.0462-3.5441-5.8296-5.7276-9.9219-5.7285zm-202.27 0.02539c-4.0915-3.53e-4 -7.8738 2.1844-9.9199 5.7285-2.0462 3.5441-2.0453 7.9107 0 11.455 5.7768 10.005 12.904 22.348 18.006 31.186 4.1125 7.123 11.712 11.51 19.938 11.51 10.194 7.3e-4 24.429-6.7e-4 35.977 0 4.0987-5e-4 7.8877-2.186 9.9375-5.7363 2.0498-3.5503 2.0489-7.9248 0-11.475-5.7745-10-12.892-22.328-17.99-31.158-4.1112-7.1223-11.711-11.51-19.936-11.51-10.204-5.7e-5 -24.458-9.03e-4 -36.012 0zm27.98 79.814c-8.225-1e-5 -15.825 4.3887-19.938 11.512-5.0976 8.8278-12.214 21.156-17.988 31.156-2.0489 3.5498-2.0498 7.9224 0 11.473 2.0498 3.5503 5.8388 5.7378 9.9375 5.7383 11.548-6.8e-4 25.783 1.9e-4 35.979 0 8.2238 7.2e-4 15.823-4.3867 19.936-11.51 5.1022-8.8371 12.228-21.181 18.004-31.188 2.0461-3.5432 2.0462-7.911 0-11.455-2.0462-3.5441-5.8277-5.7257-9.9199-5.7266-11.553 3.4e-4 -25.805-6e-5 -36.01 0zm110.3 0.02343c-4.0915-3.4e-4 -7.8738 2.1844-9.9199 5.7285s-2.0473 7.9107-0.00196 11.455c5.7768 10.005 12.904 22.348 18.006 31.186 4.1125 7.1231 11.712 11.51 19.938 11.51 10.194 7.3e-4 24.429-6.7e-4 35.977 0 4.0986-5e-4 7.8877-2.186 9.9375-5.7363 2.0498-3.5503 2.0489-7.9248 0-11.475-5.7745-10-12.892-22.328-17.99-31.158-4.1112-7.1223-11.711-11.51-19.936-11.51-10.204-5e-5 -24.456-8.9e-4 -36.01 0zm-110.3 8.6192c10.204-6e-5 24.457 3.4e-4 36.01 0 1.0048 3.5e-4 1.9335 0.53676 2.4355 1.4062 0.50272 0.87074 0.50211 1.9421 0 2.8125l-18.004 31.186c-2.568 4.4483-7.3148 7.1896-12.451 7.1895-10.196 2e-4 -24.43-0.00139-35.979-0.00196-1.0113 4e-5 -1.9475-0.53833-2.4531-1.4141-0.5056-0.87572-0.50566-1.9563 0-2.832 5.7745-10 12.891-22.327 17.988-31.156 2.5693-4.449 7.3168-7.1896 12.453-7.1894zm110.3 0.02343h36.01c5.1364-1.8e-4 9.8832 2.7412 12.451 7.1895 5.0981 8.8298 12.216 21.157 17.99 31.158 0.50566 0.87576 0.5056 1.9544 0 2.8301-0.5056 0.87573-1.4419 1.416-2.4531 1.416-11.548-6.7e-4 -25.782-5.2e-4 -35.977 0-5.1376-5.4e-4 -9.8851-2.7411-12.453-7.1894-5.1022-8.8372-12.227-21.18-18.004-31.186-0.50211-0.87039-0.502-1.943 0-2.8125 0.50271-0.87073 1.4307-1.4059 2.4356-1.4062zm-37.154 12.793c-4.0923 0-7.875 2.183-9.9219 5.7266-5.7762 10.005-12.902 22.35-18.004 31.188-4.1125 7.1231-4.1125 15.896 0 23.02 5.0963 8.8286 12.215 21.157 17.988 31.158 2.0498 3.5493 5.838 5.7363 9.9375 5.7363s7.8877-2.187 9.9375-5.7363c5.7734-10.001 12.891-22.328 17.988-31.158 4.1125-7.1216 4.1125-15.896 0-23.02-5.1021-8.8372-12.228-21.182-18.006-31.188-2.0454-3.5435-5.8276-5.7266-9.9199-5.7266z" fill="currentColor"/></svg>
				</a>
			</span>
				<!--スマフォ向けバーガボタン-->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap');?>">
					<span class="navbar-toggler-icon"></span>
				</button>
		</div>
<!--subtitle-->
<div class="subtitle_navbar">柊陸凪の雑記帳。</div>


				<!--検索バーの追加-->
				<?php
add_filter('wp_nav_menu_items', 'add_search_box_to_menu', 10, 2);
function add_search_box_to_menu($items, $args)
{
    if ($args->theme_location == 'primary') {
        return $items . "<li class='search-bar mb-2 menu-item nav-item nav-search form-inline'>
						<form action='https://blog.rikunagiweb.jp/' id='searchform' method='get'>
							<input class='field form-control' type='text' name='s' id='s' placeholder='Search'/>
							<button type='submit' class='btn btn-outline-primary'><i class='fas fa-search form-control-feedback'></i>   検索</button>
							</li>";
    }

    return $items;
}
?>
				<!-- The WordPress Menu goes here -->
				<?php
wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'container_class' => 'collapse navbar-collapse order-3 order-lg-2',
        'container_id' => 'navbarNavDropdown',
        'menu_class' => 'navbar-nav ml-auto',
        'fallback_cb' => '',
        'menu_id' => 'main-menu',
        'depth' => 2,
        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
    )
);?>
			<?php if ('container' == $container): ?>


			</div><!-- .container -->
			<?php endif;?>




		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	</header><!--ヘッダ固定ここまで-->
