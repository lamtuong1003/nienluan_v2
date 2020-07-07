@extends('master')
@section('content')
    <section class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">MSSV</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Batch</th>
                <th scope="col">Course/Module</th>
                <th scope="col">Available</th>
                <th scope="col">Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($listchecking as $list)
                <tr>
                    <th scope="row">{{$list->id}}</th>
                    <td>{{$list->MSSV}}</td>
                    <td>{{$list->TenSV}}</td>
                    <td>{{$list->LopSV}}</td>
                    <td>{{$list->idMHoc}}</td>
                    <td>{{$list->MonHoc}}</td>
                    @if($list->checking == 1)
                        <td>Yes</td>
                        @else
                        <td>No</td>
                    @endif
                    <td>{{$list->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
