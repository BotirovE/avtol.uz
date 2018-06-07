<div id="products" class="section">
    <div class="panel panel-default">
        <div class="panel-heading">Добавить продукть</div>
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="navs3"><a data-toggle="tab" href="#tyres" onclick="setCookie2('tyres')">Шины</a></li>
                <li class="navs3"><a data-toggle="tab" href="#accum" onclick="setCookie2('accum')">Аккумуляторы</a></li>
                <li class="navs3"><a data-toggle="tab" href="#rims" onclick="setCookie2('rims')">Диски</a></li>
                <li class="navs3"><a data-toggle="tab" href="#carpet" onclick="setCookie2('carpet')">Полики</a></li>
            </ul>
            <div class="tab-content">
            <!-- tyres tab -->
                <div id="tyres" class="tab-pane fade">
                    <form action="{{route('admin.tyres.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf    
                        <br>
                        <div class="add-product">
                            <table class="add-table">
                                <tr>
                                    <td><h4>Тип шины: </h4></td>
                                    <td>
                                        <select name="category" id="tyres-type">
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
                                    <td><h4>Наименование: </h4></td>
                                    <td>
                                            <input name="name" type="text" placeholder="Наименование">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Цена:</h4></td>
                                    <td><input type="text" placeholder="Цена" name="price"></td>
                                </tr>
                                <tr>
                                    <td><h4>Сезонность шин: </h4></td>
                                    <td>
                                            <select name="season" id="season">
                                                <option value="" disabled selected hidden>Выбрать</option>
                                                <option value="Летные шины">Летные шины</option>
                                                <option value="Зимные шины">Зимные шины</option>
                                                <option value="Всесезонные шины">Всесезонные шины</option>
                                            </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Информация: </h4></td>
                                    <td><textarea name="comment" placeholder="Информация" id="" cols="30" rows="4"></textarea></td>
                                </tr>
                                <tr>
                                    <td><h4>Размер: </h4></td>
                                    <td><input name="size" type="text" placeholder="Размер"></td>
                                </tr>
                                <tr>
                                    <td><h4>Диаметр: </h4></td>
                                    <td><input name="diameter" type="text" placeholder="Диаметр"></td>
                                </tr>
                                <tr>
                                    <td><h4>Изображение: </h4></td>
                                    <td><input name="image" type="file" class="custom-file-input" title=" "></td>
                                </tr>
                                <tr>
                                    <td><h4>Бранд: </h4></td>
                                    <td>
                                        <select name="brands[]" id="" multiple class="brands">
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- accumulator tab -->
                <div id="accum" class="tab-pane fade">
                    <form action="{{route('admin.accums.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <br>
                        <div class="add-product">
                            <table class="add-table">
                                <tr>
                                    <td><h4>Наименование АКБ: </h4></td>
                                    <td>
                                            <input name="name" type="text" placeholder="Наименование АКБ">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Цена:</h4></td>
                                    <td><input name="price" type="text" placeholder="Цена"></td>
                                </tr>
                                <tr>
                                    <td><h4>Емкость батареи(А/ч): </h4></td>
                                    <td>
                                            <input name="capacity" type="text" placeholder="Емкость батареи">
                                    </td>
                                </tr>
                                <tr class="size">
                                    <td><h4>Размер, мм:</h4></td>
                                    <td>
                                            <input name="length" type="text" placeholder="Длина, мм:">
                                            <input name="width" type="text" placeholder="Ширина, мм:">
                                            <input name="height" type="text" placeholder="Высота, мм:">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Информация: </h4></td>
                                    <td><textarea name="comment" placeholder="Информация" id="" cols="30" rows="4"></textarea></td>
                                </tr>
                                <tr>
                                    <td><h4>Изображение: </h4></td>
                                    <td><input name="image" type="file" class="custom-file-input" title=" "></td>
                                </tr>
                                <tr>
                                    <td><h4>Бранд: </h4></td>
                                    <td>
                                        <select name="brands[]" id="" multiple class="brands">
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- rims tab -->
                <div id="rims" class="tab-pane fade">
                    <form action="{{route('admin.wheels.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <br>
                        <div class="add-product">
                            <table class="add-table">
                                <tr>
                                    <td><h4>Бранд: </h4></td>
                                    <td>
                                        <select name="brands[]" id="" multiple class="brands">
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Наименование: </h4></td>
                                    <td>
                                            <input name="name" type="text" placeholder="Наименование">
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Цена:</h4></td>
                                    <td><input name="price" type="text" placeholder="Цена"></td>
                                </tr>
                                <tr>
                                    <td><h4>Отверстия: </h4></td>
                                    <td><input name="gap" type="text" placeholder="Отверстия"></td>
                                </tr>
                                <tr>
                                    <td><h4>Информация: </h4></td>
                                    <td><textarea name="comment" placeholder="Информация" id="" cols="30" rows="4"></textarea></td>
                                </tr>
                                <tr>
                                    <td><h4>Диаметр ступицы, мм: </h4></td>
                                    <td><input name="diameter" type="text" placeholder="Диаметр ступицы"></td>
                                </tr>
                                <tr>
                                    <td><h4>Цвет диска: </h4></td>
                                    <td><input name="color" type="text" placeholder="Цвет диска"></td>
                                </tr>
                                <tr>
                                    <td><h4>Размер: </h4></td>
                                    <td><input name="size" type="text" placeholder="Размер"></td>
                                </tr>
                                <tr>
                                    <td><h4>Изображение: </h4></td>
                                    <td><input name="image" type="file" class="custom-file-input" title=" "></td>
                                </tr>
                            </table>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="carpet" class="tab-pane fade">
                    <form action="{{route('admin.mats.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <br>
                        <div class="add-product">
                            <table class="add-table">
                                <tr>
                                    <td><h4>Бранд: </h4></td>
                                    <td>
                                        <select name="brands[]" id="" multiple class="brands">
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h4>Цена:</h4></td>
                                    <td><input name="price" type="text" placeholder="Цена"></td>
                                </tr>
                                <tr>
                                    <td><h4>Информация: </h4></td>
                                    <td><textarea name="comment" placeholder="Информация" id="" cols="30" rows="4"></textarea></td>
                                </tr>
                                <tr>
                                    <td><h4>Цвет: </h4></td>
                                    <td><input name="color" type="text" placeholder="Цвет"></td>
                                </tr>
                                <tr>
                                    <td><h4>Изображение: </h4></td>
                                    <td><input name="image" type="file" class="custom-file-input" title=" "></td>
                                </tr>
                            </table>
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>