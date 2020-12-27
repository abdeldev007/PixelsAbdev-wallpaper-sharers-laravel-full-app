 
    <nav id="navbar" class="fixed-top  navbar navbar-expand-lg  ">
    <a class="navbar-brand active" href="#">PixelsAbdev</a>
    <button class="btn btn-outline-warning   navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-align-justify  "></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    CATEGORIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">CAT1</a>
                    <a class="dropdown-item" href="#">CAT2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">CAT3</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">OK</button>
        </form>
        @guest

        @else
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" id="navBarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="user-block">

                        <img class="img-circle img-bordered-sm" src="/img/logo.png" alt="user image" />

                    </div>

                </a>

            </div>

        @endguest
    </div>
</nav>
 