@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="accumSortController">
		<h2>Аккумуляторы</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<div>
						<!-- Accum brand -->
						<h5><strong>Бренд</strong></h5>
						<select  class="form-control" name="accumBrand" id="accumBrand" ng-model="accumFilter.brand" ng-options="brand for brand in accumBrand">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

            <!-- Accum name -->
						<h5><strong>Наименование АКБ</strong></h5>
						<select  class="form-control" name="accumName" id="accumName" ng-model="accumFilter.name" ng-options="name for name in accumName">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

            <!-- Accum capacity -->
						<h5><strong>Емкость АКБ (А/ч)</strong></h5>
						<select  class="form-control" name="accumCapacity" id="accumCapacity" ng-model="accumFilter.capacity" ng-options="capacity for capacity in accumCapacity">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

            <!-- Accum size -->
						<h5><strong>Размер АКБ</strong></h5>
						<select  class="form-control" name="accumSize" id="accumSize" ng-model="accumFilter.size" ng-options="size for size in accumSize">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						
						<!-- Accum size -->
						<h5><strong>АКБ для авто</strong></h5>
						<select class="form-control" name="accumAvto" id="accumAvto" ng-model="accumFilter.avto" ng-options="avto for avto in accumAvto">
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
					<div class="row accumList">
						<div class="col-md-12">
							<div class="item" ng-repeat="accum in accum| filter: accumFilter">
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
	  	</div>
		</div>
	</div>
	<br>
@endsection