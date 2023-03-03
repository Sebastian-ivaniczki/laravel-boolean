<header class="bg-info ">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <a href="{{route('home')}}"><img src="../img/eggs.png" alt="" class="m-0 pe-3" height="100px" width="150 px"></a>
            <div class="container-fluid ">
                <a class="navbar-brand text-light" href="{{route('home')}}">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light " aria-current="page" href="{{route('eggs.index')}}">Easter Eggs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>