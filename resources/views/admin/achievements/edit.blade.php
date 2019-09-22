@extends('admin.admin')
@section('title', __('achievements'))
@section('sitetitle', __('achievements'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>
                    <form role="form" method="POST" action="{{action('AchievementController@update',$achiev->id)}}"  enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">

                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="input-field col s12 m6">


                                <label for="icon">Icon</label>

                                <select name="icon" id="sample" class="fa" style="width:120px;height:40px">
                                    <option {{$achiev->icon === "fas fa-store-alt" ? "selected" : "" }}  value="fas fa-store-alt">&#Xf54f;</option>

                                    <option {{$achiev->icon === "fas fa-trophy" ? "selected" : "" }} value="fas fa-trophy"
                                            style="  font-size: 50px;">&#xf091;</option>
                                    <option  {{$achiev->icon === "fas fa-child" ? "selected" : "" }} value="fas fa-child"  style="  font-size: 50px;" >&#xf1ae;</option>

                                    <option  {{$achiev->icon === "fab fa-connectdevelop" ? "selected" : "" }}  value="fab fa-connectdevelop" style="  font-size: 50px;">&#xf20e;</option>
                                    <option value="fa fa-building" style="  font-size: 50px;">&#xf1ad;</option>
                                </select>

                                <br>

                                <div class="form-group col-md-2  {{ $errors->has('content') ? ' has-error' : '' }}">
                                    <label for="number">Number</label>
                                    <input type="number" min="1"  class="form-control " id="number" name="number" value="{{$achiev->number}}">
                                    <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                                </div>

                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title_ar">Text</label>
                                <input type="text" id="text" name="text" class="form-control"  value="{{$achiev->text}}" />
                                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                            </div>

                            <hr>

                            <div class="form-group center">
                                <div class="row">

                                <div class=" col-md-4">
                                    <a href="/admin/achievements" class="btn btn-block btn-danger" role="button">Cancel</a>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-block btn-primary">Update</button>
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
@endsection