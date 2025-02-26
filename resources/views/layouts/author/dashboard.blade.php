{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as <span class="font-bold text-green-600">{{ Auth::user()->name }}</span>
                </div>
            </div>
        </div>
    </div>
    </x-slot>
</x-app-layout> --}}

@extends('frontend.frontend_master')

@section('frontend_content')
<div class="body-content">
    <div class="container">
        <div class="row">
                @include('frontend.profile.user-sidebar')
            <div class="col-md-10">

               <h3> Welcome <span class="font-bold text-green-600">{{ Auth::user()->name }}!!</span></h3>
                @yield('userdashboard_content')
            </div>
        </div>
    </div>
</div>
@endsection
