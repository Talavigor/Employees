@extends('index')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h3>Employees</h3>
        </div>

        @foreach($employees as $employee)
            @if($employee->position == 'junior')
                <li>ФИО: {{ $employee->name}}</li>
                <li>Должность: {{$employee->position}}</li>
                <li>Принят на работу: {{$employee->employment_date}}</li>
                <li>Зарплата: {{$employee->salary}}</li>

            @elseif($employee->position == 'middle')
                <li>ФИО: {{ $employee->name}}</li>
                <li>Должность: {{$employee->position}}</li>
                <li>Принят на работу: {{$employee->employment_date}}</li>
                <li>Зарплата: {{$employee->salary}}</li>
            @endif
        @endforeach


    </div>
@stop