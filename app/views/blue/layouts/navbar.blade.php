<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand navbar-brand-centered">Manager</div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
              <ul class="nav navbar-nav">
                <li>{{ link_to('/','Dashboard') }}</li>
                <li>{{ link_to('projects/all','projects') }}</li>
                <li>{{ link_to('tasks/all','tasks') }}</li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">New task</a></li>
                <li>{{ link_to('account/logout', 'Logout') }}</li>		        
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>