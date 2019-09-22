@extends('admin.admin')
@section('title','Features')
@section('sitetitle','Features')


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
                            <th   scope="col" style="width: 5%">ID</th>

                            <th   scope="col" style="width: 5%">Icon</th>
                            <th  scope="col" style="width: 15%">Title</th>
                            <th  scope="col" style="width: 15%">Content</th>

                            <th style="width: 20%">&nbsp;&nbsp;&nbsp;Edit</th>
                        </tr>
                        @if(count($features) > 0)

                            @foreach($features as $feature)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <i class="{{$feature->icon}}"></i>
                                    </td>
                                    <td>{{ $feature->title}}</td>
                                    <td>{{ $feature->content}}</td>




                                    <td>
                                    <button class="btn btn-info"  style="border-radius: 60px">
                                        <a href="featurs/{{ $feature->id}}/edit" >
                                            <i class="fas fa-edit" style="color:white"></i>
                                        </a>
                                    </button>

{{--                                    <a class="btn">--}}
{{--                                        <form action="{{action('FeatureController@destroy', $feature['id'])}}" method="post">--}}
{{--                                            {{csrf_field()}}--}}
{{--                                            <input name="_method" type="hidden" value="DELETE">--}}
{{--                                            <button  type="submit" class="btn btn-danger" style="border-radius: 60px"><i class="fas fa-trash-alt"></i></button >--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </a>--}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

{{--                    <table class="table table-striped table-dark">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <th scope="col" style="width:8%"></th>--}}
{{--                           <th  scope="col" style="width:40%">Features Image</th>--}}
{{--                            <th  scope="col" style="width:16%">Edit</th>--}}


{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td></td>--}}
{{--                            <td> <img class="card-img-top" src="{{ asset('imgs/features/' . $feature->img) }} " style="width: 150px;height: 150px; " >--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <button class="btn btn-info"  style="border-radius: 60px">--}}
{{--                                    <a href="featurs/{{ $feature->id}}/editImg" >--}}
{{--                                        <i class="fas fa-edit" style="color:white"></i>--}}
{{--                                    </a>--}}
{{--                                </button>--}}

{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
                    <div class="box-footer clearfix">
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
