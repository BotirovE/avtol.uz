@extends('layouts.app')
@section('scripts')
<script type="text/javascript">
	$(document).ready(function () {
    $('#yourphone').usPhoneFormat({
      format: '(xx) xxx-xxxx',
    });
  });
</script>	
@endsection
@section('content')
	<br />
	<div class="container ordering">
		<h3>ОФОРМЛЕНИЕ ЗАКАЗА</h3>
		<br />
		<div class="row">
			<div class="col-md-8">
				<form action="">
					<h4>ВЕРИФИКАЦИЯ ТЕЛЕФОНА*</h4><br />
					<div class="phoneVerify">
						<div class="row">
							<div class="col-md-6">
								<input type='text' id='yourphone' class="form-control" placeholder="+9989(__)___-____" required/>
								<p>Введите номер телефона чтобы получить код активации</p>
							</div>
							<div class="col-md-6">
								<button class="btn btn-info">Получить код активации</button>
							</div>
						</div>
					</div>
					<br />
					<h4>КОНТАКТНАЯ ИНФОРМАЦИЯ</h4><br />
					<div class="contactInfo">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Имя *" required><br />	
								<input type="text" class="form-control" placeholder="Фамилия *" required>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" placeholder="Отчество"><br />	
								<input type="text" class="form-control" placeholder="Электронная почта">
							</div>
						</div>
					</div>
					<br />
					<h4>СПОСОБ ДОСТАВКИ</h4><br />
					<div class="delivery">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label class="method active">
									<input type="radio" ng-model="delivery" value="standart" name="delivery" checked="checked">
									<span>Стандартная доставка</span>
									<p>Доставка в течение 24 часов после получения заказа и онлайн-оплаты (бесплатно)</p>
								</label>
							</div>
							<div class="col-md-6 col-sm-6">
								<label class="method">
									<input type="radio" ng-model="delivery" value="express" name="delivery">
									<span>Экспресс доставка</span>
									<p>При необходимости они будут доведены до ближайшей вулканизации или по адресу клиента. Стоимость услуги 15 000 сум</p>
								</label>
							</div>
						</div>
					</div>
					<br />
					<h4>АДРЕС</h4><br />
					<div class="address">
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-tabs">
								  <li class="active">
								  	<a data-toggle="tab" class="deliveryType" href="#home">
												Доставка на дом или в офис
												<p>Товар будет доставлен в удобное для Вас место.</p>
											</a>
										</li>
								  <li>
								  	<a data-toggle="tab" class="deliveryType" href="#map">
								  		Выбрать Pick-up Point.
								  		<p>Забрать товар из выбранного Pick-up Point на карте.</p>
								  	</a>
									</li>
								</ul>

								<div class="tab-content">
								  <div id="home" class="tab-pane fade in active">
								  	<br />
								    <p>Товар будет доставлен в удобное для Вас место.</p>
								    <br />
								    <form action="">
								    	<div class="row">
									    	<div class="col-md-6">
								    			{{-- <input type="text" class="form-control" placeholder="Район*" required> --}}
								    			<select name="" id="" class="form-control" required>
								    				<option value="" selected disabled hidden>Район*</option>
								    				<option value="">Сергелийский район</option>
								    				<option value="">Мирзо-Улугбекский район</option>
								    				<option value="">Мирабадский район</option>
								    				<option value="">Бектемирский район</option>
								    				<option value="">Сабир-Рахимовский район</option>
								    				<option value="">Хамзинский район</option>
								    				<option value="">Юнусабадский район</option>
								    				<option value="">Учтепинский район</option>
								    				<option value="">Шайхантахурский район</option>
								    				<option value="">Чиланзарский район</option>
								    				<option value="">Яккасарайский район</option>
								    			</select>
									    	</div>
									    	<div class="col-md-6">
									    		<input type="text" class="form-control" placeholder="Улица*" required>
									    	</div>
								    	</div>
								    	<br />
								    	<div class="row">
								    		<div class="col-md-6">
								    			<input type="text" class="form-control" placeholder="Номер дома*" required>
								    		</div>
								    		<div class="col-md-6">
								    			<input type="text" class="form-control" placeholder="Этаж">
								    		</div>
								    	</div>
								    	<br />
								    	<div class="row">
								    		<div class="col-md-6">
								    			<input type="text" class="form-control" placeholder="Подъезд">
								    		</div>
								    		<div class="col-md-6">
								    			<input type="text" class="form-control" placeholder="Квартира">
								    		</div>
								    	</div>
								    	<br />
								    </form>
								  </div>
								  <div id="map" class="tab-pane fade">
								    <p>Укажите адрес</p>
								    <form action="" method="post">
					            <div class="col-md-8">
					              <div class="mapBody" style="height: 400px;padding: 6px">
					                <div id="navigationMap1" style="height: 100%; width: 100%;"></div>
					              </div>
					            </div>
					            <div class="col-md-4">
					              <div class="form-group col-md-12">
					                <h4>УКАЖИТЕ АДРЕС</h4>
					                <div><br /></div>
					                <textarea rows="3" style="resize: none" name="address_a" class="form-control" id="trucking_address_a" placeholder="Куда"></textarea>
					              </div>
					              <input type="hidden" name="point_a" id="trucking_point_a">
					              <div class="col-md-12"><hr /></div>
					              <div class="col-md-12">
					                <button type="button" class="btn btn-block btn-warning" onclick="refreshTrucking()">Очистить</button>
					                <div><br /></div>
					                <button type="button" class="btn btn-block btn-info">Сохранить</button>
					              </div>
					            </div>
					          </form>
								  </div>
							  </div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<br /><br /><br />
				<div class="orderList">
					<div class="container-fluid">
						<div class="row"><h4 class="orderHeader">Состав заказа</h4></div>
						<br />
						<div class="row">
							<ul class="list-group">
							  <li class="list-group-item animate-repeat" ng-repeat="item in cart">
							  	<img src="" alt="item image">
							  	<h4 class="brandName">@{{ item.brand }}</h4>
							  	<span class="itemCount">@{{ item.count + 'шт x ' + getCost(item) + ' сум'}}</span>
							  </li>
							</ul>
							<hr />
						</div>
						<div class="row">
							<h4>Доставка:</h4>
							<div ng-switch="delivery">
							  <div ng-switch-when="standart">
							    <h5><strong>Стандартная доставка</strong></h5>
									<p>Доставка в течение 24 часов после получения заказа и онлайн-оплаты (бесплатно)</p>
							  </div>
							  <div ng-switch-when="express">
							    <h5><strong>Экспресс доставка</strong></h5>
									<p>При необходимости они будут доведены до ближайшей вулканизации или по адресу клиента. Стоимость услуги 15 000 сум</p>
							  </div>
							</div>
						</div>
						<div class="row">
							<hr />
							<div ng-switch="delivery">
							  <div ng-switch-when="standart">
							    <h4>Итого: <span class="total">@{{ getTotal()}} сум</span></h4>
							  </div>
							  <div ng-switch-when="express">
							    <h4>Итого: <span class="total">@{{ getTotal() + 15000}} сум</span></h4>
							  </div>
							</div>
						</div>
						<div class="row">
							<hr />
							<button type="button" class="btn btn-block btn-info">Оформить заказ</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br />
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript">
	    //----- Maps Scripts Start -----//
	    var navigationMap;
	    var startPoint = false;
	    var distance = 0;
	    var path;

	    function initMaps() {

	        navigationMap = new ymaps.Map("navigationMap1", {
	          center: [41.3109772515277, 69.27950934178443],
	          zoom: 14,
	          controls: []
	        }, {searchControlProvider: 'yandex#search'});

	        navigationMap.controls.add('geolocationControl');
	        navigationMap.controls.add('searchControl');
	        navigationMap.controls.add('zoomControl');
	        navigationMap.controls.get('searchControl').options.set('size', 'large');

	        navigationMap.events.add('click', function (event) {
	            var coords = event.get('coords');
	            if (startPoint === false) {
	                startPoint = new ymaps.Placemark(coords, {balloonContent: 'Пункт А'}, {
	                    draggable: true,
	                    preset: 'islands#redHomeIcon',
	                    iconColor: '#F44336'
	                });
	                navigationMap.geoObjects.add(startPoint);

	                startPoint.events.add('dragend', function () {
	                    setPoint(startPoint);
	                });

	                setPoint(startPoint);
	                return;
	            }
	        })
	    }

	    function setPoint(placemark) {
	        var coords = placemark.geometry.getCoordinates();
	        ymaps.geocode(coords).then(function (res) {
	            var firstGeoObject = res.geoObjects.get(0);
	            if (placemark === startPoint) {
	                document.getElementById("trucking_address_a").value = firstGeoObject.getAddressLine();
	                document.getElementById("trucking_point_a").value = coords;
	            }

	        });
	    }

	    // function setStartPoint() {
	    //     if (startPoint !== false) {
	    //         navigationMap.geoObjects.remove(startPoint);
	    //         navigationMap.geoObjects.remove(path);
	    //         startPoint = false;
	    //         path = null;
	    //         document.getElementById("trucking_address_a").value =
	    //                         document.getElementById("trucking_point_a").value = "";
	    //     }
	    // }

	    ymaps.ready(initMaps);
			function refreshTrucking() {
			        document.getElementById("trucking_address_a").value =
			                        document.getElementById("trucking_point_a").value = "";
			        startPoint = endPoint = false;
			        navigationMap.geoObjects.removeAll();
			    }
	    //----- Maps Scripts End -----//
	</script>
@endsection
