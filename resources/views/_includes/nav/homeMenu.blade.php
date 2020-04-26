<aside class="menu home-menu p-l-20" style="background-color:#fff">
    <div class="block has-text-centered p-t-30">
        <img
          src="https://raw.githubusercontent.com/buefy/buefy/dev/static/img/buefy-logo.png"
          alt="Lightweight UI components for Vue.js based on Bulma"
          width="180"
        />
    </div>
    <ul class="menu-list">
    <li>
      <a  href="{{route('home')}}" class="{{Nav::isRoute('home')}}">
        <i class="fa fa-tachometer" aria-hidden="true"></i>
         Dashboard
      </a>
    </li>
    </ul>
    <p class="menu-label">
      Navigation Menu
    </p>
    <ul class="menu-list">
      <li>
        <a href="{{route('supplier.index')}}" class="has-submenu {{Nav::isResource('supplier')}}"> <i class="fa fa-fw fa-truck m-r-5"></i> Manage Suppliers</a>
        <ul class="submenu">
          <li><a href="{{route('supplier.index')}}" class="{{Nav::isResource('supplier')}}">Suppliers List</a></li>
          <li><a href="{{route('supplier.create')}}">Add Supplier</a></li>
        </ul>
      </li>
      <li>
        <a href="{{route('product.index')}}" class="has-submenu {{Nav::isResource('product')}}">
          <i class="fa fa-product-hunt" aria-hidden="true"></i>
          Manage Products
        </a>
        <ul class="submenu">
          <li><a class="{{Nav::isRoute('category.index')}}" href="{{route('category.index')}}">Category list</a></li>
          <li><a class="{{Nav::isRoute('category.create')}}">Create new category</a></li>
          <li><a class="{{Nav::isRoute('product.index')}}"href="{{route('product.index')}}">Products list</a></li>
          <li><a class="{{Nav::isRoute('product.create')}}" href="{{route('product.create')}}">Add new product</a></li>
        </ul>
      </li>
      <li>
        <a href="{{route('customer.index')}}" class="has-submenu {{Nav::isResource('customer')}}">
          <i class="fa fa-users" aria-hidden="true"></i>
          Manage Customers
        </a>
        <ul class="submenu">
          <li><a class="{{Nav::isRoute('customer.index')}}" href="{{route('customer.index')}}">Customer list</a></li>
          <li><a class="{{Nav::isRoute('customer.create')}}" href="{{route('customer.create')}}">Add new customer</a></li>
        </ul>
      </li>
      <li>
        <a  href="{{url('/home/sales/view')}}" class="has-submenu {{Nav::isResource('sale')}}">
          <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
          Manage Sales
        </a>
        <ul class="submenu">
          <li><a class="{{Nav::isRoute('/home/sales')}}" href="{{url('/home/sales/view')}}">Customer list</a></li>
          <li><a class="{{Nav::isRoute('/home/sales/create')}}" href="{{url('/home/sales/create')}}">Add new customer</a></li>
        </ul>
      </li>
    </ul>
  </aside>

