@extends('layout')
@section('title','Room Details')
@section('pageHeader')
@parent
@section('pageTitle','Ultimate Room')
@section('pageBread','Room 745')
@endsection
@section('content')
<div class="pageDetailsLayout">
    <div class="pageDetailsLayout-block">
        <section class="pageDetailsPresentation">
            <div class="pageDetailsPresentation__container">
                <div class="pageDetailsPresentation__header">
                    <h4 class="homeSubtitle pageDetailsPresentation__subtitle">
                        {{$room['roomType']}}
                    </h4>
                    <h2 class="homeTitle pageDetailsPresentation__title">
                        Room {{$room['roomNumber']}}
                    </h2>
                </div>
                <div class="{{$classOfferPrice}}">
                    <div class="pageDetailsPresentation__prices-item">
                        <p>${{$room['price']}}</p>
                        <small>/Night</small>
                    </div>
                    <div class=" pageDetailsPresentation__prices-item">
                        <p>${{round($room['price']*(1-($room['discount']/100)))}}</p>
                        <small>/Night</small>
                    </div>
                </div>
            </div>
            <figure class="pageDetailsPresentation__img">
                <img src="{{$room['photos'][0]}}" alt="offer hotel room" />
            </figure>
        </section>
        <section class="pageDetailsAvailability">
            <h3 class="pageDetailsAvailability__title">Check Availability</h3>
            <div class="pageDetailsAvailability__formContainer">
                <form class="pageDetailsAvailability__form" id="availabilityForm">
                    <label class="pageDetailsAvailability__form-label" for="checkIn">Check In</label>
                    <input class="pageDetailsAvailability__form-date" type="date" name="checkIn" id="detailsCheckIn" value="2023-06-14" />
                    <label class="pageDetailsAvailability__form-label" for="checkIn">Check Out</label>
                    <input class="pageDetailsAvailability__form-date" type="date" name="checkOut" id="detailsCheckOut" value="2023-06-16" />
                    <label class="pageDetailsAvailability__form-label" for="checkIn">Full Name</label>
                    <input class="pageDetailsAvailability__form-text" type="text" name="fullName" id="detailsFullName" placeholder="Type your name..." />
                    <label class="pageDetailsAvailability__form-label" for="checkIn">Email</label>
                    <input class="pageDetailsAvailability__form-text" type="email" name="email" id="detailsEmail" placeholder="Type your email..." />
                    <label class="pageDetailsAvailability__form-label" for="checkIn">Phone</label>
                    <input class="pageDetailsAvailability__form-text" type="text" name="phone" id="detailsPhone" placeholder="Type your phone..." />
                    <label class="pageDetailsAvailability__form-label" for="checkIn">Message (Special resquest)</label>
                    <textarea class="pageDetailsAvailability__form-text" name="message" id="detailsMessage" cols="30" rows="3" placeholder="Type your message..."></textarea>
                    <input class="button button-variant1 pageDetailsAvailability__form-btn" type="submit" value="CHECK AVAILABILITY" />
                </form>
                <div class="pageDetailsAvailability__modalContainer pageDetailsAvailability__modalContainer-hidden" id="availabilityModal">
                    <div class="pageDetailsAvailability__modal">
                        <h2 class="pageDetailsAvailability__modal__title">
                            ¡Thank you for your request!
                        </h2>
                        <p class="pageDetailsAvailability__modal__text">
                            We have received it correctly. <br />
                            Someone from our Team will get <br />
                            back to you very soon.
                        </p>
                        <button class="button button-variant1 pageDetailsAvailability__modal__btn" id="modalBtn">
                            ACEPT
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="pageDetailsDescription">
            <p class="pageDetailsDescription__text">
                {{$room['description']}}
            </p>
        </section>
    </div>
    <section class="pageDetailsAmenities">
        <h2 class="pageDetailsAmenities__title">Amenities</h2>
        <hr />
        <div class="pageDetailsAmenities__container">
            @foreach ($amenities as $amenity)
            <div class="pageDetailsAmenities__items">
                <img class="pageDetailsAmenities__items-img" src="{{$amenity['img']}}" alt="" />
                <p class="pageDetailsAmenities__items-text">{{$amenity['name']}}</p>
            </div>
            @endforeach
        </div>
    </section>
    <section class="pageDetailsPerson">
        <div class="pageDetailsPerson__avatar">
            <img class="pageDetailsPerson__avatar-person" src="public/images/avatar1.webp" alt="avatar" />
        </div>
        <img class="pageDetailsPerson__avatar-check" src="public/images/checkIcon.svg" alt="" />
        <h3 class="pageDetailsPerson__title">Rosalina D. William</h3>
        <h6 class="pageDetailsPerson__subtitle">FOUNDER, QUX CO.</h6>
        <p class="pageDetailsPerson__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore.
        </p>
    </section>
    <section class="pageDetailsCancellation">
        <h2 class="pageDetailsCancellation__title">Cancellation</h2>
        <hr />
        <p class="pageDetailsCancellation__text">
            {{$room['cancellation']}}
        </p>
    </section>
    <section class="pageDetailsRelated">
        <h2 class="pageDetailsRelated__title">Related Rooms</h2>
        <hr />

        <div class="pageDetailsRelated__slider">
            <div class="swiperPageDetail pageDetailsRelated__slider__swiper">
                <div class="swiper-wrapper">
                    @for ($i=0; $i < 2; $i++) <div class="swiper-slide pageDetailsRelated__slider-slide">
                        <img class="pageDetailsRelated__slider-img" src="public/images/hotelRoom1.webp" alt="" />
                        <div class="pageDetailsRelated__iconsBar">
                            @foreach ($icons as $icon)
                            <img src="public/images/{{$icon}}.svg" alt="" />
                            @endforeach
                        </div>
                        <div class="pageRoomsGrid__legend pageDetailsRelated__slider__legend">
                            <h3 class="pageRoomsGrid__legend-title">
                                Minimal Duplex Room
                            </h3>
                            <p class="pageRoomsGrid__legend-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor.
                            </p>
                            <p class="pageRoomsGrid__legend-price">
                                $345/Night &nbsp<a href="roomDetails">&nbsp Book Now</a>
                            </p>
                        </div>
                </div>
                @endfor
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
</div>
</section>
</div>
@endsection