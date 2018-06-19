@extends('layouts.app')

@section('content')
<div class="main">
<div class="container">
	<div class="content-body">
	  <div class="row">
	    <div class="col-md-3">
	  	  <div class="categories">
					<div class="categories-title">
	  	  	  <h3>Категории</h3>
					</div>
			  	<div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
			      <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="headingOne">
				       	<h4 class="panel-title">
				       	  <a class="collapsed" href="{{route('tyres')}}" >Шины</a>
				      	</h4>
				      </div>
					  </div>
					  <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="headingOne">
				       	<h4 class="panel-title">
				       	  <a class="collapsed" href="{{route('accums')}}">Аккумулятор</a>
				      	</h4>
				      </div>
					  </div>
					  <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="headingOne">
				       	<h4 class="panel-title">
				       	  <a class="collapsed" href="{{route('rims')}}">Диски</a>
				      	</h4>
				      </div>
					  </div>
					  <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="headingOne">
				       	<h4 class="panel-title">
				       	  <a class="collapsed" href="{{route('carpet')}}">Полики</a>
				      	</h4>
				      </div>
					  </div>
					  <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="headingOne">
				       	<h4 class="panel-title">
				       	  <a class="collapsed" href="#">Партнерство</a>
				      	</h4>
				      </div>
					  </div>
					  <div class="panel panel-default">
				      <div class="panel-heading" role="tab" id="headingOne">
				       	<h4 class="panel-title">
				       	  <a class="collapsed" href="#">О компании</a>
				      	</h4>
				      </div>
					  </div>
					</div>
			  </div><br>
			  <div class="popularGoods">
			  	<h3>Горящие товары</h3>
			  	<hr>
			  	<div class="container-fluid">
				  	<div class="row">
				  		<div class="popularItem">
				  			<a href="" class="quick-view">View item</a>
				  			<a href="">
				  				<img src="{{ asset('img/items/rims1.png') }}" alt="popularGoods">
					  			<div class="captionItem">
					          <h4>Lorem ipsum</h4>
					          <p>We love the Big Apple!</p>
					  			</div>
				  			</a>
					      <a href="#" class="popularMoreBtn">More</a>
				  		</div>
				  	</div>
				  	<hr>
				  	<div class="row">
				  		<div class="popularItem">
				  			<a href="" class="quick-view">View item</a>
				  			<a href="">
				  				<img src="{{ asset('img/items/accum1.png') }}" alt="popularGoods">
					  			<div class="captionItem">
					          <h4>Lorem ipsum</h4>
					          <p>We love the Big Apple!</p>
					  			</div>
				  			</a>
				  			<a href="#" class="popularMoreBtn">More</a>
				  		</div>
				  	</div>
			  	</div>
			  </div>
			  <br>
			</div>
			<div class="col-md-9">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			  	<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					  <li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>
				    <!-- Wrapper for slides -->
					<div class="carousel-inner mainCarousel" id="mainCarousel">
					  <div class="item active">
					    <img src="{{ asset('img/slider/sample-1.jpg') }}" alt="slider">
					    <div class="carousel-caption">
			          <h3>Lorem ipsum</h3>
			          <p>We love the Big Apple!</p>
			        </div>
					  </div>
				    <div class="item">
					    <img src="{{ asset('img/slider/sample-2.jpg') }}" alt="slider">
					    <div class="carousel-caption">
			          <h3>Lorem ipsum</h3>
			          <p>We love the Big Apple!</p>
			        </div>
					  </div>
		  		  <div class="item">
					    <img src="{{ asset('img/slider/sample-3.jpg') }}" alt="slider">
					    <div class="carousel-caption">
			          <h3>Lorem ipsum</h3>
			          <p>We love the Big Apple!</p>
			        </div>
					  </div>
					  <div class="item">
					    <img src="{{ asset('img/slider/sample-4.jpg') }}" alt="slider">
					    <div class="carousel-caption">
			          <h3>Lorem ipsum</h3>
			          <p>We love the Big Apple!</p>
			        </div>
					  </div>
					</div>
			    <!-- Left and right controls -->
					<a class="left" href="#myCarousel" data-slide="prev">
					  <i class="fas fa-caret-left"></i>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right" href="#myCarousel" data-slide="next">
					  <i class="fas fa-caret-right"></i>
					  <span class="sr-only">Next</span>
					</a>
			  </div>
			  <br>
			  <br>
			  <div class="row centerBlock">
			  	<div class="col-md-3">
			  		<a href="">
						  <div class="main-items items1">
						  	<div class="items-img">
						  	  <img src="{{ asset('img/items/accum.png') }}" alt="accumulator">
						  	</div>
						  	<div class="item-name">
							  	<h4>Аккумуляторы</h4>
						  	</div>
						  </div>
					  </a>
			  	</div>
			  	<br>
			  	<div class="col-md-3">
			  		<a href="">
						  <div class="main-items items1">
						  	<div class="items-img">
						  	  <img src="{{ asset('img/items/tyres.png') }}" alt="tyres">
						  	</div>
						  	<div class="item-name">
							  	<h4>Шины</h4>
						  	</div>
						  </div>
					  </a>
			  	</div>
			  	<br><br>
			  	<div class="col-md-3">
			  		<a href="">
				  	  <div class="main-items items2">
						  	<div class="items-img">
						  	  <img src="{{ asset('img/items/carpet.png') }}" alt="carpet">
						  	</div>
						  	<div class="item-name">
						  	  <h4>Полики</h4>
						  	</div>
						  </div>
					  </a>
			  	</div>
			  	<br>
			  	<br>
			  	<br>
			  	<div class="col-md-3">
			  		<a href="">
						  <div class="main-items items3">
						  	<div class="items-img">
						  	  <img src="{{ asset('img/items/rims.png') }}" alt="rims">
						  	</div>
						  	<div class="item-name">
						  	  <h4>Диски</h4>
						  	</div>
						  </div>
					  </a>
			  	</div>
			  </div>
			  <br>
			  <br>
			  <div class="row">
			  	<div class="col-md-4">
			  	  <div class="custom-items item3">
					  	<div class="social img-part-hover"></div>
					  	<div class="item-description">
					  	  <h4>следуйте за нами в социальной сети</h4>
					  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					  	</div>
					  	<div class="moreButton">
					  	  <button>больше</button>
					  	</div>
					  </div>
			  	</div><br>
			  	<div class="col-md-4">
			  	  <div class="custom-items item1">
					  	<div class="img-part img-part-hover"></div>
					  	<div class="item-description">
					  	  <h3>специальные<br>колеса</h3>
					  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					  	</div>
					  	<div class="moreButton">
					  	  <button>больше</button>
					  	</div>
					  </div>
					</div><br>
					<div class="col-md-4">
				  <div class="custom-items item2">
				  	<div class="img-part1 img-part-hover"></div>
				  	<div class="item-description">
				  	  <h3>коврики</h3>
				  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				  	</div>
				  	<div class="moreButton">
				  	  <button>больше</button>
				  	</div>
				  </div>
					</div>
			  </div>
			</div>
	  </div><br>
	  <div class="container">
	  	<div class="row">
			  <div class="offerGuide">
			  	<section class="rubric p-b-30 bg-white">
						<div class="container">
			  			<h4>КАК СДЕЛАТЬ ЗАКАЗ?</h4>
							<div class="row">
								<div class="col-md-3 col-md-3">
									<i class="fas fa-hand-point-up rubric__iconrubric"></i>
									<div class="rubric__infoblock">
										<h3 class="rubric__title">Шаг 1</h3>
										<p class="rubric__info">Выберите товар в каталоге или воспользуйтесь поиском.</p>
									</div>
								</div>
								<div class="col-md-3 col-md-3">
									<i class="fas fa-shopping-cart rubric__iconrubric"></i>
									<div class="rubric__infoblock">
										<h3 class="rubric__title">Шаг 2</h3>
										<p class="rubric__info">Положите товар в корзину, нажав кнопку "В корзину".</p>
									</div>
								</div>
								<div class="col-md-3 col-md-3">
									<i class="fas fa-file-alt rubric__iconrubric"></i>
									<div class="rubric__infoblock">
										<h3 class="rubric__title">Шаг 3</h3>
										<p class="rubric__info">Оформите заказ: укажите желаемое количество товара.</p>
									</div>
								</div>
								<div class="col-md-3 col-md-3">
									<i class="fas fa-truck rubric__iconrubric"></i>
									<div class="rubric__infoblock">
										<h3 class="rubric__title">Шаг 4</h3>
										<p class="rubric__info">Получите товар по любому удобному адресу.</p>
									</div>
								</div>
							</div>
						</div>	<!-- end of container -->
					</section>
			  </div>
			</div>
		  <div class="row">
		  	<div class="recommended">
		  		<h2>Новые добавленные</h2>
		  		<h4>Товары от лучших производителей на Avtol.uz</h4>
		  		<div class="row">
			  		<div class="col-md-4">
			  			<div class="brandItem">
			  				<img src="{{ asset('img/brand/brandAccum.jpg') }}" alt="brand">
			  				<div class="brandItemCaption">
			  					<a href="">Больше</a>
			  				</div>
			  			</div>
			  			<h4>Отличные товары по уникальным ценам</h4>
			  		</div>
			  		<div class="col-md-4">
			  			<div class="brandItem">
			  				<img src="{{ asset('img/brand/brandTyres.png') }}" alt="brand">
			  				<div class="brandItemCaption">
			  					<a href="">Больше</a>
			  				</div>
			  			</div>
			  			<h4>Только любимые бренды</h4>
			  		</div>
			  		<div class="col-md-4">
			  			<div class="brandItem">
			  				<img src="{{ asset('img/brand/brandTyres1.jpg') }}" alt="brand">
								<div class="brandItemCaption">
			  					<a href="">Больше</a>
			  				</div>
			  			</div>
			  		</div>
		  		</div>
		  	</div>
		  </div>
	  </div>
	  <br>
	</div>
</div>
<br>
</div>
@endsection