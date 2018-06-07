@extends('layouts.app')

@section('content')
	<div class="container">
		<h3>Name of the tyre</h3>
		<div class="individualItem">
			<div class="row">
				<div class="col-md-2">
					<h3 class="tyre-Brand">Tyre Brand</h3>
					<br>
					<img src="{{ asset('img/items/tyres.png') }}" alt="">
				</div>
				<div class="col-md-5">
					<div class="itemInfo">
						<br>
						<h4><span>Тип шины: </span>@{{ tyre.type }}</h4>
						<h4><span>Сезонность шин: </span>@{{ tyre.season }}</h4>
						<h4><span>Диаметр: </span>@{{ tyre.diametr }}</h4>
						<h4><span>Размерность: </span>@{{ tyre.size }}</h4>
						<h4><span>Цена: </span>@{{ tyre.price }}</h4>
					</div>
				</div>
				<div class="col-md-5">
					<center>
						<div class="priceBlock">
							<h4><span>605000</span> сум</h4>
							<br>
							<br>
							<button class="btn btn-success" ng-click="addItem(tyre)">Add to Cart</button>
						</div>
					</center>
				</div>
			</div>
		</div>
		<br>
		<div class="itemDescr">
			<h3>Item Description</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nostrum aperiam, porro qui velit. Rerum fuga nisi saepe, aspernatur laboriosam ex, nostrum, suscipit beatae maiores neque quam cum, ut sapiente.</p>
		</div>
	</div>
	<br>
@endsection