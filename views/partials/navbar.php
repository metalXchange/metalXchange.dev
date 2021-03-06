<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">metalXchange</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../../index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="../../users.show.php">Profile</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Items for sale/trade <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/ads.index.php?table=guitars">Guitars</a></li>
            <li><a href="/ads.index.php?table=leather">Leather</a></li>
            <li><a href="/ads.index.php?table=lycra">Lycra</a></li>
            <li><a href="/ads.index.php?table=pyrotechnics">Pyrotechnics</a></li>
            <li><a href="/ads.index.php?table=venues">Venues</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/ads.create.php">Create new item</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/ads.edit.php">Edit existing item</a></li>
          </ul>
        </li>
        
        <?php if (!isset($_SESSION['LOGGED_IN_USER'])) { ?>
          <li><a href="../../auth.login.php">Login</a></li>
        <?php } else { ?>
          <li><a href="../../auth.logout.php">Logout</a></li>
        <?php } ?>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>