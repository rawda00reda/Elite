@extends('admin.admin')
@section('title', __('works'))
@section('sitetitle', __('works'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>
                    <form role="form" method="POST" action="{{url('/admin/works')}}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="input-field col s12 m6">
                                <div class="row">


                            <div class="form-group col-md-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title_ar">Title</label>
                                <input type="text" id="title" name="title" class="form-control"  value="{!! old('title') !!}" />
                                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                            </div>


                                <div class="form-group col-md-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="work">Work</label>
                                    <input type="text" id="work" name="work" class="form-control"  value="{!! old('work') !!}" />
                                    <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                                </div>
                                </div>






                            <hr>

                            <div class="form-group center ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/admin/works" class="btn btn-block btn-danger" role="button" >Cancel</a>
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