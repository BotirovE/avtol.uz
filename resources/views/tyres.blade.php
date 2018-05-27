@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>Шины</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="filterBar">
					<form action="">
						<h5><strong>Тип шины</strong></h5>
						<select class="selectpicker form-control" name="orders[]" multiple="multiple">
							<option value="" selected="">Легковые шины</option>
							<option value="">Легко-грузовые шины</option>
							<option value="">Грузовые шины</option>
							<option value="">Сельскохозяйственные шины</option>
							<option value="">Шины для спец техники</option>
          	</select>

						<h5><strong>Сезонность шин</strong></h5>
						<select name="" class="form-control" id="tyresSeason">
							<option value="" selected="">Летные шины</option>
							<option value="">Зимные шины</option>
							<option value="">Всесезонные шины</option>
						</select>	
						<hr>
						<h5><strong>Бренд</strong></h5>
						<select class="selectpicker form-control" name="orders[]"  data-live-search="true" multiple="multiple" id="tyresBrand">
							<option value="" selected>Hankook</option>
							<option value="">Cooper</option>
							<option value="">Dunlop</option>
							<option value="">Pirelli</option>
						</select>
						<h5><strong>Диаметр</strong></h5>
						<select class="selectpicker form-control" name="orders[]" multiple="multiple" id="tyresDiametr">
							<option value="" selected="">12</option>
							<option value="">13</option>
							<option value="">14</option>
							<option value="">15</option>
							<option value="">17</option>
							<option value="">17.5</option>
						</select>	
						<h5><strong>Размерность</strong></h5>
						<select class="selectpicker form-control" name="orders[]" multiple="multiple" id="tyresSize">
							<option value="" selected="">135/80</option>
							<option value="">145/65</option>
							<option value="">145/70</option>
							<option value="">155/60</option>
							<option value="">165/80</option>
							<option value="">185</option>
						</select>	
					</form>
				</div>
			</div>
			<div class="col-md-9">
				
			</div>
		</div>
	</div>
	<br>
@endsection