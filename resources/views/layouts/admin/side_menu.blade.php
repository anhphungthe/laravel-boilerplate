<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! $authUser->getProfileImageUrl() !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{!! $authUser->name !!}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li class="header">Điều hướng</li>
            
            <li @if( $menu=='dashboard') class="active" @endif >
                <a href="#"><i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
                </a>
            </li>

            @role('superadmin')
            <li @if( $menu=='admin_users') class="active" @endif >
                <a href="{!! URL::action('Admin\AdminUserController@index') !!}">
                    <i class="fa fa-user-secret"></i> <span>Quản lý user admin</span>
                </a>
            </li>
            
            <li @if( $menu=='users') class="active" @endif >
                <a href="{!! URL::action('Admin\UserController@index') !!}">
                    <i class="fa fa-users"></i> <span>Quản lý người dùng</span>
                </a>
            </li>
            
            <li @if( $menu=='site_configurations') class="active" @endif >
                <a href="{!! URL::action('Admin\SiteConfigurationController@index') !!}">
                    <i class="fa fa-cogs"></i> <span>Cấu hình site</span>
                </a>
            </li>
            @endrole
            
            <li @if( $menu=='article') class="active" @endif >
                <a href="{!! URL::action('Admin\ArticleController@index') !!}">
                    <i class="fa fa-file-word-o"></i> <span>Quản lý bài viết</span>
                </a>
            </li>
            
            <li @if( $menu=='user_notification') class="active" @endif >
                <a href="{!! URL::action('Admin\UserNotificationController@index') !!}">
                    <i class="fa fa-bell"></i> <span>Quản lý thông báo người dùng</span>
                </a>
            </li>
            
            <li @if( $menu=='admin_user_notification') class="active" @endif >
                <a href="{!! URL::action('Admin\AdminUserNotificationController@index') !!}">
                    <i class="fa fa-bell-o"></i> <span>Quản lý thông báo user admin</span>
                </a>
            </li>
            
            <li @if( $menu=='image') class="active" @endif >
                <a href="{!! URL::action('Admin\ImageController@index') !!}">
                    <i class="fa fa-file-image-o"></i> <span>Quản lý ảnh</span>
                </a>
            </li>
            <!-- %%SIDEMENU%% -->
        </ul>
    </section>
</aside>