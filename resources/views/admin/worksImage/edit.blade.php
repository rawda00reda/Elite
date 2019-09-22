@extends('admin.admin')
@section('title', __('Works'))
@section('sitetitle', __('Works'))

@section('content')



    <section class="content">
        <!-- COLOR PALETTE -->
        <div class=" box-default color-palette-box" >
            <div class="box" style="margin-left: 50px">

                <!-- /.box-header -->
                <div class="box-body">
                    <br><br>
                    <form role="form" method="POST" action="{{action('WorkImgController@update',$wimg->id)}}"  enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">

                        {{ csrf_field() }}
                        <div class="box-body">

                            <label for="works"></label>
                            <select name="work" class="form-control">
                                @foreach($works as $work)
                                    <option  {{$work->id == "$wimg->work" ? "selected" : "" }} value="{{$work->id}}">
                                        {{$work->work}} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group  {{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="img">Image</label>
                            <input type="file" name="img" multiple class="form-control-file" id="img" aria-describedby="fileHelp">
                            <span class="help-block">{{ $errors->first('img', ':message') }}</span>
                        </div>



                        <div class="form-group  {{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content">Content</label>
                            <textarea class="form-control " id="content" name="content"
                                      style="width: 40%; height: 150px; font-size: 14px; line-height: 18px;border-radius: 1px; border: 1px  solid #dddddd; padding: 10px;">{{ $wimg->content }}</textarea>
                            <span class="help-block">{{ $errors->first('content', ':message') }}</span>
                        </div>




                        <hr>

                            <div class="form-group center">
                                <div class="row">

                                    <div class=" col-md-4">
                                        <a href="/admin/worksImage" class="btn btn-block btn-danger" role="button">Cancel</a>
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