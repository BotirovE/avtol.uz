<!-- top navbar  -->
<div class="narbarBlock">
	<div class="topNavbar">
		<nav class="navbar">
		  <div class="container">
		    <ul class="nav navbar-nav">
		      <li><a href="#"> Технически поддержка</a></li>
		      <li><a href="#"> Вопросы и ответы</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li>
		  	  	<a href="#"> 
		  	  	  <i class="far fa-id-badge"></i> Личный кабинет
		  	  	</a>
		  	  </li>
		    </ul>
		  </div>
		</nav>
	</div>
	<!-- end top navbar -->
	<div class="container">
		<nav class="navbar techSupport">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li>
						<h2>Сломался ваш автомобиль?</h2>
						<h4>Тогда звоните нам и мы вам поможем</h4>
		      </li>
		      <li>
		      	<h3>Линия поддержки</h3>
		      	<p class="number pulse">+998991002030</p>
		      </li>
		      <li>
		      	<div id="myCarouselNav" class="carousel slide navCarousel" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="item active">
						      <img src="{{ asset('img/animCar.gif') }}" alt="animated car">
						    </div>
						    <div class="item">
						      <img src="{{ asset('img/animCar2.gif') }}" alt="animated car">
						    </div>
						    <div class="item">
						      <img src="{{ asset('img/animCar3.gif') }}" alt="animated car">
						    </div>
						  </div>
						</div>
					</li>
		    </ul>
		  </div>
		</nav>
	</div>

	<!-- second main nav -->
	<div class="container">
		<nav class="navbar mainNav">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="{{ route('index') }}">AvtoMakon.uz</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li>
			      <form class="navbar-form" action="/action_page.php">
					<div class="input-group">
					  <input type="text" class="form-control search" placeholder="Search">
					  <div class="input-group-btn">
					    <button class="btn btn-default searchBtn" type="submit">
					      <i class="glyphicon glyphicon-search"></i>
					    </button>
					  </div>
					</div>
				  </form>
		        </li>
		        <li class="dropdown">
		        	<div class="dropdown-toggle cart-Logo" data-toggle="dropdown">
		        		<i class="fas fa-shopping-cart"></i>
		        		<span class="cartCounter"><p>@{{ counter() }}</p></span>
		        	</div>
		          <div class="dropdown-menu">
								<div class="panel">
									<div class="panel-heading cart-panel-heading">Корзина</div>
									<div class="panel-body cart-panel-body">
							      <ul class="cartList">
							        <li class="animate-repeat" ng-repeat="item in cart">
							        	<h4>@{{ item.brand }}</h4>
							        	<ul class="nav navbar-nav">
							        		<li>
									      		<div class="itemCount">
									      			<button class="btn-sm" id="addItem" ng-click="addItem(item);">
									      				<i class="fas fa-plus-circle"></i>
										      		</button>
									      			<input type="number" readonly ng-model="item.count" class="count" />
										      		<button class="btn-sm" id="removeItemCount" ng-click="removeItemCart(item);">
										      			<i class="fas fa-minus-circle"></i>
										      		</button>
														</div>
							        		</li>
							        		<li>
								      			<p>@{{ ' = ' + getCost(item) }}</p>
							        		</li>
							        		<li>
									          <button class="btn btn-danger btn-xs" ng-click="removeItem(item);">
									          	<i class="far fa-trash-alt"></i>
									          </button>
							        		</li>
										    </ul>
										    <br />
							        </li>
							      </ul>
							      <br>
							      <hr>
							      <h4>Итого: @{{ getTotal() | filter: nospace}}</h4>
									</div>
									<div class="panel-footer cart-panel-footer">
										<h4><a href="{{ route('basket') }}" class="goToCart">Перейти в корзину</a></h4>
									</div>
								</div>
		          </div>
		          <span id="counter" ng-repeat="item in cart">@{{ countCart() }}</span>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
	<!-- end second main nav -->
</div>
<div class="container">
	<div class="row">
		<ul class="breadcrumb">
		  <li class="breadcrumb-item"><a href="#">Home</a></li>
		  <li class="breadcrumb-item active">Contact us</li>
		</ul>
	</div>
</div>
