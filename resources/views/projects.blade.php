@extends('components/layouts.app')
@section('content')
<div class="max-w-6xl mx-auto py-20 px-6">
    <h2 class="text-3xl font-bold mb-12 border-l-4 border-violet-600 pl-4">Featured Projects</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:border-blue-400 transition">
            <div class="w-full h-40 bg-blue-100 rounded-lg mb-4"></div>
            <h3 class="text-xl font-bold mb-2">Inventory System</h3>
            <p class="text-gray-600 text-sm">A full-stack Laravel app created for my Database Management course.</p>
            <div class="mt-4 flex gap-2">
                <span class="text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded">Laravel</span>
                <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded">MySQL</span>
            </div>
        </div>
        </div>
</div>
@endsection
