<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel task</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->

    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('builds/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/')}}" class="site_title"><i class="fa fa-user"></i> <span>Users</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>User Management</h3>
                    <ul class="nav side-menu">
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Users List</a></li>
                        <li><a href="{{url('add-users')}}"><i class="fa fa-plus-square"></i> Add User</a></li>
                        <li><a href="{{url('login')}}"><i class="fa fa-lock"></i> Login</a></li>
                  </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
        <!-- /top navigation -->
            @yield('body')
        <!-- footer content -->
        <footer>
        <div class="pull-right">
            Laravel - task done by <a href="https://github.com/Bilal-288">Bilal</a>
        </div>
        <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/builds/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/builds/vfs_fonts.js') }}"></script>


    <!-- Custom Theme Scripts -->
    <script src="{{ asset('builds/js/custom.min.js') }}"></script>
    @if(Request::url() == 'http://127.0.0.1:8080/add-users' || Request::url() == 'http://127.0.0.1:8080/edit-users')
        <script>

                //Add user to prevent double addition
                const form = document.querySelector('form');
                const submitButton = form.querySelector('button[type="submit"]');

                form.addEventListener('submit', (event) => {
                    alert("add-user");
                // Prevent the form from submitting normally
                event.preventDefault();

                // Disable the submit button to prevent double submission
                submitButton.disabled = true;

                // Submit the form
                form.submit();
                });
            </script>
        @else
            <script>
                //delete button to prevent double deletion
                const deleteButton = document.querySelector('#delete-user');
                deleteButton.addEventListener('click', () => {
                alert("delete-user");
                // Disable the delete button to prevent double deletion
                deleteButton.disabled = true;

                // Send the delete request
                fetch('/delete-user', { method: 'DELETE' })
                    .then(response => {
                    // Re-enable the delete button once the delete operation has completed
                    deleteButton.disabled = false;

                    // Handle the response
                    if (response.ok) {
                        // User was successfully deleted
                        console.log("User was successfully deleted");
                    } else {
                        // Error occurred while deleting the user
                        console.log("Error occurred while deleting the user");
                    }
                    })
                    .catch(error => {
                    // Re-enable the delete button on error
                    deleteButton.disabled = false;
                    console.log("Re-enable the delete button on error");
                    // Handle the error
                    });
                });
            </script>
        @endif

</body>
</html>
