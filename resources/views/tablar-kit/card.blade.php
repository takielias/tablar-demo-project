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
                            <h3 class="card-title">Tablar Kit Cards</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <x-card class="mb-3">
                                <x-slot:header>
                                    <h3 class="card-title">Card title</h3>
                                </x-slot:header>
                                <x-slot:body>
                                    <div class="card-body">Simple card</div>
                                </x-slot:body>
                            </x-card>

                            <x-card class="mb-3">
                                <x-slot:header>
                                    <h3 class="card-title">Card title</h3>
                                </x-slot:header>
                                <x-slot:stamp>
                                    <div class="card-stamp-icon bg-yellow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                                            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                        </svg>
                                    </div>
                                </x-slot:stamp>
                                <x-slot:body>
                                    <div class="card-body">Simple card</div>
                                </x-slot:body>
                            </x-card>

                            <x-card class="mb-3">
                                <x-slot:header>
                                    <h3 class="card-title">Card title</h3>
                                </x-slot:header>
                                <x-slot:ribbon>
                                    <div class="ribbon bg-red">NEW</div>
                                </x-slot:ribbon>
                                <x-slot:body>
                                    <div class="card-body">Simple card</div>
                                </x-slot:body>
                            </x-card>

                            <x-card>
                                <x-slot:header>
                                    <h3 class="card-title">Card title</h3>
                                </x-slot:header>
                                <x-slot:body>
                                    <div class="card-body">Simple card</div>
                                </x-slot:body>
                                <x-slot:footer>
                                    <a href="/docs/4.0/cards" class="btn btn-primary">Go somewhere</a>
                                </x-slot:footer>
                            </x-card>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
