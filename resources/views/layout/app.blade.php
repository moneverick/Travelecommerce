<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
	@include('layout.partial.header')

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

 			@include('layout.partial.menuProfile')

 			@include('layout.partial.sidebar')

			@include('layout.partial.footerButtons')

		  </div>
	    </div>
      

  	<div class="top_nav">
     <div class="nav_menu">
      <nav>
      	<div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
      	@include('layout.partial.topNavigaton')

      </nav>
  	 </div>
	</div>

	
		@yield('main-content')

	

	 <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
		</div>
    </div>

    @include('layout.partial.script')
</body>
</html>