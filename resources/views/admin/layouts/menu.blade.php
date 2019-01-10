<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          @include('admin.layouts.noti')
          <!-- Tasks: style can be found in dropdown.less -->
          
           <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-globe"></i>
              <span class="hidden-xs"> </span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{ aurl('lang/ar') }}"><i class="fa fa-flag"></i> عربى</a></li>
              <li><a href="{{ aurl('lang/en') }}"><i class="fa fa-flag"></i> English</a></li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ url('design/AdminLTE') }}/dist/img/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ admin()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ url('design/AdminLTE') }}/dist/img/admin.png" class="img-circle" alt="User Image">

                <p>
                  {{ admin()->user()->name }} - {{ trans('admin.adminLevel') }}
                  <small>{{ trans('admin.MemberSince') }} {{ admin()->user()->created_at }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                /.row
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                {{--
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">{{ trans('admin.Profile') }}</a>
                </div>--}}
                <div class="text-center">
                  <a href="{{ url('admin/logout') }}" class="btn btn-default btn-flat">{{ trans('admin.SignOut') }}</a>
                </div>
              </li>
            </ul>
          </li>

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>