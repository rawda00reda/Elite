@extends('admin.admin')
@section('title', __('Features'))
@section('sitetitle', __('Features'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>
                    <form role="form" method="POST" action="{{action('FeatureController@update',$feature->id)}}"  enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">

                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="input-field col s12 m6">


                                <select name="icon" id="icon" class="fa" style="width:120px;height:40px">
                                    <option value=""></option>
                                    <option {{$feature->icon === "fas fa-rocket" ? "selected" : "" }} value="fas fa-rocket" style="  font-size: 50px;">&#Xf135;</option>
                                    <option {{$feature->icon === "fas fa-users" ? "selected" : "" }} value="fas fa-users"  style="  font-size: 50px;" >&#xf0c0;</option>
                                    <option {{$feature->icon === "fas fa-wrench" ? "selected" : "" }} value="fas fa-wrench" style="  font-size: 50px;">&#xf0ad;</option>

                                    <label for="icon">Icon</label>

                                </select>



                            <div class="form-group col-md-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title_ar">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value="{{$feature->title}}" />
                                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                            </div>





                            <div class="form-group  {{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="body_en">Content</label>
                                <textarea class="form-control " id="content" name="content"
                                          style="width: 40%; height: 150px; font-size: 14px; line-height: 18px;border-radius: 1px; border: 1px  solid #dddddd; padding: 10px;">{{ $feature->content }}</textarea>
                                <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                            </div>

{{--                                <div class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">--}}
{{--                                    <label for="img">Feature Image</label>--}}
{{--                                    <input type="file" name="img" multiple class="form-control-file" id="img" aria-describedby="fileHelp">--}}
{{--                                    <img class="card-img-top" src="{{ asset('imgs/features/' . $feature->img) }} " style="width:150px;height:150px;" >--}}

{{--                                    <span class="help-block">{{ $errors->first('img', ':message') }}</span>--}}
{{--                                </div>--}}


                            <hr>

                            <div class="form-group center">
                                <div class="row">

                                <div class=" col-md-4">
                                    <a href="/admin/featurs" class="btn btn-block btn-danger" role="button">Cancel</a>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-block btn-primary">Update</button>
                                </div>
                                </div>
                            </div>



                            </div>

                            </div>
                    </form>
                        </div>

                </div>
            </div>
            <!-- /.box -->

        {{--    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>--}}
        {{--    <script>--}}
        {{--        CKEDITOR.replace( 'content' );--}}
        {{--    </script>--}}
    </section>
    <script src="https://kit.fontawesome.com/a2c308319d.js"></script>
@endsection