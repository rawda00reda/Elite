@extends('admin.admin')
@section('title', __('advantage'))
@section('sitetitle', __('advantage'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>
                    <form role="form" method="POST" action="{{action('WorkController@update',$work->id)}}"  enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">

                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="input-field col s12 m6">
                                <div class="form-group col-md-4 {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title_ar">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"  value="{{$work->title}}" />
                                    <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                                </div>


                                <div class="form-group col-md-4 {{ $errors->has('work') ? ' has-error' : '' }}">
                                    <label for="work">Work</label>
                                    <input type="text" id="work" name="work" class="form-control"  value="{{$work->work}}" />
                                    <span class="help-block">{{ $errors->first('title', ':message') }}</span>
                                </div>
                            </div>















                                <hr>

                                <div class="form-group center">
                                    <div class="row">

                                        <div class=" col-md-4">
                                            <a href="/admin/works" class="btn btn-block btn-danger" role="button">Cancel</a>
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

    </section>
@endsection