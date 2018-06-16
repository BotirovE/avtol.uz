@extends('layouts.app')

@section('content')
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="cartMain">
					<h3>Корзина</h3>
					<table class="table">
        		<tr>
        			<th>Товар</th>
        			<th>Количество</th>
        			<th>Сумма</th>
        			<th></th>
        		</tr>
        		<tr class="animate-repeat" ng-repeat="item in cart">
        			<td>
        				<img src="{{ asset('img/items/title-img.png') }}" class="cartImage" alt="item">
        				<span>@{{ item.brand }}</span>
        			</td>
        			<td>
        				<div class="cartCount">
			      			<button class="btn-sm" id="addItem" ng-click="addItem(item);">
			      				<i class="fas fa-plus-circle"></i>
				      		</button>
			      			<input type="number" readonly ng-model="item.count" class="count" />
				      		<button class="btn-sm" id="removeItemCount" ng-click="removeItemCart(item);">
				      			<i class="fas fa-minus-circle"></i>
				      		</button>
			      		</div>
        			</td>
        			<td>
        				<h4>@{{ getCost(item) }}</h4>
        			</td>
        			<td>
        				<button class="btn btn-danger btn-xs removeItem" ng-click="removeItem(item);">
			          	<i class="far fa-trash-alt"></i>
			          </button>
        			</td>
        		</tr>
        	</table>
		    </div>
			</div>
			<div class="col-md-3">
				<div class="cartSide">
					<h3>Итого:</h3>
				  <h4>Стоимость: @{{ getTotal()| filter:nospace }}</h4>
				  <hr>
					<button class="btn btn-success btn-sm" onclick="location.href='{{ route('checkout')}}'">Оформить заказ</button>
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Очистить корзину</button>
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">
					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Потвеждение</h4>
					      </div>
					      <div class="modal-body">
					        <p>Хотите ли вы очитить корзину?</p>
					      </div>
					      <div class="modal-footer">
				  				<button class="btn btn-danger" ng-click="clearCart();" data-dismiss="modal">Да</button>
					        <button type="button" class="btn btn-success" data-dismiss="modal">Нет</button>
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