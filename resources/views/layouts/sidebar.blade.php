<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">{{ __('sidebar.point_of_sale') }}</li>
        <li class="@yield('home')"><a href="/" ><i class="fa fa-home" aria-hidden="true"></i> <span>{{ __('sidebar.home') }}</span></a></li>
        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>{{ __('sidebar.sale') }}</span></a></li>
        <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> <span>{{ __('sidebar.sale_transaction') }}</span></a></li>
        <li class="header">{{ __('sidebar.accountant') }}</li>
        <li><a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> <span>{{ __('sidebar.invoice') }}</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd" aria-hidden="true"></i> <span>{{ __('sidebar.expense.expense') }}</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="#"><i class="fa fa-certificate" aria-hidden="true"></i> {{ __('sidebar.expense.expense') }}</a></li>
            <li><a href="#"><i class="fas fa-asterisk"></i> &nbsp;&nbsp;{{ __('sidebar.expense.expense_category') }}</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-flask" aria-hidden="true"></i> <span>{{ __('sidebar.income.income') }}</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i> {{ __('sidebar.income.income') }}</a></li>
            <li><a href="#"><i class="far fa-circle"></i> &nbsp;&nbsp;{{ __('sidebar.income.income_category') }}</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap" aria-hidden="true"></i> <span>{{ __('sidebar.inventory.inventory') }}</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i> {{ __('sidebar.inventory.stock_in') }}</a></li>
            <li><a href="#"><i class="fa fa-minus" aria-hidden="true"></i> {{ __('sidebar.inventory.stock_out') }}</a></li>
            <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i> {{ __('sidebar.inventory.stock_adjustment') }}</a></li>
            <li><a href="#"><i class="fas fa-file-invoice"></i> &nbsp;&nbsp;&nbsp;{{ __('sidebar.inventory.stock_balance') }}</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file" aria-hidden="true"></i> <span>{{ __('sidebar.report.report') }}</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="#"><i class="fa fa-bullhorn" aria-hidden="true"></i> {{ __('sidebar.report.sale') }}</a></li>
            <li><a href="#"><i class="fas fa-file-download"></i> &nbsp;&nbsp;&nbsp;{{ __('sidebar.report.revenue') }}</a></li>
            <li><a href="#"><i class="fas fa-file-upload"></i> &nbsp;&nbsp;&nbsp;{{ __('sidebar.report.expense') }}</a></li>
            <li><a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i> {{ __('sidebar.report.profit_loss') }}</a></li>
            <li><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i> {{ __('sidebar.report.inventory') }}</a></li>
          </ul>
        </li>
        <li class="header">{{ __('sidebar.main_data') }}</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hdd-o" aria-hidden="true"></i> <span>{{ __('sidebar.product.product') }}</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="#"><i class="fa fa-cube" aria-hidden="true"></i> {{ __('sidebar.product.product') }}</a></li>
            <li><a href="#"><i class="fa fa-cubes" aria-hidden="true"></i> {{ __('sidebar..product.product_category') }}</a></li>
          </ul>
        </li>
        <li class="@yield('customer')"><a href="{{ route('customer.index') }}"><i class="fa fa-users" aria-hidden="true"></i> <span>{{ __('sidebar.customer') }}</span></a></li>
        <li><a href="#"><i class="far fa-address-book"></i> &nbsp;&nbsp;&nbsp;<span>{{ __('sidebar.supplier') }}</span></a></li>
        <li class="header">{{ __('sidebar.management') }}</li>
        <li><a href="#"><i class="fa fa-user"></i> <span>{{ __('sidebar.user') }}</span></a></li>
        <li><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>{{ __('sidebar.roles') }}</span></a></li>
        <li><a href="#"><i class="fa fa-check-square" aria-hidden="true"></i> <span>{{ __('sidebar.abilitier') }}</span></a></li>
        <li class="header">{{ __('sidebar.development_mode') }}</li>
        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> <span>{{ __('sidebar.setting') }}</span></a></li>
        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i> <span>{{ __('sidebar.currency') }}</span></a></li>
        <li><a href="#"><i class="fas fa-money-check-alt"></i> &nbsp;<span>{{ __('sidebar.payment_method') }}</span></a></li>
        <li><a href="#"><i class="fa fa-database" aria-hidden="true"></i> <span>{{ __('sidebar.data_backup') }}</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>