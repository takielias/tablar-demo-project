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
                            <h3 class="card-title">Tablar Kit Datepicker</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <x-label for="birth_date"/>
                            <x-flat-picker name="birth_date" class="mb-3"></x-flat-picker>

                            <x-label for="admission_date"/>
                            <x-lite-picker name="admission_date"></x-lite-picker>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
