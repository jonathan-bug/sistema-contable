{{-- layout --}}
@extends("layout")

{{-- styles --}}
@push("styles")
<style>
    body {
        height: 100vh;
    }

    .container, .row {
        height: inherit;
    }
</style>
@endpush

{{-- content --}}
@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-center">
                <form class="card flex-grow-1 shadow-sm" method="post" action="{{route('api.users.authenticate')}}">
                    @csrf
                    <div class="card-header">
                        <h2 class="card-title text-center fw-bold">Login</h2>
                    </div>
                    <div class="card-body">
                        @if(session("error"))
                            <div class="alert alert-dismissible alert-danger">
                                Credenciales invalidas
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="form-label" for="">Email</label>
                            <input class="form-control" name="email" type="text" value="" placeholder="Correo Electrónico"/>
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label" for="">Contraseña</label>
                            <input class="form-control" name="password" type="password" value="" placeholder="Contraseña"/>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end gap-2">
                        <button class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
