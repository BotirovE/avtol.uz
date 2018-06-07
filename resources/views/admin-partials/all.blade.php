<div id="all" class="section">
    <div class="panel panel-default">
        <div class="panel-heading">Изменить продукты</div>
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="navs2"><a data-toggle="tab" href="#allTyres" onclick="setCookie1('allTyres')">Шины</a></li>
                <li class="navs2"><a data-toggle="tab" href="#allAccum" onclick="setCookie1('allAccum')">Аккумуляторы</a></li>
                <li class="navs2"><a data-toggle="tab" href="#allRims" onclick="setCookie1('allRims')">Диски</a></li>
                <li class="navs2"><a data-toggle="tab" href="#allCarpet" onclick="setCookie1('allCarpet')">Полики</a></li>
            </ul>
            <div class="tab-content">
                <div id="allTyres" class="tab-pane fade">
                    <table class="table table-bordered table-striped allBrandList">
                        <tr>
                            <th>Изображение</th>
                            <th>Бранд</th>
                            <th>Наименование</th>
                            <th>Цена</th>
                            <th>Тип шины</th>
                            <th>Сезонность шин</th>
                            <th>Информация</th>
                            <th>Размер</th>
                            <th>Диаметр</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                        @foreach($tyres as $tyre)
                        <tr>
                            <td><img src="{{ Storage::exists('public/images/tyres/' . $tyre->id) ? asset('storage/images/tyres/' . $tyre->id) : asset('storage/images/tyres/default.jpg')}}"></td>
                            <td>
                                @foreach($tyre->brands as $brand)
                                    {{$brand->name}},
                                @endforeach
                            </td>
                            <td>{{$tyre->name}}</td>
                            <td>{{$tyre->price}}</td>
                            <td>{{$tyre->category}}</td>
                            <td>{{$tyre->season}}</td>
                            <td>{{$tyre->comment}}</td>
                            <td>{{$tyre->size}}</td>
                            <td>{{$tyre->diameter}}</td>
                            <td>
                                <button class="edit" data-toggle="modal" data-target="#tyresEditModal" onclick="editTyre({{ json_encode($tyre)}})">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td>
                            <form action="{{route('admin.tyres.destroy',$tyre->id)}}" method="POST" 
                                  onsubmit="return confirm('Delete?');">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form> 
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <center>
                        {{ $tyres->links() }}
                    </center>
                </div>
                <div id="allAccum" class="tab-pane fade">
                    <table class="table table-bordered table-striped allBrandList">
                        <tr>
                            <th>Изображение</th>
                            <th>Бранд</th>
                            <th>Наименование АКБ</th>
                            <th>Цена</th>
                            <th>Емкость батареи(А/ч)</th>
                            <th>Размер</th>
                            <th>Информация</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                        @foreach($accums as $accum)
                        <tr>
                            <td>
                                <img src="{{ Storage::exists('public/images/accums/' . $accum->id) ? asset('storage/images/accums/' . $accum->id) : asset('storage/images/accums/default.jpg')}}">
                            </td>
                            <td>
                                @foreach($accum->brands as $brand)
                                    {{$brand->name}},
                                @endforeach
                            </td>
                            <td> {{$accum->name}} </td>
                            <td> {{$accum->price}} </td>
                            <td> {{$accum->capacity}} </td>
                            <td> {{$accum->length}}x{{$accum->width}}x{{$accum->height}} </td>
                            <td> {{$accum->comment}} </td>
                            <td>
                                <button class="edit" data-toggle="modal" data-target="#accumEditModal" onclick="editAccum({{ json_encode($accum)}})">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td>
                                <form action="{{route('admin.accums.destroy',$accum->id)}}" method="POST" 
                                    onsubmit="return confirm('Delete?');">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <center>
                        {{ $accums->links() }}
                    </center>
                </div>
                <div id="allRims" class="tab-pane fade">
                <table class="table table-bordered table-striped allBrandList">
                        <tr>
                            <th>Изображение</th>
                            <th>Бранд</th>
                            <th>Наименование</th>
                            <th>Цена</th>
                            <th>Отверстия</th>
                            <th>Диаметр ступицы, мм</th>
                            <th>Информация</th>
                            <th>Цвет диска</th>
                            <th>Размер</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                        @foreach($wheels as $wheel)
                        <tr>
                            <td>
                                <img src="{{ Storage::exists('public/images/wheels/' . $wheel->id) ? asset('storage/images/wheels/' . $wheel->id) : asset('storage/images/wheels/default.jpg')}}">
                            </td>
                            <td>
                                @foreach($wheel->brands as $brand)
                                    {{$brand->name}},
                                @endforeach
                            </td>
                            <td> {{$wheel->name}} </td>
                            <td> {{$wheel->price}} </td>
                            <td> {{$wheel->gap}} </td>
                            <td> {{$wheel->diameter}} </td>
                            <td> {{$wheel->comment}} </td>
                            <td> {{$wheel->color}} </td>
                            <td> {{$wheel->size}} </td>
                            <td>
                                <button class="edit" data-toggle="modal" data-target="#rimsEditModal" onclick="editWheel({{ json_encode($wheel)}})">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td>
                                <form action="{{route('admin.wheels.destroy',$wheel->id)}}" method="POST" 
                                    onsubmit="return confirm('Delete?');">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>    
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <center>
                        {{ $wheels->links() }}
                    </center>
                </div>
                <div id="allCarpet" class="tab-pane fade">
                <table class="table table-bordered table-striped allBrandList">
                        <tr> 
                            <th>Изображение</th>
                            <th>Бранд</th>
                            <th>Цена</th>
                            <th>Информация</th>
                            <th>Цвет</th>
                            <th>Изменить</th>
                            <th>Удалить</th>
                        </tr>
                        @foreach($mats as $mat)
                        <tr>
                            <td>
                                <img src="{{ Storage::exists('public/images/mats/' . $mat->id) ? asset('storage/images/mats/' . $mat->id) : asset('storage/images/mats/default.jpg')}}">
                            </td>
                            <td>
                                @foreach($mat->brands as $brand)
                                    {{$brand->name}},
                                @endforeach
                            </td>
                            <td> {{$mat->price}} </td>
                            <td> {{$mat->comment}} </td>
                            <td> {{$mat->color}} </td>
                            <td>
                                <button class="edit" data-toggle="modal" data-target="#carpetEditModal" onclick="editMat({{ json_encode($mat)}})">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td>
                                <form action="{{route('admin.mats.destroy',$mat->id)}}" method="POST" 
                                    onsubmit="return confirm('Delete?');">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <center>
                        {{ $mats->links() }}
                    </center>
                </div>
            </div>    
        </div>
    </div>
</div>


<div class="modal fade" id="tyresEditModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Изменить продукт</h4>
            </div>
            <div class="modal-body">
                <form id="tyre_form" method="POST"  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <br>
                    <div class="add-product">
                        <table class="add-table">
                            <tr>
                                <td><h4>Тип шины: </h4></td>
                                <td>
                                    <select name="category" id="tyre_category">
                                        <option value="" disabled selected hidden>Выбрать</option>
                                        <option value="Легковые шины">Легковые шины</option>
                                        <option value="Легко-грузовые шины">Легко-грузовые шины</option>
                                        <option value="Грузовые шины">Грузовые шины</option>
                                        <option value="Сельскохозяйственные шины">Сельскохозяйственные шины</option>
                                        <option value="Шины для спец техники">Шины для спец техники</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><h4>Цена:</h4></td>
                                <td><input type="text" placeholder="Цена" name="price" id="tyre_price"></td>
                            </tr>
                            <tr>
                                <td><h4>Сезонность шин: </h4></td>
                                <td>
                                        <select name="season" id="tyre_season">
                                            <option value="" disabled selected hidden>Выбрать</option>
                                            <option value="Летные шины">Летные шины</option>
                                            <option value="Зимные шины">Зимные шины</option>
                                            <option value="Всесезонные шины">Всесезонные шины</option>
                                        </select>
                                </td>
                            </tr>
                            <tr>
                                <td><h4>Информация: </h4></td>
                                <td><textarea name="comment" placeholder="Информация" id="tyre_comment" cols="30" rows="4"></textarea></td>
                            </tr>
                            <tr>
                                <td><h4>Размер: </h4></td>
                                <td><input name="size" id="tyre_size" type="text" placeholder="Размер"></td>
                            </tr>
                            <tr>
                                <td><h4>Диаметр: </h4></td>
                                <td><input name="diameter" id="tyre_diameter" type="text" placeholder="Диаметр"></td>
                            </tr>
                            <tr>
                                <td><h4>Изображение: </h4></td>
                                <td><input name="image" id="tyre_image" type="file" class="custom-file-input" title=" "></td>
                            </tr>
                            <tr>
                                <td><h4>Бранд: </h4></td>
                                <td>
                                    <select name="brands[]" id="tyre_brands" multiple class="brands">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                            <button class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="accumEditModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Изменить продукт</h4>
            </div>
            <div class="modal-body">
                <form id="accum_form" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <br>
                    <div class="add-product">
                        <table class="add-table">
                            <tr>
                                <td><h4>Наименование АКБ: </h4></td>
                                <td>
                                        <input name="name" id="accum_name" type="text" placeholder="Наименование АКБ">
                                </td>
                            </tr>
                            <tr>
                                <td><h4>Цена:</h4></td>
                                <td><input name="price"  id="accum_price" type="text" placeholder="Цена"></td>
                            </tr>
                            <tr>
                                <td><h4>Емкость батареи(А/ч): </h4></td>
                                <td>
                                        <input name="capacity" id="accum_capacity" type="text" placeholder="Емкость батареи">
                                </td>
                            </tr>
                            <tr class="size">
                                <td><h4>Размер, мм:</h4></td>
                                <td>
                                        <input name="length" id="accum_length" type="text" placeholder="Длина, мм:">
                                        <input name="width" id="accum_width" type="text" placeholder="Ширина, мм:">
                                        <input name="height" id="accum_height" type="text" placeholder="Высота, мм:">
                                </td>
                            </tr>
                            <tr>
                                <td><h4>Информация: </h4></td>
                                <td><textarea name="comment" id="accum_comment" placeholder="Информация" cols="30" rows="4"></textarea></td>
                            </tr>
                            <tr>
                                <td><h4>Изображение: </h4></td>
                                <td><input name="image" type="file" class="custom-file-input" title=" "></td>
                            </tr>
                            <tr>
                                <td><h4>Бранд: </h4></td>
                                <td>
                                    <select name="brands[]" id="accum_brands" multiple class="brands">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                            <button class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rimsEditModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Изменить продукт</h4>
            </div>
            <div class="modal-body">
                <form id="wheel_form" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <br>
                    <div class="add-product">
                        <table class="add-table">
                            <tr>
                                <td><h4>Бранд: </h4></td>
                                <td>
                                    <select name="brands[]" id="wheel_brands" multiple class="brands">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><h4>Цена:</h4></td>
                                <td><input name="price" id="wheel_price" type="text" placeholder="Цена"></td>
                            </tr>
                            <tr>
                                <td><h4>Отверстия: </h4></td>
                                <td><input name="gap" id="wheel_gap" type="text" placeholder="Отверстия"></td>
                            </tr>
                            <tr>
                                <td><h4>Диаметр ступицы, мм: </h4></td>
                                <td><input name="diameter" id="wheel_diameter" type="text" placeholder="Диаметр ступицы"></td>
                            </tr>
                            <tr>
                                <td><h4>Цвет диска: </h4></td>
                                <td><input name="color" id="wheel_color" type="text" placeholder="Цвет диска"></td>
                            </tr>
                            <tr>
                                <td><h4>Размер: </h4></td>
                                <td><input name="size" id="wheel_size" type="text" placeholder="Размер"></td>
                            </tr>
                            <tr>
                                <td><h4>Изображение: </h4></td>
                                <td><input name="image" type="file" class="custom-file-input" title=" "></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="carpetEditModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Изменить продукт</h4>
            </div>
            <div class="modal-body">
                <form id="mat_form" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <br>
                    <div class="add-product">
                        <table class="add-table">
                            <tr>
                                <td><h4>Бранд: </h4></td>
                                <td>
                                    <select name="brands[]" id="mat_brands" multiple class="brands">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><h4>Цена:</h4></td>
                                <td><input name="price" id="mat_price" type="text" placeholder="Цена"></td>
                            </tr>
                            <tr>
                                <td><h4>Цвет: </h4></td>
                                <td><input name="color" id="mat_color" type="text" placeholder="Цвет"></td>
                            </tr>
                            <tr>
                                <td><h4>Изображение: </h4></td>
                                <td><input name="image" type="file" class="custom-file-input" title=" "></td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




