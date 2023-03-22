<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt="" width="50px"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo.png')}}" width="50px" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
		</div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt="" width="50px"></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-main-title">

					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="{{route('/')}}">
							<i data-feather="home"></i><span>{{ trans('Dashboard') }}</span>
						</a>
					</li>

					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Shop') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('shop.create')}}">Add New Shop
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('shop.index')}}">All Shop List
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('productdetails.add')}}">Product Details Add
								</a>
							</li>
						</ul>
					</li>

					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Grocery Store') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('grocery.create')}}">Add New Grocery
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('grocery.index')}}">All Grocery Index
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('grocery.productdetails.add')}}">Product Details Add
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Masjid/Islamic') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
								<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{ route('islamic.create') }}">Add
								</a>
							</li>

							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{ route('islamic.index') }}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Lawyer/Attorney') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{ route('lawyer.create') }}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{ route('lawyer.index') }}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Restaurant') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('restaurant.create')}}">Add Restaurant
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('restaurant.index')}}">All Restaurant
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('restaurant.productdetails')}}">Product Details
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Retailer') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('retailer.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('retailer.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Mortgage') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('mortage.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('mortage.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Havc') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('havc.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('havc.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Money Send') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('moneysend.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('moneysend.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Doctors') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('doctor.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('doctor.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Community Person') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('communityperson.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('communityperson.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('News Blog') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('newsblog.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('newsblog.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Online Business') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('restaurant.create')}}">Add
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('restaurant.index')}}">All
								</a>
							</li>
						</ul>
					</li>
					
					{{-- <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="#">
							<i data-feather="file-text"></i><span>{{ trans('Vendor Management') }}</span>
							<div class="according-menu"><i class="fa fa-angle-{{request()->route()->getPrefix() == '/forms' ? 'down' : 'right' }}"></i></div>
						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('vendor.create')}}">Add New Vendor
								</a>
							</li>
							<li>
								<a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}" href="{{route('vendor.index')}}">Vendor List
								</a>
							</li>

						</ul>
					</li> --}}
					{{-- <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="{{route('customer.index')}}">
							<i data-feather="file-text"></i><span>{{ trans('Customer Management') }}</span>

						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">

						</ul>
					</li> --}}
					{{-- <li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="{{route('about.edit')}}">
							<i data-feather="file-text"></i><span>{{ trans('Manage About Us') }}</span>
						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">

						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="{{route('privacy.edit')}}">
							<i data-feather="file-text"></i><span>{{ trans('manage Privacy Policy') }}</span>
						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="{{route('support.edit')}}">
							<i data-feather="file-text"></i><span>{{ trans('Manage Help & Support') }}</span>
						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">
						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/forms' ? 'active' : '' }}" href="{{route('service.edit')}}">
							<i data-feather="file-text"></i><span>{{ trans('Manage Terms of Service') }}</span>
						</a>
							<ul class="sidebar-submenu" style="display: {{ request()->route()->getPrefix() == '/forms' ? 'block;' : 'none;' }}">

						</ul>
					</li> --}}

		</nav>
	</div>
</div>
