<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php"><?php echo lang('admin-home');?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-nav" aria-controls="app-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-between" id="app-nav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="categories.php"><?php echo lang('admin-categories');?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"><?php echo lang('admin-items');?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php"><?php echo lang('admin-members');?></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Yossif
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="members.php?action=Edit&id=<?php echo $_SESSION['id']?>">Edit Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="Logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>