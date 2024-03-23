<nav class="navbar navbar-expand-lg navbar-dark bg-orange">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> 
            <img src="images/eatways.png" alt="Logo" style="width: 100px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tips') }}">Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kuliner') }}">Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/belanja') }}">Belanja</a>
                </li>
            </ul>            
            <form class="d-flex" role="search" action="{{ url('/login') }}" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Cari resep" aria-label="Search" style="width: 350px;">
                <button class="btn btn-warning rounded-circle" type="submit">
                    <img src="images/user.png" alt="Profile" style="width: 24px; height: 24px; border-radius: 50%;">
                </button>
            </form>            
        </div>
    </div>
</nav>
