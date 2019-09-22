@extends('admin.admin')
@section('title', __('featureImage'))
@section('sitetitle', __('featureImage'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>

            <form role="form" method="POST" action="{{url('/admin/featureImage')}}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">

                    <div class="form-group col-md-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title_ar">Title</label>
                        <input type="text" id="title" name="title" class="form-control"  value="{!! old('title') !!}" />
                        <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                    </div>
                    <div class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">
                        <label for="img">Feature Image</label>
                        <input type="file" name="img" multiple class="form-control-file" id="img" aria-describedby="fileHelp">
                        <span class="help-block">{{ $errors->first('img', ':message') }}</span>
                    </div>

                    <hr>

                    <div class="form-group center ">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/admin/featureImage" class="btn btn-block btn-danger" role="button" >Cancel</a>
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


    </section>
@endsection