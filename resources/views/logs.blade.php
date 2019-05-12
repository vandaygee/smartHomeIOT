@extends('layout.app')

@section('title')
    {{$page_title}}
@endsection

@section('content')
    <div class="ui segment">
        <table class="ui striped table">
            <thead>
            <tr>
                <th>S/N</th>
                <th>Temperature value</th>
                <th>State</th>
                <th>Time</th>
            </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$log->temp_value}}</td>
                        <td>ON</td>
                        <td>{{$log->temp_timestamp}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
