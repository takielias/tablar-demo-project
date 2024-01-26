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
                            <h3 class="card-title">Tablar Kit Dropdown</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <x-label for="local_product"/>
                            <x-select name="local_product" class="mb-3" :options="$products"></x-select>
                            <x-label for="remote_product"/>
                            <x-tom-select remote-data="true" class="mb-3" name="remote_product"
                                          item-search-route="tablar-kit.item.search"></x-tom-select>


                            <x-label for="First List"/>
                            <x-dependent-select name="first_list"
                                                target-dropdown="dependent_product_1"
                                                target-data-route="get.product.target.list.1"
                                                placeholder="Select Product"
                                                :options="$products">
                            </x-dependent-select>

                            <x-label for="Second List"/>
                            <x-dependent-select name="second_list"
                                                target-dropdown="dependent_product_2"
                                                id="dependent_product_1"
                                                target-data-route="get.product.target.list.2">
                            </x-dependent-select>

                            <x-label for="Final List"/>
                            <x-dependent-select name="final_list"
                                                id="dependent_product_2">
                            </x-dependent-select>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
