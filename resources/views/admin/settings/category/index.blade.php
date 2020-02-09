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
                            <h2>Categories</h2>
                            {{--  <p>Basic example without any additional modification classes</p>--}}
                        </div>
                        <div class="bsc-tbl">
                            <table class="table table-sc-ex {{--table-striped--}} table-hover {{--table-bordered--}}" {{--style="    box-shadow: 0 2px 10px rgba(0,0,0,.2);"--}}>
                                <thead class="thead-green">
                                <tr>

                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                               @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td></td>

                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection