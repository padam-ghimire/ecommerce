<!-- <ul>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
<li><a href="#">Item list</a></li>
</ul> -->


<ul>

    @foreach(auth()->user()->roles as $role)

    @includeIf('partials.'.$role->role.'-account-sidebar')

    @endforeach

</ul>