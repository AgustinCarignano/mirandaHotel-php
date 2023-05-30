@extends('layout')
@section('title','Contact')
@section('pageHeader')
@parent
@section('pageTitle','Contact Us')
@section('pageBread','Contact')
@endsection
@section('content')
<section class="pageContactInfo">
    <div class="pageContactInfo__container">
        <div class="pageContactInfo__item info1">
            <img src="../images/mappinIcon.svg" alt="" />
            <div class="pageContactInfo__item-container">
                <h4 class="pageContactInfo__item-title">Office Address</h4>
                <p class="pageContactInfo__item-text">
                    C. de la Princesa, 31, 2º<br />
                    28008 Madrid
                </p>
            </div>
        </div>
        <div class="pageContactInfo__item info2">
            <img src="../images/phoneIcon.svg" alt="" />
            <div class="pageContactInfo__item-container">
                <h4 class="pageContactInfo__item-title">Phone Number</h4>
                <p class="pageContactInfo__item-text">+34 621 065 317</p>
            </div>
        </div>
        <div class="pageContactInfo__item info3">
            <img src="../images/emailIcon.svg" alt="" />
            <div class="pageContactInfo__item-container">
                <h4 class="pageContactInfo__item-title">Email Address</h4>
                <p class="pageContactInfo__item-text">
                    agustin.carignano@gmail.com
                </p>
            </div>
        </div>
    </div>
    <div class="pageContactInfo__map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1xH4wuA2UY12a3L--0Tp4s22bqMKm-Lg&ehbc=2E312F"></iframe>
    </div>
</section>
<section class="pageContactForm">
    <form class="pageContactForm__form">
        <div class="pageContactForm__form__item">
            <input type="text" name="name" id="contactName" placeholder="Your full name" />
            <img src="public/images/contact/personIcon.svg" alt="" />
        </div>
        <div class="pageContactForm__form__item">
            <input type="text" name="name" id="contactName" placeholder="Add phone number" />
            <img src="public/images/contact/phoneIcon.svg" alt="" />
        </div>
        <div class="pageContactForm__form__item">
            <input type="email" name="name" id="contactName" placeholder="Enter email address" />
            <img src="public/images/contact/envelopeIcon.svg" alt="" />
        </div>
        <div class="pageContactForm__form__item">
            <input type="text" name="name" id="contactName" placeholder="Enter subject" />
            <img src="public/images/contact/bookIcon.svg" alt="" />
        </div>
        <div class="pageContactForm__form__item-textarea">
            <textarea name="message" id="contactMessage" cols="30" rows="10" placeholder="Tell us what you need"></textarea>
            <img src="public/images/contact/penIcon.svg" alt="" />
        </div>
        <input class="button button-variant1" type="submit" value="SEND" />
    </form>
</section>
@endsection