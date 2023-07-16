@extends('Layout.admin-layout')
@section('content')




<div class="media-center-admin" style="display: inline-block; width:100%">
    <h4 class="h4"> عرض الاستفسارات</h4>

</div>


@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<table class="table" style="width:100%;">

    <thead>
        <th style="font-size: 14px" scope="col">#</th>

        <th style="font-size: 14px" scope="col">اسم المرسل </th>
        <th style="font-size: 14px" scope="col"> البريد الإلكتروني</th>

        <th style="font-size: 14px" scope="col"> تاريخ الإضافة</th>
        <th style="font-size: 14px" scope="col"> </th>

        @foreach ($inquiry as $n)
        <tr>
            <td style="font-size: 14px">{{ $n->id }}</td>

            <td style="font-size: 14px">{{ $n->name }}</td>
            <td style="font-size: 14px">{{ $n->email }}</td>

            <td style="font-size: 14px">{{ Carbon\Carbon::parse($n->created_at)->format('Y-m-d') }}

            <td style="font-size: 14px">
                <a href="" data-toggle="modal" data-target="#myModal{{$n->id}}"> عرض المزيد
                </a>
            </td>

            

            <div class="modal" id="myModal{{$n->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="margin-top: 180px; width: 880px" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 style="    font-family: 'Ara Aqeeq Bold'"> تفاصيل الاستفسار

                            </h3>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                        <h4>اسم المرسل : <b>{{$n->name}}</b></h4>
                        <h4>البريد الإلكتروني : <b>{{$n->email}}</b></h4>
                        <h4>الاستفسار: 
                            <br>
                            <b>
                            {{ $n->inquiry }}

                            </b>
                        </h4>


                        </div>
                        
                    </div>



                </div>
            </div>



        </tr>
        @endforeach



    </thead>
</table>
{{ $inquiry->render() }}
@endsection