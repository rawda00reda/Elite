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
                    <form role="form" method="POST" action="{{url('/admin/achievements')}}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="input-field col s12 m6">

                                <label for="icon">Icon</label>

                                <select name="icon" id="sample" class="fa" style="width:120px;height:40px">
                                    <option value="fas fa-store-alt">&#Xf54f;</option>

                                    <option value="fas fa-trophy"
                                            style="  font-size: 50px;">&#xf091;</option>
                                    <option value="fas fa-child"  style="  font-size: 50px;" >&#xf1ae;</option>

                                    <option value="fab fa-connectdevelop" style="  font-size: 50px;">&#xf20e;</option>
                                    <option value="fa fa-building" style="  font-size: 50px;">&#xf1ad;</option>
                                </select>

                                <br>

                                <div class="form-group col-md-2  {{ $errors->has('content') ? ' has-error' : '' }}">
                                    <label for="number">Number</label>
                                    <input type="number" min="1"  class="form-control " id="number" name="number"{{ old('number') }}>
                                    <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                                </div>

                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title_ar">Text</label>
                                <input type="text" id="text" name="text" class="form-control"  value="{!! old('text') !!}" />
                                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                            </div>







{{--                                                    <div class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">--}}
{{--                                                        <label for="img">Image</label>--}}
{{--                                                        <input type="file" name="img" multiple class="form-control-file" id="img" aria-describedby="fileHelp">--}}
{{--                                                        <span class="help-block">{{ $errors->first('img', ':message') }}</span>--}}
{{--                                                    </div>--}}
                            <hr>

                            <div class="form-group center ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/admin/achievements" class="btn btn-block btn-danger" role="button" >Cancel</a>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-block btn-primary" >Add</button>
                                    </div>
                                </div>




                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- /.box -->
        </div>

        {{--    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>--}}
        {{--    <script>--}}
        {{--        CKEDITOR.replace( 'content' );--}}
        {{--    </script>--}}
    </section>
@endsection