@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <h1>الطلبات ({{count($registers)}})</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>اللقب</th>
                <th>الإسم</th>
                <th>تاريخ الميلاد</th>
                <th>الولاية</th>
                <th>البريد الإلكتروني</th>
                <th>الهاتف</th>
                <th>المهنة</th>
                <th>المستوى</th>
                <th>رابط</th>
                <th>الورشة</th>
            </tr>

           @foreach($registers as $register)
                <tr>
                    <td>{{$register->last_name}}</td>
                    <td>{{$register->first_name}}</td>
                    <td>{{$register->dob}}</td>
                    <td>{{$register->state}}</td>
                    <td>{{$register->email}}</td>
                    <td>{{$register->phone}}</td>
                    <td>{{$register->job}}</td>
                    <td>{{$register->level}}</td>
                    <td>{{$register->url}}</td>
                    <td>{{$register->course->title}}</td>
                </tr>
           @endforeach
        </table>
    </div>
</div>
@endsection
