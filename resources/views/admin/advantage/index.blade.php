@extends('admin.admin')
@section('title','advantages')
@section('sitetitle','advantages')


@section('content')
    <section class="content"><br>
        <div class="box-default color-palette-box">
            <div class="box">
                <div class="box-header with-border" >
                    <button class="btn add  pull-right" style="border-radius: 3px; background-color:green;color: white; ">
                        <a href="/admin/advantage/create" style="color: white" > <i class="fas fa-plus" style="color: white"></i> &nbsp;&nbsp;New Advantage
                        </a>
                    </button>
                </div><br><br>
                <!-- /.box-header -->
                <div class="box-body container-">
                    <table class="table table-striped table-dark">

                        <tbody>
                        <tr>
                            <th   scope="col" style="width: 5%">ID</th>
                            <th   scope="col" style="width: 5%">Icon</th>
                            <th  scope="col" style="width: 15%">Title</th>
                            <th  scope="col" style="width: 15%">Content</th>

                            <th style="width: 20%">&nbsp;&nbsp;&nbsp;Operation</th>
                        </tr>
                        @if(count($advs) > 0)

                            @foreach($advs as $adv)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <i class="{{$adv->icon}}"></i>
                                    </td>
                                    <td>{{ $adv->title}}</td>
                                    <td>{{ $adv->content}}</td>


                                    <td>
                                        <button class="btn btn-info"  style="border-radius: 60px">
                                            <a href="advantage/{{ $adv->id}}/edit" >
                                                <i class="fas fa-edit" style="color:white"></i>
                                            </a>
                                        </button>

                                        <a class="btn">
                                            <form action="{{action('AdvantageController@destroy', $adv['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button  type="submit" class="btn btn-danger" style="border-radius: 60px"><i class="fas fa-trash-alt"></i></button >
                                                @csrf
                                            </form>
                                        </a>
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
