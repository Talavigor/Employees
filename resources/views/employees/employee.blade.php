@extends('index')
@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h3>Employees</h3>
        </div>

        @foreach($tree as $employee)

            <div class="col-sm-8 tree-{{$employee->position}}">
                <li>ФИО: {{$employee->name}}</li>
                <li>Должность: {{$employee->position}}</li>
                <li>Принят на работу: {{$employee->employment_date}}</li>
                <li>Зарплата: {{$employee->salary}}</li>
                <br>
            </div>
            @if(isset($employee->childs))
                @include('employees.count',['tree'=>$employee->childs])
            @endif
        @endforeach

    </div>
@stop