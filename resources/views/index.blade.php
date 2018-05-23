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
				       	  <a class="collapsed" href="{{route('accum')}}">Аккумулятор</a>
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
			  </div>
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
					<div class="carousel-inner mainCarousel">
					  <div class="overlay"></div>
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
			  <div class="row">
			  	<div class="col-md-3">
					  <div class="main-items items1">
					  	<div class="items-img">
					  	  <img src="{{ asset('img/items/accum.png') }}" alt="accumulator">
					  	</div>
					  	<div class="item-name">
						  <h4>Аккумуляторы</h4>
					  	</div>
					  </div>
			  	</div>
			  	<br>
			  	<div class="col-md-3">
					  <div class="main-items items1">
					  	<div class="items-img">
					  	  <img src="{{ asset('img/items/tyres.png') }}" alt="tyres">
					  	</div>
					  	<div class="item-name">
						  <h4>Шины</h4>
					  	</div>
					  </div>
			  	</div>
			  	<br><br>
			  	<div class="col-md-3">
			  	  <div class="main-items items2">
					  	<div class="items-img">
					  	  <img src="{{ asset('img/items/carpet.png') }}" alt="carpet">
					  	</div>
					  	<div class="item-name">
					  	  <h4>Полики</h4>
					  	</div>
					  </div>
			  	</div>
			  	<br>
			  	<br>
			  	<br>
			  	<div class="col-md-3">
				  <div class="main-items items3">
				  	<div class="items-img">
				  	  <img src="{{ asset('img/items/rims.png') }}" alt="rims">
				  	</div>
				  	<div class="item-name">
				  	  <h4>Диски</h4>
				  	</div>
				  </div>
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
	  </div>
	  <br>
	</div>
</div>
<br>
</div>
@endsection