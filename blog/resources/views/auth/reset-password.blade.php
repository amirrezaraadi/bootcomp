<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


@extends('layouts.app')

@section('main')
    <main class="bg--white">
        <div class="container">
            <div class="sign-page">
                <h1 class="sign-page__title">بازیابی رمز عبور</h1>

                <form class="sign-page__form" method="POST" action="{{route('password.email')}}">
                   @csrf
                   <input type="hidden" value="{{$request->route('token')}}">
                    <input type="text" name="email" class="text text--left" placeholder="ایمیل">
                    @error('email')

                    <p  style="margin-bottom: 1rem ; color:aqua; text-align:right">{{ $message }}</p>
                    @enderror
                        <input type="password" name="password" class="text text--left" placeholder="  رمز عبور جدید">
                        @error('password')

                        <p  style="margin-bottom: 1rem ; color:aqua; text-align:right">{{ $message }}</p>
                        @enderror

                        <input type="password" name="password_confirmation" class="text text--left" placeholder=" تایید رمز عبور جدید">
                        @error('password_confirmation')

                        <p  style="margin-bottom: 1rem ; color:aqua; text-align:right">{{ $message }}</p>
                        @enderror

                        <button class="btn btn--blue btn--shadow-blue width-100 ">بازیابی</button>
                        <div class="sign-page__footer">
                            <span>کاربر جدید هستید؟</span>
                            <a href="{{route('register')}}" class="color--46b2f0">صفحه ثبت نام</a>

                        </div>
                 
                </form>
            </div>
        </div>
    </main>

@endsection
