<!DOCTYPE>

<html>
  <head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="/assets/css/theme.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/assets/js/init.js"></script>
  </head>
  <body>
@section('header')
 <header>
	<nav role="navigation">
		<div class="nav-inner">
			<a href="" class="logo">
				<div>
					<img src="http://www.w3schools.com/css/trolltunga.jpg" alt="">
				</div>
			</a>
			<ul class="nav-items">
				<li>
					<a href="" class="line-hoverable">
						Գլխավոր
					</a>
				</li>
				<li>
					<a href="" class="line-hoverable">
						Մեր Մասին
					</a>
				</li>
				<li>
					<a href="" class="line-hoverable">
						Հագուստ
					</a>
				</li>
				<li>
					<a href="" class="line-hoverable">
						Աքսեսուարներ
					</a>
				</li>
			</ul>
			<ul class="nav-tools">
				<li class="input-search" >
					<form action="/search" method="get">
						<input type="text" name="q" placeholder="Search" value="" autocomplete="off">
						<input type="hidden" name="type" value="product">
						<i class="fa fa-search"></i>
						<button id="close-search" type="button"><i class="fa fa-close"></i></button>
					</form>
				</li>
				<li class="tool-search" >
					<a href="/search" class="line-hoverable" title="Search">
						<i class="fa fa-search"></i>
					</a>
				</li>
					<li class="tool-currency" >
						<a href="#" class="line-hoverable" title="Change currency"><span class="selected-currency">AUD</span> <span class="currency-symbol">$</span></a>
						<ul style="display:none;">
							<li data-code="AUD">AUD</li>
							<li data-code="USD">USD</li>
							<li data-code="EUR">EUR</li>
							<li data-code="GBP">GBP</li>
							<li data-code="NZD">NZD</li>
							<li data-code="CAD">CAD</li>
						</ul>
						<select class="currency-picker" name="currencies">
							<option value="AUD" selected="selected">AUD</option>
							<option value="USD">USD</option>
							<option value="EUR">EUR</option>
							<option value="GBP">GBP</option>
							<option value="NZD">NZD</option>
							<option value="CAD">CAD</option>
						</select>
					</li>
					<li class="tool-login">
						<a href="/account/login" class="line-hoverable" title="Login to account">Login</a>
					</li>
				<li class="tool-wishlist">
					<a href="#" data-open-wishlist="" title="Wishlist">
						<i class="fa fa-heart-o tooltipstered"></i>
					</a>
				</li>
				<li class="tool-cart">
					<a href="#" data-open-cart="" title="Shopping bag">
						<span class="cart-item-count">0</span>
						<img src="//cdn.shopify.com/s/files/1/0071/3552/t/30/assets/shopping_bag.png?4091088723617677264" class="tooltipstered">
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
 @show     
    <div>
      @yield('content')
  </div>
  </body>
</html>