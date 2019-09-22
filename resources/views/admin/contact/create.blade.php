@extends('admin.admin')
@section('title', __('contact'))
@section('sitetitle', __('contact'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>
                    <form role="form" method="POST" action="{{url('/admin/contact')}}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group col-md-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="Who We Are"> <i class="fas fa-envelope"></i> &nbsp; Email </label>
                                <input type="email" id="email" name="email" class="form-control"  value="{!! old('email') !!}" />
                                <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                            </div>





                            <div class="form-group col-md-4  {{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="content"><i class="fas fa-phone"></i> &nbsp;Phone</label>
                             <input type="text" class="form-control" id="phone" name="phone" value="{!! old('phone') !!}" >
                                <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                            </div>


                            <div class="form-group col-md-4  {{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="location"><i class="fas fa-map-marker-alt"></i> &nbsp;Location</label>
                                <input type="text" name="location"  class="form-control" id="location" value="{!! old('location') !!}">
                                <span class="help-block">{{ $errors->first('location', ':message') }}</span>
                            </div>
                            <hr>

                            <div class="form-group center ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/admin/contact" class="btn btn-block btn-danger" role="button" >Cancel</a>
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