<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo url_for("@homepage");?>">Administrator</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo url_for("@homepage");?>">Home</a></li>
          </ul>
          <?php if($sf_user->isAuthenticated() && $sf_user->hasCredential("administrator")){?>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $sf_user->getGuardUser()->getEmailAddress();?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><?php echo $sf_user->getGuardUser()->getFirstName()?>  <?php echo $sf_user->getGuardUser()->getLastName()?><br/> <small>Akun</small></a></li>
                <li><a href="/index.php">Beranda</a></li>
                <li><a href="<?php echo url_for("@sf_guard_signout");?>">Logout</a></li>
              </ul>
            </li>
          </ul>
          <?php }?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
    <?php echo $sf_content ?>
    <hr>  
    <footer>
     <p> &copy; Copyright <?php echo date('Y')?></p>
    </footer>                      
    </div> <!-- /container -->      
  </body>
</html>
