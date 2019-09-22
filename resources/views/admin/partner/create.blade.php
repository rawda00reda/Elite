@extends('admin.admin')
@section('title', __('partner'))
@section('sitetitle', __('partner'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>

            <form role="form" method="POST" action="{{url('/admin/partner')}}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">

                    <div class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">
                        <label for="img">Partner</label>
                        <input type="file" name="img" multiple class="form-control-file" id="img" aria-describedby="fileHelp">
                        <span class="help-block">{{ $errors->first('img', ':message') }}</span>
                    </div>

                    <hr>

                    <div class="form-group center ">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="/admin/partner" class="btn btn-block btn-danger" role="button" >Cancel</a>
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