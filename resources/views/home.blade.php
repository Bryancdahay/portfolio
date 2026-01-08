@extends('components/layouts.app')
@section('content')
<section class="min-h-screen flex flex-col justify-center items-center text-center px-4 bg-white">
    <div class="relative mb-8">
        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-violet-600 rounded-full blur opacity-25"></div>

        <div class="relative">
            <img
                src="{{ asset('images/profile.png') }}"
                alt="Your Profile Name"
                class="w-40 h-40 md:w-48 md:h-48 rounded-full object-cover border-4 border-white shadow-xl"
            >
        </div>
    </div>

    <h1 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight">
        Hi, I'm <span class="text-gray-800">Your Name</span><br>
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-violet-600">
            3rd Year IT Student
        </span>
    </h1>

    <p class="text-lg md:text-xl text-gray-500 mb-8 max-w-2xl">
        Building digital solutions with Laravel and Passion. Specializing in modern web development and clean UI design.
    </p>

    <div class="flex flex-col sm:flex-row gap-4">
        <a href="{{ route('projects') }}" class="bg-gradient-tech text-white px-8 py-3 rounded-full font-bold shadow-lg hover:shadow-violet-200 transition-all transform hover:-translate-y-1">
            View My Work
        </a>
        <a href="{{ route('contact') }}" class="bg-white border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-blue-50 transition-all">
            Get In Touch
        </a>
    </div>
</section>
@endsection
