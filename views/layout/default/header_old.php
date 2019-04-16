<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="author" content="tksis.com">
  <link rel="author" href="tksis.com">

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="cleartype" content="on">

  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/img/favicon.ico">
  <title><?php if(isset($this->titulo) && $this->titulo!=''){ echo $this->titulo.' :: ';} ?><?php echo APP_NAME;?></title>

  <title><?php if(isset($this->titulo) && $this->titulo!='') echo $this->titulo.' :: '; ?><?php echo APP_NAME;?></title>

  <link href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/bootstrap-select.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>public/css/dataTables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo BASE_URL; ?>public/fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <?php if( Session::get('autenticado') && SESSION_TIME > 0){?><meta http-equiv="refresh" content="<?php echo (SESSION_TIME*60)+100; ?>"><?php } ?>
            <script>var BASE={title:'<?php echo $this->titulo; ?>',user:'<?php echo Session::get('id_usuario'); ?>',url:'<?php echo BASE_URL; ?>',name:'<?php echo APP_NAME;?>',m:'<?php echo $this->_presentRequest->getMetodo();?>/',c:'<?php echo $this->_presentRequest->getControlador();?>/'};</script>
            <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])): ?>
            <?php for($i=0; $i < count($_layoutParams['css']); $i++): ?>
            <link rel="stylesheet" media="screen" href="<?php echo $_layoutParams['css'][$i] ?>">
          <?php endfor; ?>
        <?php endif; ?>
        <script src="<?php echo BASE_URL; ?>public/js/jquery-2.1.0.min.js"></script>
      </head>
      <body>
        <div class="modal fade" id="myModal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
        <header class="navbar navbar-bright navbar-fixed-top" role="banner">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="<?php echo BASE_URL; ?>" class="navbar-brand visible-xs-block"><?php echo APP_NAME; ?></a>
            </div>
            <nav class="collapse navbar-collapse" role="navigation">
              <ul class="nav navbar-nav">
                <?php $_item_style='';$_item_menu=''; ?>
                <?php if(isset($_layoutParams['menu'])){ ?>
                <?php for($i = 0; $i < count($_layoutParams['menu']); $i++){ ?>

                <?php if (array_key_exists('sub', $_layoutParams['menu'][$i])) { 
                     $_item_style.= ' dropdown'; 
                  ?>
                <?php 
                if($item && $_layoutParams['menu'][$i]['id'] == $field ){ 
                  $_item_style.= 'active'; 
                  $_item_menu = $_layoutParams['menu'][$i]['titulo'];
                } else {
                  $_item_style.= '';
                }
                ?>
                <li class="<?php echo $_item_style; ?>">
                  <a lass="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#"><?php echo $_layoutParams['menu'][$i]['ico']; ?><?php echo $_layoutParams['menu'][$i]['titulo']; ?><span class="fa arrow"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <?php for($j = 0; $j < count($_layoutParams['menu'][$i]['sub']); $j++){ ?>
                    <?php 
                    if($item && $_layoutParams['menu'][$i]['sub'][$j]['id'] == $item ){ 
                      $_item_style = 'active'; 
                    } else {
                      $_item_style = '';
                    }
                    ?>
                    <li>
                      <a class="<?php echo $_item_style; ?>" href="<?php echo $_layoutParams['menu'][$i]['sub'][$j]['enlace']; ?>"><?php  echo $_layoutParams['menu'][$i]['sub'][$j]['ico']; ?><?php  echo $_layoutParams['menu'][$i]['sub'][$j]['titulo']; ?></a>
                    </li>
                    <?php } ?>
                  </ul>
                </li>
                <?php }else{  ?>
                <?php 
                if($item && $_layoutParams['menu'][$i]['id'] == $item ){ 
                  $_item_style = 'active';
                  $_item_menu = $_layoutParams['menu'][$i]['titulo']; 
                } else {
                  $_item_style = '';
                }
                ?>
                <li>
                  <a class="<?php echo $_item_style; ?>" href="<?php echo $_layoutParams['menu'][$i]['enlace']; ?>"><?php echo $_layoutParams['menu'][$i]['ico']; ?><?php  echo $_layoutParams['menu'][$i]['titulo']; ?></a>
                </li>
                <?php } ?>
                <?php } ?>
                <?php } ?>
                <?php if( $_item_menu==''){$_item_menu=$item;} ?>
                <?php if( $h2!=''){$_item_menu=$h2;} ?>
        <!--<li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>
        <li>
          <a href="#">Category</a>
        </li>-->
      </ul>
      <?php if(Session::get('autenticado')){ ?>
      <ul class="nav navbar-right navbar-nav">
        <li class="dropdown">
            <li><a href="<?php echo BASE_URL; ?>login/cambiar/"><i class="fa fa-cogs fa-fw"></i> Cambiar Clave</a></li>
            <li><a href="<?php echo BASE_URL; ?>login/cerrar/"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a></li>
        </li>
      </ul>
      <?php } ?>
    </nav>
  </div>
</header>

<div id="masthead">  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--<h1 style="min-height: 35px; font-size: 35px;  line-height: 35px;  margin-top: 62px;">
          <?php //echo APP_NAME;//echo Session::get('nombre');?>
          <!--<img class="img-responsive" alt="logo" src="<?php echo $_layoutParams['ruta_img']; ?>logo.png">-->
          <!--<p class="lead"></p>
        </h1>-->
          <img style="margin: 30px auto;width:100%; max-width: 130px;" src="<?php echo BASE_URL.'public/img/'; ?>logo_banner.png" class="img-responsive" alt="Image">
      </div>
      <div class="col-md-5">
        <!--<div class="well well-lg"> 
          <div class="row">
            <div class="col-sm-12">
              
            
            </div>
          </div>
        </div>-->
      </div>
    </div>
    <!--<?php if(Session::get('autenticado')){ ?>
        <div class="text-right" id="user">
          <?php echo Session::get('nombre'); ?>
          <a title="Cerrar Sesion" href="<?php echo BASE_URL; ?>login/cerrar/"><i class="fa fa-sign-out fa-fw"></i></a>
        </div>
    <?php } ?> -->
  </div><!-- /cont -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-spacer"> </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
</div>


<div class="container margin-cero">
  <div class="row">

    <div class="col-md-12"> 

      <div style="border-color:transparent !important;" class="panel">
        <div class="panel-body">
          <h2 class="title">
            <?php echo $_item_menu; ?>
            <!--<div class="pull-right hidden-xs">
                <a title="Disponible en google play store" class="btn btn-social-icon btn-android" target="_black" href="https://play.google.com/store/apps/details?id=co.tuestacion">
                  <i class="fa fa-android pull-left"></i>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE_URL.$this->_url; ?>" class="btn btn-social-icon btn-facebook popup">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="https://plus.google.com/share?url=<?php echo BASE_URL.$this->_url; ?>" class="btn btn-social-icon btn-google-plus popup">
                  <i class="fa fa-google-plus"></i>
                </a>

                <a href="http://twitter.com/home?status=<?php echo $this->titulo; ?>%20<?php echo BASE_URL.$this->_url; ?>" class="btn btn-social-icon btn-twitter popup">
                  <i class="fa fa-twitter"></i>
                </a>
            </div>-->
          </h2>

          <div class="col-lg-12"  id="alert" >
            <?php if(Session::get('error')): ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo Session::get('error');Session::destroy("error"); ?>
            </div>
          <?php endif; ?>

          <?php if(Session::get('mensaje')): ?>
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo Session::get('mensaje');Session::destroy("mensaje");  ?>
          </div>

        <?php endif; ?>

                    <!--<div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                    </div>
                    <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                              </div>--> 
                            </div>
                            <div class="clearfix"></div>