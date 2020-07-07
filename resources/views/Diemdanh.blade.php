@extends('master')
@section('content')
<section class="container">
    <fieldset class="contend for title" >
        <header ><h4>APTECH</h4></header>
        @if(Auth::check())
            <p>hello</p>
        @endif
        <h2 style="text-align: center;color: #333333 "><b>INTERNATIONAL DIVISION</b></h2>
        <p style="text-align: center">A Division of Aptech Training & Education(SBU)</p>
        <h4 style="text-align: center;color: #333333"><b>STUDENT ATTENDANCE REGISTER</b></h4>
    </fieldset>
    <form class="search-form" name="search-form">
        <p>Centre Name: <b>MEKONG DELTA-APTECH</b></p>
        <div name="Class information" class="attendace">
            <label>Batch
                <select id="batch" style="color:Tomato;">
                    <option disabled selected>Choose Class</option>
                    @foreach($batch as $id_class)
                        <option value="{{$id_class->LOP_ID}}">{{$id_class->LOP_ID}}</option>
                    @endforeach
                </select>
            </label>
            <label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Time
                <select style="color: Tomato;">
                    <option disabled selected>Choose Time</option>
                    <option value="1">7:00-9:00</option>
                    <option value="2">9:00-11:00</option>
                    <option value="3">13:00-15:00</option>
                    <option value="4">15:00-17:00</option>
                </select>
            </label>
            <label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Course/Module
                <select style="color: crimson" class="max-w250">
                    <option disabled selected>Choose Subject</option>
                    @foreach($subject as $name_class)
                        <option value="{{$name_class->MH_ID}}">{{$name_class->MH_TEN}}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <div>
{{--            <label>Start Date--}}
{{--                <select>--}}
{{--                    <option>24-5-2020</option>--}}
{{--                </select>--}}
{{--            </label>--}}
{{--            <label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Curriculum : ACCP OV 6715--}}
{{--            </label>--}}
        </div>
    </form>
    <form>
        <table class="student table" style="height: 200px; overflow-y: scroll">
            <thead>
            <tr>
                <th>Email Student</th>
                <th>Portal ID</th>
                <th>Name</th>
                <th>Cheking</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td id="student_email"></td>
                <td id="student_id"></td>
                <td id="student_name"></td>
                <td id="check" style="display: flex; justify-content: start; align-items: start;flex-direction: column"></td>
            </tr>
            </tbody>
        </table>
    </form>

  <div>

      <a href="{{route('read')}}"><button class="btn btn-primary">Review List</button></a>
      <a href="#"><button id="isValue" class="btn btn-primary d-none">Save</button></a>

      <div id="loading">
          <img src="image/loading.gif" />
      </div>
  </div>
</section>
@endsection
