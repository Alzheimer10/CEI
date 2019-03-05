<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form (Optional) -->
        <form method="get" class="sidebar-form" id="search">
            <div class="input-group">
                <input type="text" name="string_search" id="string_search" class="form-control" placeholder="@lang('app.search')" url="{{ url('/') }}" autocomplete="off" required title="Escriba el nombre del niño y presione enter."  data-position="right"/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat text-yellow"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
