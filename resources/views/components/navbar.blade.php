<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-medium" href="#">
            <i class="fa-solid fa-coins"></i>
            <span>Sistema Contable</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($options as $option)
                    @if($option['name'] == $active)
                        <li class="nav-item">
                            <a class="nav-link fw-medium active" aria-current="page" href="{{$option['url']}}">
                                <i class="fa {{$option['icon']}}"></i>
                                <span>{{$option['title']}}</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="{{$option['url']}}">
                                <i class="fa {{$option['icon']}}"></i>
                                <span>{{$option['title']}}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <form class="d-flex" method="post" action="{{route('api.users.logout')}}">
                @csrf
                <button class="btn btn-secondary" type="submit">
                    <i class="fa fa-sign-out"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
