@extends('components/layouts.app')
@section('content')
<section class="max-w-5xl mx-auto py-20 px-6">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-4xl font-bold mb-6 text-gray-800">
                About <span class="text-violet-600">Me</span>
            </h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                I am a 3rd-year Information Technology student passionate about building scalable web applications.
                My journey in tech started with curiosity about how the web works, which led me to master
                backend development with Laravel...
            </p>

            <h3 class="text-xl font-semibold mb-4 text-blue-600">Technical Skills</h3>
            <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-white border border-violet-200 rounded-lg text-sm font-medium">Laravel</span>
                <span class="px-4 py-2 bg-white border border-violet-200 rounded-lg text-sm font-medium">PHP</span>
                <span class="px-4 py-2 bg-white border border-violet-200 rounded-lg text-sm font-medium">Tailwind CSS</span>
                <span class="px-4 py-2 bg-white border border-violet-200 rounded-lg text-sm font-medium">MySQL</span>
                <span class="px-4 py-2 bg-white border border-violet-200 rounded-lg text-sm font-medium">JavaScript</span>
            </div>
        </div>

        <div class="bg-gradient-to-br from-blue-500 to-violet-600 p-1 rounded-2xl shadow-xl">
            <div class="bg-white rounded-xl p-8">
                <h4 class="font-bold text-lg mb-2">Education</h4>
                <p class="text-gray-500 text-sm mb-4">Bachelor of Science in Information Technology</p>
                <hr class="mb-4">
                <h4 class="font-bold text-lg mb-2">Current Focus</h4>
                <p class="text-gray-500 text-sm">Full-stack Development & API Integration</p>
            </div>
        </div>
    </div>
</section>
@endsection
