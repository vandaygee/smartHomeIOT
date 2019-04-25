@extends('layout.app')

@section('title', 'IOT Actuators')
@section('stylesheet')
    <style type="text/css">
        .ui.modal > .header{
            background-color: gold !important;
        }

        .modal-background{
            background-color: #e0321c !important;
        }
    </style>

@endsection

@section('content')
    <div class="ui segment">
        <div class="ui three column grid">
            <div class="column">
                <div class="ui card {{$dehumidifier==true?'green':''}} dehumidifier">
                    <div class="content">
                        <i class="{{$dehumidifier==true?'green':''}} thermometer icon"></i>Dehumidifier
                        <span class="right floated">
                            <div class="inline field">
                                <div class="ui slider checkbox">
                                    <input id="" type="checkbox" tabindex="0" class="hidden" disabled="disabled" checked="{{$dehumidifier==true?'checked':''}}">
                                   <h5 class="ui {{$dehumidifier==true?'green':''}} header">{{$dehumidifier==true?'ON':'OFF'}}</h5>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="extra content">
                        <span class="right floated">
                            <a href="#">View Logs</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card {{$heater==true?'green':''}} heater">
                    <div class="content">
                        <i class="{{$heater==true?'green':''}} thermometer icon"></i>Heater
                        <span class="right floated">
                            <div class="inline field">
                                <div class="ui slider checkbox">
                                    <input id="" type="checkbox" tabindex="0" class="hidden" disabled="disabled" checked="{{$heater==true?'checked':''}}">
                                   <h5 class="ui {{$heater==true?'green':''}} header">{{$heater==true?'ON':'OFF'}}</h5>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="extra content">
                        <span class="right floated">
                            <a href="#">View Logs</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card {{$coolant==true?'green':''}} coolant">
                    <div class="content">
                        <i class="{{$coolant==true?'green':''}} thermometer icon"></i>Coolant
                        <span class="right floated">
                            <div class="inline field">
                                <div class="ui slider checkbox">
                                    <input id="" type="checkbox" tabindex="0" class="hidden" disabled="disabled" checked="{{$coolant==true?'checked':''}}">
                                   <h5 class="ui {{$coolant==true?'green':''}} header">{{$coolant==true?'ON':'OFF'}}</h5>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="extra content">
                        <span class="right floated">
                            <a href="#">View Logs</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui three column grid">
            <div class="column">
                <div class="ui card {{$fire_alarm==true?'green':''}} fire_alarm">
                    <div class="content">
                        <i class="{{$fire_alarm==true?'green':''}} thermometer icon"></i>Fire Alarm
                        <span class="right floated">
                            <div class="inline field">
                                <div class="ui slider checkbox">
                                    <input id="" type="checkbox" tabindex="0" class="hidden" disabled="disabled" checked="{{$fire_alarm==true?'checked':''}}">
                                   <h5 class="ui {{$fire_alarm==true?'green':''}} header">{{$fire_alarm==true?'ON':'OFF'}}</h5>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="extra content">
                        <span class="right floated">
                            <a href="#">View Logs</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card {{$c02_alarm==true?'green':''}} c02_alarm">
                    <div class="content">
                        <i class="{{$c02_alarm==true?'green':''}} thermometer icon"></i>C02 Alarm
                        <span class="right floated">
                            <div class="inline field">
                                <div class="ui slider checkbox">
                                    <input id="" type="checkbox" tabindex="0" class="hidden" disabled="disabled" checked="{{$c02_alarm==true?'checked':''}}">
                                   <h5 class="ui {{$c02_alarm==true?'green':''}} header">{{$c02_alarm==true?'ON':'OFF'}}</h5>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="extra content">
                        <span class="right floated">
                            <a href="#">View Logs</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card {{$door_alarm==true?'green':''}} door_alarm">
                    <div class="content">
                        <i class="{{$door_alarm==true?'green':''}} thermometer icon"></i>Door Alarm
                        <span class="right floated">
                            <div class="inline field">
                                <div class="ui slider checkbox">
                                    <input id="" type="checkbox" tabindex="0" class="hidden" disabled="disabled" checked="{{$door_alarm==true?'checked':''}}">
                                   <h5 class="ui {{$door_alarm==true?'green':''}} header">{{$door_alarm==true?'ON':'OFF'}}</h5>
                                </div>
                            </div>
                        </span>
                    </div>
                    <div class="extra content">
                        <span class="right floated">
                            <a href="#">View Logs</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui tiny modal modal-background">
        <i class="close icon"></i>
{{--        <div class="header modal-background">--}}
{{--            This is a modal with custom header background--}}
{{--        </div>--}}
        <div class="content modal-background">

            <div class="description">
                <i class="lightbulb icon"></i>
                A description can appear on the right
            </div>
        </div>
{{--        <div class="actions modal-background">--}}
{{--            <div class="ui button">Cancel</div>--}}
{{--            <div class="ui button">OK</div>--}}
{{--        </div>--}}
    </div>
@endsection

@section('scripts')
    <script>
        @if($view == 'alert')
            $('.ui.modal')
                .modal('show')
            ;
        @endif
    </script>
@endsection


{{--<div class="column">--}}
{{--    <div class="ui card">--}}
{{--        <div class="content">--}}
{{--            <div class="header">Elyse</div>--}}
{{--            <div class="meta">--}}
{{--                <a class="clck">Coworker</a>--}}
{{--            </div>--}}

{{--            <div class="description">--}}
{{--                Elyse is a copywriter working in New York.--}}
{{--            </div>--}}
{{--            <div class="inline field">--}}
{{--                <div class="ui toggle checkbox">--}}
{{--                    <input type="checkbox" tabindex="0" class="hidden myslider">--}}
{{--                    <label>Slider</label>--}}
{{--                </div>--}}
{{--                <label></label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="extra content">--}}
{{--                        <span class="right floated">--}}
{{--                             Joined in 2014--}}
{{--                        </span>--}}
{{--            <span>--}}
{{--                            <i class="user icon"></i>--}}
{{--                             151 Friends--}}
{{--                        </span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
