<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Summary Info</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="https://vk.com/masloworkshop">
      	<img src="Brand.jpg" alt="Масло" class="img-rounded" style="height:50px; margin-top:-15px ">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Login">
          <input type="text" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
      </form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
  <div class="row">
    <div class="text-center col-md-12">
      <div class="row bg-info">
      	<h4><strong>Остатки на складе</strong></h4>
      </div>
        <div class="row">
        	<table class="table table-bordered table-striped"> 
            	<colgroup> 
                	<col class="col-xs-6"> 
                    <col class="col-xs-1"> 
                </colgroup> 
                <thead> 
                	<tr> <th class="text-center">Товар</th> <th class="text-center">Количество</th> </tr> 
                </thead> 
                <tbody> 
                	<tr> <th scope="row"> товар 1 </th> <td>10</td> </tr>
                    <tr> <th scope="row"> товар 2 </th> <td>5</td> </tr>  
                </tbody> 
            </table>
        </div>
    </div>
  </div>
  <div class="row"></div>
  <div class="row">
    <div class="text-center col-md-12">
      <div class="row bg-info">
      	<h4><strong>Остатки в магазинах</strong></h4>
      </div>
        <div class="row">
        	<table class="table table-bordered table-striped"> 
            	<colgroup> 
                	<col class="col-xs-4">
                	<col class="col-xs-4"> 
                    <col class="col-xs-1"> 
                </colgroup> 
                <thead> 
                	<tr> <th class="text-center">Магазин</th> <th class="text-center">Товар</th> <th class="text-center">Количество</th> </tr>
                </thead> 
                <tbody> 
                	<tr> <th scope="row"> Магазин 1 </th> <td>Товар 1</td> <td>10</td> </tr>
                	<tr> <th scope="row"> Магазин 1 </th> <td>Товар 2</td> <td>10</td> </tr>
                </tbody> 
            </table>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="text-center col-md-12">
      <div class="row bg-info">
      	<h4><strong>Продажи</strong></h4>
      </div>
        <div class="row">
        	<table class="table table-bordered table-striped"> 
            	<colgroup> 
                    <col class="col-xs-1">
                    <col class="col-xs-2">
                	<col class="col-xs-3"> 
                    <col class="col-xs-1"> 
                </colgroup> 
                <thead> 
                	<tr> <th class="text-center">Дата</th> 
                    <th class="text-center">Тип</th> 
                    <th class="text-center">Магазин</th> 
                    <th class="text-center">Количество</th> </tr> 
                </thead> 
                <tbody> 
                	<tr> <td>10.05.2017</td> <td> Тип продажи</td><td>Название магазина 1</td><td>10</td> </tr>
                	<tr> <td>11.05.2017</td> <td> Тип продажи</td><td>Название магазина 2</td><td>10</td> </tr>
                	<tr> <td>12.05.2017</td> <td> Тип продажи</td><td>Название магазина 3</td><td>10</td> </tr>
                </tbody> 
            </table>
        </div>
    </div>
  </div>
  
  <hr>
  <div class="row" style="display:none">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4>Footer </h4>
      <p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href="http://yourwebsite.com/" >My Website</a></p>
    </div>
  </div>
  <hr>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>
