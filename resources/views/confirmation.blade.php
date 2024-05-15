<!-- resources/views/confirmation.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirmation') }}</div>

                    <div class="card-body">
                        {{ __('Votre commande a été passée avec succès.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
