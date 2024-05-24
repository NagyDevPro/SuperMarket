<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <h3 class="menu-title">Items</h3><!-- /.menu-title -->
                <li>
                    <a href="{{ route('products.index')}}"> <i class="menu-icon fa fa-shopping-cart"></i>Products </a>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon fa fa-list"></i>Categories </a>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon fa fa-shopping-cart"></i>Orders </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
