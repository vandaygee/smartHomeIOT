@extends('layout.app')

@section('title', 'IOT Controllers')

@section('content')
    <div class="ui segment">
        <div class="ui three column grid">
            <div class="column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">Temperature</div>
                       <hr/>
                        <div class="description">
                            Mark set point for temperature.
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Min. (&deg;C)</label>
                                        <input id="temp_min" placeholder="Min. Temp" type="number" value="{{$temp_min}}">
                                    </div>
                                    <div class="field">
                                        <label>Max. (&deg;C)</label>
                                        <input id="temp_max" placeholder="Max. Temp" type="number" value="{{$temp_max}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached button" id="temp_sp">
                        <i class="add icon"></i>
                        Set
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">Pressure</div>
                        <hr/>
                        <div class="description">
                            Mark set point for Pressure.
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Min. (pa)</label>
                                        <input id="pressure_min" placeholder="Min. Pressure" type="number" value="{{$pressure_min}}">
                                    </div>
                                    <div class="field">
                                        <label>Max. (pa)</label>
                                        <input id="pressure_max" placeholder="Max. Pressure" type="number" value="{{$pressure_max}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached button" id="pressure_sp">
                        <i class="add icon"></i>
                        Set
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">Humidity</div>
                        <hr/>
                        <div class="description">
                            Mark set point for Humidity.
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Min. (&percnt;)</label>
                                        <input id="humidity_min" placeholder="Min. Humidity" type="number" value="{{$humidity_min}}">
                                    </div>
                                    <div class="field">
                                        <label>Max. (&percnt;)</label>
                                        <input id="humidity_max" placeholder="Max. Humidity" type="number" value="{{$humidity_max}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached button" id="humidity_sp">
                        <i class="add icon"></i>
                        Set
                    </div>
                </div>
            </div>
        </div>

        <div class="ui three column grid">
            <div class="column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">ChlorophyII</div>
                        <hr/>
                        <div class="description">
                            Mark set point for ChlorophyII.
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Min. (&percnt;)</label>
                                        <input id="chloro_min" placeholder="Min. ChlorophyII" type="number" value="{{$chloro_min}}">
                                    </div>
                                    <div class="field">
                                        <label>Max. (&percnt;)</label>
                                        <input id="chloro_max" placeholder="Max. ChrolophyII" type="number" value="{{$chloro_max}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached button" id="chloro_sp">
                        <i class="add icon"></i>
                        Set
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">Water Level</div>
                        <hr/>
                        <div class="description">
                            Mark set point for Water Level.
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Min.</label>
                                        <input id="water_min" placeholder="Min. Pressure" type="number" value="{{$water_min}}">
                                    </div>
                                    <div class="field">
                                        <label>Max. </label>
                                        <input id="water_max" placeholder="Max. Pressure" type="number" value="{{$water_max}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached button" id="water_sp">
                        <i class="add icon"></i>
                        Set
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui card">
                    <div class="content">
                        <div class="header">Light Intensity</div>
                        <hr/>
                        <div class="description">
                            Mark set point for light intensity.
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Min. (ca)</label>
                                        <input id="light_min" placeholder="Min. Light" type="number" value="{{$light_min}}">
                                    </div>
                                    <div class="field">
                                        <label>Max. (ca)</label>
                                        <input id="light_max" placeholder="Max. Light" type="number" value="{{$light_max}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui bottom attached button" id="light_sp">
                        <i class="add icon"></i>
                        Set
                    </div>
                </div>
            </div>
        </div>
    </div>
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
