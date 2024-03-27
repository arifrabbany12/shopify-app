<!-- resources/views/faq.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Frequently Asked Questions</h2>

            @foreach($faqs as $faq)
                <div class="bg-white shadow-md rounded-md mb-4">
                    <div class="px-4 py-3 border-b border-gray-200 cursor-pointer" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $faq->question }}</h3>
                    </div>
                    <div class="px-4 py-3 text-gray-600 hidden">
                        <p>{{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            answer.classList.toggle('hidden');
        }
    </script>
@endsection
