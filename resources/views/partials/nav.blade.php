<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="{{ route('home') }}">Blog</a>
            

            @if(Auth::check())
                <a class="nav-link" href="{{ url('/posts/create') }}">Create</a>
                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>  
                <a class="nav-link" href="{{ url('/logout')}}">Logout</a>                 
            @else
                <a class="nav-link ml-auto" href="{{ url('/login')}}">Login</a>            
            @endif
        </nav>
    </div>
</div>