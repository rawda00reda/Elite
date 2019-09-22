@extends('admin.admin')
@section('title', __('testimonial'))
@section('sitetitle', __('testimonial'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>
                    <form role="form" method="POST" action="{{url('/admin/testimonial')}}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group col-md-4 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control"  value="{!! old('name') !!}" />
                                <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                            </div>

                            <div class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">
                                <label for="img">Image</label>
                                <input type="file" name="img" multiple class="form-control-file" id="img" aria-describedby="fileHelp">
                                <span class="help-block">{{ $errors->first('img', ':message') }}</span>
                            </div>



                            <div class="form-group  {{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="content">Content</label>
                                <textarea class="form-control " id="content" name="content"
                                          style="width: 40%; height: 150px; font-size: 14px; line-height: 18px;border-radius: 1px; border: 1px  solid #dddddd; padding: 10px;">{{ old('content') }}</textarea>
                                <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                            </div>



                            <hr>

                            <div class="form-group center ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/admin/testimonial" class="btn btn-block btn-danger" role="button" >Cancel</a>
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