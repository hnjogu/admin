
          <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Job Admin control</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Main Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Post Jobs">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePostJobs">
              <i class="fa fa-plus"></i>
              <span class="nav-link-text">
                Post Jobs</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapsePostJobs">
              <li>
                <a href="post_job.php">Add New JOb</a>
              </li>
              <li>
                <a href="#">Edit JOb</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Jobs">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseManageJobs">
              <i class="fa fa-tasks"></i>
              <span class="nav-link-text">
                Manage Jobs</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseManageJobs">
              <li>
                <a href="#">Delete Job</a>
              </li>
              <li>
                <a href="#">View All</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="New Users">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNewUsers">
              <i class="fa fa-users"></i>
              <span class="nav-link-text">
                New Users</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseNewUsers">
              <li>
                <a href="#">Add New Users</a>
              </li>
              <li>
                <a href="#">Delete A User</a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                  <a href=""><span class="glyphicon glyphicon-th"></span>Profile</a>
                </li>
                <li>
                  <a href=""><span class="glyphicon glyphicon-log-out"></span>change password</a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>