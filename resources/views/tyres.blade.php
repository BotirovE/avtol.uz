@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="tyresSortController">
		<h2>Шины</h2>
		<div class="row" ng-controller="cart">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<div>
						<!-- Tyres type -->
						<h5><strong>Тип шины</strong></h5>
          	<select  class="form-control" name="tyresType" id="tyresType" ng-model="type" ng-options="type for type in tyresType">
              <option value="" disabled selected hidden>Выберите тип шин</option>
            </select>
						
						<!-- Tyres season -->
						<h5><strong>Сезонность шин</strong></h5>
						<select  class="form-control" name="tyresSeason" id="tyresSeason" ng-model="season" ng-options="season for season in tyresSeason">
              <option value="" disabled selected hidden>Выберите сезонность шин</option>
            </select>
						<hr>
						<!-- Tyres brand -->
						<h5><strong>Бренд</strong></h5>
						<select  class="form-control" name="tyresBrand" id="tyresBrand" ng-model="brand" ng-options="brand for brand in tyresBrand">
              <option value="" disabled selected hidden>Выберите бренд шин</option>
            </select>
						
						<!-- Tyres diametr -->
						<h5><strong>Диаметр</strong></h5>
						<select  class="form-control" name="tyresDiametr" id="tyresDiametr" ng-model="diametr" ng-options="diametr for diametr in tyresDiametr">
              <option value="" disabled selected hidden>Выберите диаметр шин</option>
            </select>
						
						<!-- Tyres size -->
						<h5><strong>Размерность</strong></h5>
						<select  class="form-control" name="tyresSize" id="tyresSize" ng-model="size" ng-options="size for size in tyresSize">
              <option value="" disabled selected hidden>Выберите размерность шин</option>
            </select>
						<br>
            <input type="reset" ng-click="resetFilter()" class="btn btn-primary">
            </div>
					</form>
				</div>
			</div>
			<div class="col-md-9">
				<div class="list">
					<div class="row tyresList">
						<div class="col-md-12">
							<div class="item" ng-repeat="tyre in tyres| filter: type | filter: diametr | filter: season | filter: brand | filter: size">
								<a href="">@{{ tyre.brand }}</a>
								<br><br>
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/items/title-img.png') }}" alt="item">
									</div>
									<div class="col-md-5">
										<h4><span>Тип шины: </span>@{{ tyre.type }}</h4>
										<h4><span>Сезонность шин: </span>@{{ tyre.season }}</h4>
										<h4><span>Диаметр: </span>@{{ tyre.diametr }}</h4>
										<h4><span>Размерность: </span>@{{ tyre.size }}</h4>
									</div>
									<div class="col-md-4">
										<h4>@{{ tyre.price + ' sum' }}</h4>
										<h4><a href="">подробно...</a></h4>
										<button class="btn-primary" ng-click="addItem(tyre)">Add to Cart</button>
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