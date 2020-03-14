@extends('layouts.app')

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

                    You are logged in! <br>

                    @role('super-user')
                        <b>You're Super Bro!!!</b>
                    @endrole

                    <ul>
                        @if (auth()->user()->can('super-satu'))
                            <li>Super Satu</li>
                        @endif
                        @if (auth()->user()->can('super-dua'))
                            <li>Super Dua</li>
                        @endif
                        @if (auth()->user()->can('admin-satu'))
                            <li>Admin Satu</li>
                        @endif
                        @if (auth()->user()->can('user-satu'))
                            <li>User Satu</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
