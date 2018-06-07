<div id="brands" class="section">
    <div class="panel panel-default">
        <div class="panel-heading">Добавить бренды</div>
        <form action="{{route('admin.brands.store')}}" method="POST">
            @csrf
            <div class="panel-body">
                <table>
                    <tr>
                        <td><h5>Полное имя: </h5></td>
                        <td><input name="name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><h5>Бренд автомобиля: </h5></td>
                        <td><input name="isCar" type="checkbox" value="1" class="form-control"></td>
                    </tr>
                </table>
            </div>
            <div class="panel-footer" style="text-align: right;">
                <button type="submit" class="btn btn-success">Добавить</button>
            </div>
        </form>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">Все бренды</div>
        <div class="panel-body">
            <div class="col-md-10 col-md-offset-1 allBrandList">
                <hr>
                @foreach($brands as $brand)
                    <div class="row">
                        <div class="col-md-10"><h4>{{$brand->name}}</h4></div>
                        <div class="col-md-1">
                            <button class="edit" data-toggle="modal" data-target="#brandsEditModal" onclick="editBrand('{!! $brand->id !!}', '{!! $brand->name !!}')">
                                <i class="fas fa-edit"></i>
                            </button>
                        </div>
                        <div class="col-md-1">
                            <form action="{{route('admin.brands.destroy',$brand->id)}}" method="POST" 
                                  onsubmit="return confirm('Delete?');">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
            {{ $brands->links() }}
        </div>
    </div>
</div>

<div class="modal fade" id="brandsEditModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Изменить продукт</h4>
        </div>
        <div class="modal-body">
          <form id="updated_form" method="POST">
            @method('PUT')
            @csrf
                <br>
                <table>
                    <tr>
                        <td><h5>Полное имя: </h5></td>
                        <td><input name="name" id="updated_name" type="text" class="form-control"></td>
                    </tr>
                </table>
                <br>    
                <div class="modal-footer">
                        <button class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>