Hello Mr.<h1>{{ Auth::guard('admin')->user()->name }}</h1>
<a href="{{ url('admin/logout') }}">Logout</a>
