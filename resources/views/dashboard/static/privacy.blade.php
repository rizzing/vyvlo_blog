@extends('dashboard.layouts.app')

@section('content')

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="element-box">
                            <div class="element-info">
                                <div class="element-info-with-icon">
                                    <div class="element-info-icon">
                                        <div class="os-icon os-icon-documents-03"></div>
                                    </div>
                                    <div class="element-info-text">
                                        <h5 class="element-inner-header">
                                            Privacy policy
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="{{route('post_edit', $data->name)}}">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('heading') ? ' has-error has-danger' : '' }}">
                                            <label for="">Heading</label>
                                            <input value="{{(old('heading'))?old('heading'):$data->heading}}" name="heading" class="form-control" placeholder="Heading" type="text">
                                            @if ($errors->has('heading'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('heading')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('title') ? ' has-error has-danger' : '' }}">
                                            <label for="">Title (SEO)</label>
                                            <input value="{{(old('title'))?old('title'):$data->title}}" name="title" class="form-control" placeholder="Title" type="text">
                                            @if ($errors->has('title'))
                                                <div class="help-block form-text with-errors form-control-feedback">
                                                    {{$errors->first('title')}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    {{--<div class="col-sm-12">--}}
                                        {{--<div class="form-group{{ $errors->has('text_1') ? ' has-error has-danger' : '' }}">--}}
                                            {{--<label> Text</label>--}}
                                            {{--<textarea class="form-control" name="text_1" rows="20" placeholder="Text">{{old('text')}}</textarea>--}}
                                            {{--@if ($errors->has('text'))--}}
                                                {{--<div class="help-block form-text with-errors form-control-feedback">--}}
                                                    {{--{{$errors->first('text')}}--}}
                                                {{--</div>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>

                                <div class="form-buttons-w"><button class="btn btn-primary" type="submit"> Update</button></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
