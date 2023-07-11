Hello Group = <h1>{{ Auth::guard('group')->user()->group_name }}</h1>
<a href="{{ url("group/blog/add") }}">Add Blog</a><br>
<a href="{{ url('group/logout') }}">Logout</a>
