<nav class="navbar navbar-default">
    <div class="row">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li data-toggle="tab" class="navs"><a onclick="switchSection('all')">Все продукты</a></li>
                <li data-toggle="tab" class="navs"><a onclick="switchSection('products')">Продукты</a></li>
                <li data-toggle="tab" class="navs"><a onclick="switchSection('brands')">Бренды</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">admin
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>