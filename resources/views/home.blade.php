{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection --}}

<div>
    
    @if(Auth::check())
    @switch(Auth::user()->role->nama)
        @case('admin')
            @include('beranda')
            @break
        @case('group_user')
            @include('dashboard-user')
            @break
        @default
            
    @endswitch

    @else
    @include('layouts.app')
    @endif
    
</div>




 

