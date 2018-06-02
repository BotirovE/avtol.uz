@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="accumSortController">
		<h2>Аккумуляторы</h2>
		<div class="row" ng-controller="cart">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<div>
						<!-- Accum brand -->
						<h5><strong>Бренд</strong></h5>
						<select  class="form-control" name="accumBrand" id="accumBrand" ng-model="brand" ng-options="brand for brand in accumBrand">
              <option value="" disabled selected hidden>Выберите бренд АКБ</option>
            </select>

            <!-- Accum name -->
						<h5><strong>Наименование АКБ</strong></h5>
						<select  class="form-control" name="accumName" id="accumName" ng-model="name" ng-options="name for name in accumName">
              <option value="" disabled selected hidden>Выберите наименование АКБ</option>
            </select>

            <!-- Accum capacity -->
						<h5><strong>Емкость АКБ (А/ч)</strong></h5>
						<select  class="form-control" name="accumCapacity" id="accumCapacity" ng-model="capacity" ng-options="capacity for capacity in accumCapacity">
              <option value="" disabled selected hidden>Выберите емкость АКБ</option>
            </select>

            <!-- Accum size -->
						<h5><strong>Размер АКБ</strong></h5>
						<select  class="form-control" name="accumSize" id="accumSize" ng-model="size" ng-options="size for size in accumSize">
              <option value="" disabled selected hidden>Выберите размер АКБ</option>
            </select>
						
						<!-- Accum size -->
						<h5><strong>АКБ для авто</strong></h5>
						<select class="form-control" name="accumAvto" id="accumAvto" ng-model="avto" ng-options="avto for avto in accumAvto">
              <option value="" disabled selected hidden>Выберите АКБ для авто</option>
            </select>
						<br>
            <input type="reset" ng-click="resetFilter()" class="btn btn-primary">
            </div>
					</form>
				</div>
			</div>
			<div class="col-md-9">
				<div class="list">
					<div class="row accumList">
						<div class="col-md-12">
							<div class="item" ng-repeat="accum in accum| filter: type | filter: diametr | filter: season | filter: brand | filter: size">
								<a href="">@{{ accum.brand }}</a>
								<br><br>
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/items/accum1.png') }}" alt="item">
									</div>
									<div class="col-md-5">
										<h4><span>Наименование АКБ: </span>@{{ accum.name }}</h4>
										<h4><span>Емкость АКБ (А/ч): </span>@{{ accum.capacity }}</h4>
										<h4><span>Размер АКБ: </span>@{{ accum.size }}</h4>
										<h4><span>АКБ для авто: </span>@{{ accum.avto }}</h4>
									</div>
									<div class="col-md-4">
										<h4>@{{ accum.price + ' sum' }}</h4>
										<h4><a href="">подробно...</a></h4>
										<button class="btn-primary" ng-click="addItem(accum)">Add to Cart</button>
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