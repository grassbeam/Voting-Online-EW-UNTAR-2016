<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#NavbarKolep1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">VOTING RESULT EW 2016</a>
         </div>
            
            
       
      <div class="navbar-collapse collapse" id="NavbarKolep1">
      <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded=”false” aria-haspopup=”true”>Kategori Chart<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./?page=chart-total">Total Chart</a></li>
                        <li><a href="./?page=chart-total-online">Total Chart (Online)</a></li>
                        <li><a href="./?page=chart-total-offline">Total Chart (Offline)</a></li>
                        <li><a href="./?page=chart-daily-total">Daily Chart Total</a></li>
                        <li><a href="./?page=chart-daily-online">Daily Chart (Online)</a></li>
                        <li><a href="./?page=chart-daily-offline">Daily Chart (Offline)</a></li>
                    </ul>
                </li>
            </ul> 
            
      <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown" id="menuLogin">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_SESSION['user'] . " (" . $_SESSION['nama'] . ")"; ?>
                    </a>
                    <ul class="dropdown-menu" style="padding:20px; padding-bottom:0px">
                        <li style="margin-bottom:15px;"><a href="./view/logout.php"><span>   Logout<span></a></li>
                    </ul>
                </li>
                <li><a href="../developer-profile"><span class="glyphicon glyphicon-question-sign"></span> Need Help?</a></li>
            </ul>
         </div>
         
         
    </div>
</nav>