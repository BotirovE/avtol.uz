@extends('layouts.app')

@section('content')
	<div class="container" ng-controller="carpetSortController">
		<h2>Шины</h2>
		<div class="row">
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
            <input type="reset" ng-click="resetFilter()" class="btn btn-primary" value="Сброс">
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
										<button class="btn btn-primary" ng-click="addItem(carpet)">Добавить в корзину</button>
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