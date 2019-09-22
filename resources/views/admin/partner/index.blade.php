
@extends('admin.admin')
@section('title','partner')
@section('sitetitle','partner')


@section('content')

    <section class="content"><br>
        <div class="box-default color-palette-box">
            <div class="box">
                            <div class="box-header with-border" >
                                <button class="btn add  pull-right" style="border-radius: 3px; background-color:green;color: white; ">
                                    <a href="/admin/partner/create" style="color: white" > <i class="fas fa-plus" style="color: white"></i> &nbsp;&nbsp;New Partner
                                    </a>
                                </button>
                            </div><br><br>
            <!-- /.box-header -->
                <div class="box-body container-">

                                        <table class="table table-striped table-dark">
                                            <tbody>
                                            <tr>
                                                <th scope="col" style="width:8%"></th>

                                                <th  scope="col" style="width:140px;height: 93.33">Partner</th>

                                                <th  scope="col" style="width:16%">Operation</th>


                                            </tr>

                                            @if(count($partners) > 0)

                                                @foreach($partners as $partner)
                                            <tr>
                                                <td></td>
                                                <td{{ $loop->iteration }}></td>

                                                <td> <img class="card-img-top" src="{{ asset('imgs/partners/' . $partner->img) }} " style="width: 150px;height: 150px; " >
                                                </td>
                                                <td>
                                                    <button class="btn btn-info"  style="border-radius: 60px">
                                                        <a href="partner/{{ $partner->id}}/edit" >
                                                            <i class="fas fa-edit" style="color:white"></i>
                                                        </a>
                                                    </button>

                                                    <a class="btn">
                                                        <form action="{{action('PartnerController@destroy', $partner['id'])}}" method="post">
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
