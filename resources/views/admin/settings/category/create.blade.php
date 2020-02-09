@extends('layouts.main')
@section('content')

    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form method="post" action="{{route('settings.categories.store')}}">
                        {{csrf_field()}}
                        <div class="form-element-list mg-t-30">
                            <div class="cmp-tb-hd">
                                <h4>Add new Category</h4>
                                {{--  <p>Bootstrap-select is a jQuery plugin that utilizes Bootstrap's dropdown.js to style and bring additional functionality to standard select elements.</p>
                            --}}  </div>


                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-example-int">
                                        <div class="form-group">
                                            <div class="nk-int-st">
                                                <input type="text" class="form-control input-sm" name="category_name" placeholder="Category Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-theme-color">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
