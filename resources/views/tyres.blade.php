@extends('layouts.app')
@section('scripts')
	<script type="text/javascript">
		var tyresCategory = @json($category);
		var tyresDiameter = @json($diameter);
    var tyres = @json($tyres->items());
		var tyresSeason = @json($season);
		var tyresBrand = @json($brand);
		var tyresSize = @json($size);
  </script>
@endsection
@section('content')
	<div class="container" ng-controller="tyresSortController">
		<h2>Шины</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<div>
						<!-- Tyres category -->
						<h5><strong>Тип шины</strong></h5>
          	<select  class="form-control" name="tyresCategory" id="tyresCategory" ng-model="filter.category" ng-options="category for category in tyresCategory">
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
						
						<!-- Tyres diameter -->
						<h5><strong>Диаметр</strong></h5>
						<select  class="form-control" name="tyresDiameter" id="tyresDiameter" ng-model="filter.diameter" ng-options="diameter for diameter in tyresDiameter">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						
						<!-- Tyres size -->
						<h5><strong>Размерность</strong></h5>
						<select  class="form-control" name="tyresSize" id="tyresSize" ng-model="filter.size" ng-options="size for size in tyresSize">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>
						<br>
            <input type="reset" ng-click="resetFilter()" class="btn btn-primary" value="Сброс">
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
										<img ng-src="@{{tyre.image}}" alt="@{{tyre.brand}}">
									</div>
									<div class="col-md-5">
										<h4><span>Тип шины: </span>@{{ tyre.category }}</h4>
										<h4><span>Сезонность шин: </span>@{{ tyre.season }}</h4>
										<h4><span>Диаметр: </span>@{{ tyre.diameter }}</h4>
										<h4><span>Размерность: </span>@{{ tyre.size }}</h4>
									</div>
									<div class="col-md-4">
										<h4>@{{ tyre.price + ' sum' }}</h4>
										<h4><a ui-sref="product.detail({tyre: id})" href="{{ route('product') }}">подробно...</a></h4>
										<button class="btn btn-primary" id="addItem" ng-click="addItem(tyre);">Добавить в корзину</button>
									</div>
								</div>
							</div>
							<center>
								{{$tyres->links()}}
							</center>
						</div>
					</div>
	      </div>
		  </div>
		</div>
	</div>
	<br>
@endsection