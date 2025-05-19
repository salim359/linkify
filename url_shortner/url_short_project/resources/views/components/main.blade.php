@props(['page' => 'home'])

@php
    $class = "flex-grow mx-auto  px-4 sm:px-6 lg:px-8";
    
    if ($page !== 'home' || $page) {
        $class .= ' w-full max-w-xl mt-12 ';
  
    }

@endphp



<main class="{{ $class }}">
    {{ $slot }}
</main>

