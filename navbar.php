
<nav style=" border-radius: 1px;" class="navbar navbar-default">

  <div class="container-fluid" style="background-color:#17202A; color: white; ">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand">We take care our patients health, User : <font color="#0000FF"><?php echo $_SESSION['sadmun']; ?></font> <?php ?>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav" >
        <li><a  href="menu.php">[Arogya Health Care Hospital Menu]</a></li>
        <li><a href="dminlogout.php">[Logout]</a></li>
      </ul>

    </div>

  </div>
</nav>
