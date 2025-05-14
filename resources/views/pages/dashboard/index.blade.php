{{-- layout --}}
@extends("layout")

{{-- content --}}
@section("content")
    <x-navbar active="dashboard"/>

    <div class="container mt-4">
        <div class="row g-4">
            <div class="col-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active text-secondary" aria-current="page" href="#">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
