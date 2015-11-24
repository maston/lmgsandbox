	<nav class="navbar navbar-inverse">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	      </button>
	      <a class="navbar-brand" href="index.html">LunchMoneyGame</a>
	      <!-- <a class="navbar-brand" href="#"><img alt="Brand" src="logo_toolbar.png"></a> -->
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	          <li class= {{ $nav_gameboard }} ><a href="#">Your Gameboard</a></li>
	          <li class= {{ $nav_grocery_run }} ><a href="#">Grocery Runs</a></li>
	          <li class= {{ $nav_metrics }} ><a href="#">Metrics</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class= {{ $nav_settings }}><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
			<li><p class="navbar-text navbar-right">Hello, {{$user_info['name']}} <span class="glyphicon glyphicon-user"></span>  (<a href="#" class="navbar-link">logout</a>)</p>
            </li>
	      </ul>
<!-- <p class="navbar-text navbar-right">Signed in as Sarah.<a href="#" class="navbar-link">logout</a></p> -->
	    </div>
	</nav>