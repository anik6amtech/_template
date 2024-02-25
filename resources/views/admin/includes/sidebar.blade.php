<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="./index.html">
            <img src="{{ asset('') }}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>


            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  active ">
                    <a class="nav-link  active " href="./index.html">
                        <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./examples/icons.html">
                        <i class="ni ni-planet text-blue"></i> Pages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('blogs.index')}}">
                        <i class="ni ni-pin-3 text-orange"></i> Blogs
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
