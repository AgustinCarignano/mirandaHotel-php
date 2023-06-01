@extends('layout')
@section('title','Rooms')
@section('pageHeader')
@parent
@section('pageTitle', 'Ultimate Rooms')
@section('pageBread','Rooms')
@endsection
@section('content')
<section class="pageRoomsGrid">
    <div class="pageRoomsGrid__container">
        <div class="pageRoomsGrid__selectInput">
            <select class="pageRoomsGrid__selectInput__select" name="priceOrder" id="priceOrder">
                <option class="pageRoomsGrid__selectInput__option" value="" hidden>
                    Order by price
                </option>
                <option class="pageRoomsGrid__selectInput__option" value="1">
                    Ascendent
                </option>
                <option class="pageRoomsGrid__selectInput__option" value="-1">
                    Descendent
                </option>
            </select>
        </div>
        @foreach ($rooms as $room)
        <div class="pageRoomsGrid__room">
            <div class="pageRoomsGrid__img">
                <img src="{{$room['photos'][0]}}" alt="" />
            </div>
            <div class="pageRoomsGrid__iconsBar">
                @foreach ($icons as $icon)
                <img src="public/images/{{$icon}}.svg" alt="" />
                @endforeach
            </div>
            <div class="pageRoomsGrid__legend">
                <h3 class="pageRoomsGrid__legend-title">{{$room['roomType']}}</h3>
                <p class="pageRoomsGrid__legend-text">
                    {{text_limit($room['description'],140,"...")}}
                </p>
                <p class="pageRoomsGrid__legend-price">
                    ${{$room['price']}}/Night &nbsp<a href="roomDetails?id={{$room['_id']}}">&nbsp Book Now</a>
                </p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pageRoomsGrid__paginateBar">
        <span class="">{{'<'}}</span>
        <span class="">1</span>
        <span class="active">2</span>
        <span class="">3</span>
        <span class="">...</span>
        <span class="">10</span>
        <span class="">{{'>'}}</span>
    </div>
</section>
@endsection