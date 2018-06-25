@extends('layouts.app')
@section('scripts')
	<script type="text/javascript">
		var rimsGap = @json($gap);
		var rimsSize = @json($size);
		var rimsColor = @json($color);
		var rimsBrand = @json($brand);
    var rims = @json($wheels->items());
		var rimsDiameter = @json($diameter);
  </script>
@endsection
@section('content')
	<div class="container" ng-controller="rimsSortController">
		<h2>Диски</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<div>
						<!-- Rims brand -->
						<h5><strong>Бренд</strong></h5>
						<select  class="form-control" name="rimsBrand" id="rimsBrand" ng-model="rimsFilter.brand" ng-options="brand for brand in rimsBrand">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

            <!-- Rims size -->
						<h5><strong>Размер</strong></h5>
						<select  class="form-control" name="rimsSize" id="rimsSize" ng-model="rimsFilter.size" ng-options="size for size in rimsSize">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

            <!-- Rims gap -->
						<h5><strong>Отверстия</strong></h5>
						<select  class="form-control" name="rimsGap" id="rimsGap" ng-model="rimsFilter.gap" ng-options="gap for gap in rimsGap">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

 						<!-- Rims Hub diameter -->
						<h5><strong>Диаметр ступицы, мм</strong></h5>
						<select  class="form-control" name="rimsDiameter" id="rimsDiameter" ng-model="rimsFilter.diameter" ng-options="diameter for diameter in rimsDiameter">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

            <!-- Rims color -->
						<h5><strong>Цвет диска</strong></h5>
						<select  class="form-control" name="rimsColor" id="rimsColor" ng-model="rimsFilter.color" ng-options="color for color in rimsColor">
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
					<div class="row rimsList">
						<div class="col-md-12">
							<div class="item" ng-repeat="rim in rims| filter: rimsFilter">
								<a href="">@{{ rim.brand }}</a>
								<br><br>
								<div class="row">
									<div class="col-md-3">
										<img ng-src="@{{rim.image}}" alt="@{{rim.brand}}">
									</div>
									<div class="col-md-5">
										<h4><span>Отверстия: </span>@{{ rim.gap }}</h4>
										<h4><span>Размер: </span>@{{ rim.size }}</h4>
										<h4><span>Диаметр ступицы, мм: </span>@{{ rim.diameter }}</h4>
										<h4><span>Цвет диска: </span>@{{ rim.color }}</h4>
									</div>
									<div class="col-md-4">
										<h4>@{{ rim.price + ' sum' }}</h4>
										<h4><a href="">подробно...</a></h4>
										<button class="btn btn-primary btn-sm" ng-click="addItem(rim)">Добавить в корзину</button>
									</div>
								</div>
							</div>
							<center>
								{{$wheels->links()}}
							</center>
						</div>
					</div>
	      </div>
		  </div>
		</div>
	</div>
	<br>
@endsection