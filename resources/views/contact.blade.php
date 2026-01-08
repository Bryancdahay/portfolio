@extends('components/layouts.app')
@section('content')
<section class="max-w-4xl mx-auto py-20 px-6">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800">Get In <span class="text-blue-600">Touch</span></h2>
        <p class="text-gray-500 mt-2">I am currently looking for internship opportunities!</p>
    </div>

    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden border border-gray-100">
        <div class="grid md:grid-cols-3">

            <div class="bg-gradient-tech p-10 text-white flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold mb-6">Contact Information</h3>

                    <div class="space-y-4">
                        <a href="" class="flex items-center space-x-4 p-2 rounded-xl">
                            <span class="p-2 bg-white/20 rounded-lg group-hover:bg-white/30 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </span>
                            <div>
                                <p class="text-blue-100 text-xs uppercase tracking-wider">Email</p>
                                <p class="font-medium text-sm">my@email.com</p>
                            </div>
                        </a>

                        <a href="" class="flex items-center space-x-4 p-2 rounded-xl">
                            <span class="p-2 bg-white/20 rounded-lg group-hover:bg-white/30 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </span>
                            <div>
                                <p class="text-blue-100 text-xs uppercase tracking-wider">Phone</p>
                                <p class="font-medium text-sm">+63 912 345 6789</p>
                            </div>
                        </a>

                        <a href="https://web.facebook.com/BCarl29" target="_blank" class="flex items-center space-x-4 p-2 rounded-xl hover:bg-white/10 transition group">
                            <span class="p-2 bg-white/20 rounded-lg group-hover:bg-white/30 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </span>
                            <div>
                                <p class="text-blue-100 text-xs uppercase tracking-wider">Facebook</p>
                                <p class="font-medium text-sm text-white">Visit Profile</p>
                            </div>
                        </a>

                        <a href="https://www.linkedin.com/in/bryan-carl-dahay-92b0a73a4/" target="_blank" class="flex items-center space-x-4 p-2 rounded-xl hover:bg-white/10 transition group">
                            <span class="p-2 bg-white/20 rounded-lg group-hover:bg-white/30 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </span>
                            <div>
                                <p class="text-blue-100 text-xs uppercase tracking-wider">LinkedIn</p>
                                <p class="font-medium text-sm text-white">Connect on LinkedIn</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-white/20 text-xs text-blue-100 italic">
                    Available for freelance and full-time roles.
                </div>
            </div>

            <form action="#" method="POST" class="md:col-span-2 p-10 space-y-6">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 uppercase tracking-wide text-xs">Full Name</label>
                        <input type="text" placeholder="John Doe" class="w-full mt-1 p-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-violet-400 outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 uppercase tracking-wide text-xs">Email Address</label>
                        <input type="email" placeholder="john@example.com" class="w-full mt-1 p-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-violet-400 outline-none transition">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 uppercase tracking-wide text-xs">Message</label>
                    <textarea rows="4" placeholder="How can I help you?" class="w-full mt-1 p-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-violet-400 outline-none transition"></textarea>
                </div>
                <button type="submit" class="w-full py-4 bg-violet-600 text-white font-bold rounded-lg hover:bg-violet-700 shadow-lg shadow-violet-200 transition-all transform hover:-translate-y-1">
                    Send Inquiry
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
