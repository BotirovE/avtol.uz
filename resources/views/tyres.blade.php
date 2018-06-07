@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="tyresSortController">
		<h2>Шины</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<div>
						<!-- Tyres type -->
						<h5><strong>Тип шины</strong></h5>
          	<select  class="form-control" name="tyresType" id="tyresType" ng-model="filter.type" ng-options="type for type in tyresType">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						
						<!-- Tyres season -->
						<h5><strong>Сезонность шин</strong></h5>
						<select  class="form-control" name="tyresSeason" id="tyresSeason" ng-model="filter.season" ng-options="season for season in tyresSeason">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						<hr>
						<!-- Tyres brand -->
						<h5><strong>Бренд</strong></h5>
						<select  class="form-control" name="tyresBrand" id="tyresBrand" ng-model="filter.brand" ng-options="brand for brand in tyresBrand">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						
						<!-- Tyres diametr -->
						<h5><strong>Диаметр</strong></h5>
						<select  class="form-control" name="tyresDiametr" id="tyresDiametr" ng-model="filter.diametr" ng-options="diametr for diametr in tyresDiametr">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						
						<!-- Tyres size -->
						<h5><strong>Размерность</strong></h5>
						<select  class="form-control" name="tyresSize" id="tyresSize" ng-model="filter.size" ng-options="size for size in tyresSize">
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
					<div class="row tyresList">
						<div class="col-md-12">
							<div class="item" ng-repeat="tyre in tyres| filter:filter">
								<a href="{{ route('product') }}">@{{ tyre.brand }}</a>
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
										<h4><a ui-sref="product.detail({tyre: id})" href="{{ route('product') }}">подробно...</a></h4>
										<button class="btn btn-primary" ng-click="addItem(tyre)">Add to Cart</button>
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