@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tablar Kit Buttons</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <x-button class="mb-3">Click</x-button>
                            <x-button value="Button" class="mb-3"/>
                            <x-logout class="mb-3" :action="route('logout')"/>
                            <x-form-button class="btn btn-primary" :action="route('logout')">
                                Sign Out
                            </x-form-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
