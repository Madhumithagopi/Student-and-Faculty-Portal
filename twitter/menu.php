
                        <br />
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" href="index.php">MSW-Sociogram</a>
     </div>
     <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username']; ?>
       <span class="caret"></span></a>
       <ul class="dropdown-menu">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
       </ul>
      </li>
     </ul>
    </div>
   </nav>