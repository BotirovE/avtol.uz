@extends('layouts.app')

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

            <!-- Rims hole -->
						<h5><strong>Отверстия</strong></h5>
						<select  class="form-control" name="rimsHole" id="rimsHole" ng-model="rimsFilter.hole" ng-options="hole for hole in rimsHole">
              <option value="" disabled selected hidden>Выбрать</option>
            </select>

 						<!-- Rims Hub diametr -->
						<h5><strong>Диаметр ступицы, мм</strong></h5>
						<select  class="form-control" name="rimsHubDiametr" id="rimsHubDiametr" ng-model="rimsFilter.hubDiametr" ng-options="hubDiametr for hubDiametr in rimsHubDiametr">
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
							<div class="item" ng-repeat="rims in rims| filter: rimsFilter">
								<a href="">@{{ rims.brand }}</a>
								<br><br>
								<div class="row">
									<div class="col-md-3">
										<img src="{{ asset('img/items/rims1.png') }}" alt="item">
									</div>
									<div class="col-md-5">
										<h4><span>Отверстия: </span>@{{ rims.hole }}</h4>
										<h4><span>Размер: </span>@{{ rims.size }}</h4>
										<h4><span>Диаметр ступицы, мм: </span>@{{ rims.hubDiametr }}</h4>
										<h4><span>Цвет диска: </span>@{{ rims.color }}</h4>
									</div>
									<div class="col-md-4">
										<h4>@{{ rims.price + ' sum' }}</h4>
										<h4><a href="">подробно...</a></h4>
										<button class="btn btn-primary btn-sm" ng-click="addItem(rims)">Добавить в корзину</button>
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