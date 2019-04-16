<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if(isset($this->titulo) && $this->titulo!=''){ echo $this->titulo.' :: ';} ?><?php echo APP_NAME;?></title>
  <link href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/datepicker3.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/bootstrap-select.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/styles.css" rel="stylesheet">

  <script src="<?php echo BASE_URL; ?>public/js/jquery-1.11.1.min.js"></script>

  <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])){ ?>
  <?php for($i=0; $i < count($_layoutParams['css']); $i++){ ?>
  <link rel="stylesheet" media="screen" href="<?php echo $_layoutParams['css'][$i] ?>">
  <?php } ?>
  <?php } ?>

  <script>var BASE = {url:'<?php echo BASE_URL; ?>'};</script>

  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/img/favicon.ico">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><span>ON</span>TIME</a>
        <!-- <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
          </a>
            <ul class="dropdown-menu dropdown-messages">
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                  </a>
                  <div class="message-body"><small class="pull-right">3 mins ago</small>
                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                  <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                  </a>
                  <div class="message-body"><small class="pull-right">1 hour ago</small>
                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                  <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="all-button"><a href="#">
                  <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                </a></div>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-bell"></em><span class="label label-info">5</span>
          </a>
            <ul class="dropdown-menu dropdown-alerts">
              <li><a href="#">
                <div><em class="fa fa-envelope"></em> 1 New Message
                  <span class="pull-right text-muted small">3 mins ago</span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-heart"></em> 12 New Likes
                  <span class="pull-right text-muted small">4 mins ago</span></div>
              </a></li>
              <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-user"></em> 5 New Followers
                  <span class="pull-right text-muted small">4 mins ago</span></div>
              </a></li>
            </ul>
          </li>
        </ul> -->
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <?php if($_layoutParams['vista'] <> "indexLogin"){ ?>
  <?php  if(Session::get('autenticado')){ ?>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-userpic">
        <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">Usuario</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <!-- <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form> -->
    <ul class="nav menu">
    <?php foreach ($_layoutParams['menu'] as $key => $value) { ?>
      <?php if(isset($value['submenu'])){ ?>
        <li class="parent"><a data-toggle="collapse" href="#<?php echo $value['id'] ?>">
        <?php echo $value['icono'] ?> <?php echo $value['titulo'] ?> <span data-toggle="collapse" href="#<?php echo $value['id'] ?>" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse <?php if($_layoutParams['item'] == $value['id']) echo "in" ?>" id="<?php echo $value['id'] ?>">
          <?php foreach ($value['submenu'] as $key => $valueSub) { ?>
          <li><a <?php if($_layoutParams['subItem'] == $valueSub['id']) echo "class='active'" ?> href="<?php echo $valueSub['enlace'] ?>">
            <span class="fa fa-arrow-right">&nbsp;</span> <?php echo $valueSub['titulo'] ?>
          </a></li>
          <?php } ?>
        </ul>
      </li>  
      <?php }else{ ?>
        <li <?php if($_layoutParams['item'] == $value['id']) echo "class='active'" ?>><a href="<?php echo $value['enlace'] ?>"><?php echo $value['icono'] ?> <?php echo $value['titulo'] ?></a></li>
      <?php } ?>
    <?php } ?>
    </ul>
  </div><!--/.sidebar-->
  <?php } ?>
  <?php } ?>
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="margin-top:20px;">
    <?php if(Session::get('error')): ?>
    <div class="alert bg-danger" role="alert">
      <em class="fa fa-lg fa-warning">&nbsp;</em>
      <?php echo Session::get('error');Session::destroy("error"); ?>
      <a href="#" class="pull-right" data-dismiss="alert">
        <em class="fa fa-lg fa-close"></em>
      </a>
    </div>
    <?php endif; ?>
    <?php if(Session::get('mensaje')): ?>
    <div class="alert bg-success" role="alert">
      <em class="fa fa-lg fa-warning">&nbsp;</em>
      <?php echo Session::get('mensaje');Session::destroy("mensaje"); ?>
      <a href="#" class="pull-right" data-dismiss="alert">
        <em class="fa fa-lg fa-close"></em>
      </a>
    </div>
    <?php endif; ?>
  </div>