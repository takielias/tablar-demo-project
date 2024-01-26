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
                            <h3 class="card-title">Tablar Kit Inputs</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <x-label for="user_name"/>
                            <x-input name="user_name"/>
                            <x-label for="password"/>
                            <x-password name="password"/>
                            <x-label for="enable_user"/>
                            <x-checkbox name="enable_user" value="1" checked/>
                            <x-label for="enable"/>
                            <x-toggle name="enable" value="1" checked/>
                            <x-label for="user_type"/>
                            <x-radio name="user_type" value="1" checked/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
