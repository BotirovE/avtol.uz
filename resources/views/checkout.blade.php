@extends('layouts.app')

@section('content')
	<script>
    $(document).ready(function () {
      $('#yourphone').usPhoneFormat({
        format: '(xx) xxx-xxxx',
      });
    });
  </script>
	<br>
	<div class="container ordering">
		<h3>ОФОРМЛЕНИЕ ЗАКАЗА</h3>
		<br>
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
									<input type="radio" name="delivery" checked>
									<span>Стандартная доставка</span>
									<p>Доставка в течение 24 часов после получения заказа и онлайн-оплаты (бесплатно)</p>
								</label>
							</div>
							<div class="col-md-6 col-sm-6">
								<label class="method">
									<input type="radio" name="delivery">
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
								  </div>
							  </div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
	<br />
@endsection