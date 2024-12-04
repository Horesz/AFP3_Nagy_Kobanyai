@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('E-mail cím megerősítése') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Egy új megerősítő linket küldtünk az e-mail címedre.') }}
                        </div>
                    @endif

                    {{ __('A folytatás előtt, kérjük ellenőrizd az e-mail fiókodat a megerősítő linkért.') }}
                    {{ __('Ha nem kaptad meg az e-mailt') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kattints ide, hogy kérj egy újat') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
