
@extends('admin.admin')
@section('title','FeatureImage')
@section('sitetitle','FeatureImage')


@section('content')

    <section class="content"><br>
        <div class="box-default color-palette-box">
            <div class="box">
            {{--                <div class="box-header with-border" >--}}
            {{--                    <button class="btn add  pull-right" style="border-radius: 3px; background-color:green;color: white; ">--}}
            {{--                        <a href="/admin/featurs/create" style="color: white" > <i class="fas fa-plus" style="color: white"></i> &nbsp;&nbsp;New--}}
            {{--                        </a>--}}
            {{--                    </button>--}}
            {{--                </div><br><br>--}}
            <!-- /.box-header -->
                <div class="box-body container-">

                                        <table class="table table-striped table-dark">
                                            <tbody>
                                            <tr>
                                                <th scope="col" style="width:8%"></th>
                                               <th  scope="col" style="width:40%">Title</th>
                                                <th  scope="col" style="width:40%">Features Image</th>

                                                <th  scope="col" style="width:16%">Edit</th>


                                            </tr>

                                            @if(count($fimgs) > 0)

                                                @foreach($fimgs as $fimg)
                                            <tr>
                                                <td></td>
                                                <td{{ $loop->iteration }}></td>
                                                <td>{{$fimg->title}}</td>

                                                <td> <img class="card-img-top" src="{{ asset('imgs/features/' . $fimg->img) }} " style="width: 150px;height: 150px; " >
                                                </td>
                                                <td>
                                                    <button class="btn btn-info"  style="border-radius: 60px">
                                                        <a href="featureImage/{{ $fimg->id}}/edit" >
                                                            <i class="fas fa-edit" style="color:white"></i>
                                                        </a>
                                                    </button>


                                                </td>
                                            </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                    <div class="box-footer clearfix">
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
