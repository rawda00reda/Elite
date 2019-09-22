@extends('admin.admin')
@section('title','contact')
@section('sitetitle','contact')


@section('content')
    <section class="content"><br>
        <div class="box-default color-palette-box">
            <div class="box">
                <div class="box-header with-border" >
                    <button class="btn add  pull-right" style="border-radius: 3px; background-color:green;color: white; ">
                        <a href="/admin/contact/create" style="color: white" > <i class="fas fa-plus" style="color: white"></i> &nbsp;&nbsp;New
                        </a>
                    </button>
                </div><br><br>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-striped table-dark">

                        <tbody>
                        <tr>
                            <th   scope="col" style="width: 5%">ID</th>
                            <th  scope="col" style="width: 20%">Email</th>
                            <th  scope="col" style="width: 20%">Phone</th>
                            <th scope="col" style="width: 15%">Contact</th>

                            <th style="width: 20%">&nbsp;&nbsp;&nbsp;Operation </th>
                        </tr>
                        @if(count($contacts) > 0)

                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->email}}</td>
                                    <td>{{ $contact->phone}}</td>
                                    <td>{{ $contact->location}}</td>


                                    <td>
                                        <button class="btn btn-info"  style="border-radius: 60px; margin-left: 30px">
                                            <a href="contact/{{ $contact->id}}/edit"   ><i class="fas fa-edit" style="color:white"></i></a>
                                        </button>

                                        <a class="btn">
                                            <form action="{{action('ContactController@destroy', $contact['id'])}}" method="post">
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
