@extends('layouts.main')
@section('content')
    <style>

    </style>
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Settings</h2>
                            {{--  <p>Basic example without any additional modification classes</p>--}}
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <a href="{{route('settings.categories')}}">
                                <div class="bsc-tbl">
                                    <div class="popovers-pr-sg bottom popovers-pr-sg-mg-n">
                                        <h4><i class="fa fa-list-alt"></i> Category</h4>
                                        <p>Category includes the department under which customer ask for support.</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div class="bsc-tbl">
                                    <div class="popovers-pr-sg bottom popovers-pr-sg-mg-n">
                                        <h5>Others </h5>
                                        <p>Sed posuere consectetur est at lobortis crylia. Aenean eu leo quam. Pellentesque ornarefa sem lacinia quam venenatis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div class="bsc-tbl">
                                    <div class="popovers-pr-sg bottom popovers-pr-sg-mg-n">
                                        <h5>Others</h5>
                                        <p>Sed posuere consectetur est at lobortis crylia. Aenean eu leo quam. Pellentesque ornarefa sem lacinia quam venenatis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection