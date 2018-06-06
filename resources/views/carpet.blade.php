@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="carpetSortController">
		<h2>Шины</h2>
		<div class="row" ng-controller="cart">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<div>
						<!-- carpet brand -->
						<h5><strong>Бренд</strong></h5>
						<select  class="form-control" name="carpetBrand" id="carpetBrand" ng-model="carpetFilter.brand" ng-options="brand for brand in carpetBrand">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						
						<!-- carpet color -->
						<h5><strong>Цвет</strong></h5>
						<select  class="form-control" name="carpetColor" id="carpetColor" ng-model="carpetFilter.color" ng-options="color for color in carpetColor">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						<br>
            <input type="reset" ng-click="resetFilter()" class="btn btn-primary">
            </div>
					</form>
				</div>
			</div>
			<div class="col-md-9">
				<div class="list">
					<div class="row carpetList">
						<div class="col-md-12">
							<div class="item" ng-repeat="carpet in carpet | filter: carpetFilter">
								<a href="">@{{ carpet.brand }}</a>
								<br><br>
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/items/carpet.png') }}" alt="item">
									</div>
									<div class="col-md-5">
										<h4><span>Цвет: </span>@{{ carpet.color }}</h4>
									</div>
									<div class="col-md-4">
										<h4>@{{ carpet.price + ' sum' }}</h4>
										<h4><a href="">подробно...</a></h4>
										<button class="btn-primary" ng-click="addItem(carpet)">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>
					</div>
	      </div>
    
	    <div class="row">
	      <h2>Your Cart:</h2>
	      <ul>
	        <li class="animate-repeat" ng-repeat="item in cart | orderBy:'category'">
	          <div><span>@{{ item.qty + ' x ' + item.brand + ' = ' + getCost(item) }}</span></div>
	      		<div><input type="number" ng-model="item.qty" class="qty"></div>
	          <button class="btn-danger btn-xs" ng-click="removeItem(item);">Remove Item</button>
	          </br>
	          </br>
	        </li>
	      </ul>
	      <h3>Total: @{{ getTotal() }}</h3>
	      <button class="btn-danger" ng-click="clearCart();">Clear Cart</button>
	    </div>
	  </div>
		</div>
	</div>
	<br>
@endsection