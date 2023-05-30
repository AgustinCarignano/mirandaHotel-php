@extends('layout')
@section('title','Rooms')
@section('pageHeader')
@parent
@section('pageTitle','Ultimate Room')
@section('pageBread','Rooms')
@endsection
@section('content')
<section class="pageRoomsList">
    <div class="pageRoomsList__container">
        <div class="pageRoomsList__selectInput">
            <select class="pageRoomsList__selectInput__select" name="priceOrder" id="priceOrder">
                <option class="pageRoomsList__selectInput__option" value="" hidden>
                    Order by price
                </option>
                <option class="pageRoomsList__selectInput__option" value="1">
                    Ascendent
                </option>
                <option class="pageRoomsList__selectInput__option" value="-1">
                    Descendent
                </option>
            </select>
        </div>
        @foreach ($rooms as $room)
        <div class="pageRoomsList__room">
            <div class="pageRoomsList__img">
                <img src="{{$room['photos'][0]}}" alt="" />
            </div>
            <div class="pageRoomsList__details">
                <div class="pageRoomsList__details-iconsBar">
                    @foreach ($icons as $icon)
                    <img src="public/images/{{$icon}}.svg" alt="" />
                    @endforeach
                </div>
                <h3 class="pageRoomsList__details-title">{{$room['roomType']}}</h3>
                <p class="pageRoomsList__details-text">
                    {{$room['description']}}
                </p>
            </div>
            <div class="pageRoomsList__price">
                <p class="pageRoomsList__price-number">
                    ${{$room['price']}}<small>/Night</small>
                </p>
                <hr />
                <a class="pageRoomsList__price-link" href="roomDetails">Book Now</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pageRoomsGrid__paginateBar">
        <span class="">
            << /span>
                <span class="">1</span>
                <span class="active">2</span>
                <span class="">3</span>
                <span class="">...</span>
                <span class="">10</span>
                <span class="">></span>
    </div>
</section>
@endsection