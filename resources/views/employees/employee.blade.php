@extends('index')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h3>Employees</h3>
        </div>

        @foreach($juniors as $junior)
            @if($junior->salary == 15770)
            <li>ФИО: {{ $junior->name}}</li>
            <li>Должность: {{$junior->position}}</li>
            <li>Принят на работу: {{$junior->employment_date}}</li>
            <li>Зарплата: {{$junior->salary}}</li>
            @endif
        @endforeach
        @foreach($middles as $middle)
            <li>ФИО: {{ $middle->name}}</li>
            <li>Должность: {{$middle->position}}</li>
            <li>Принят на работу: {{$middle->employment_date}}</li>
            <li>Зарплата: {{$middle->salary}}</li>
            <br>
        @endforeach

    </div>
@stop