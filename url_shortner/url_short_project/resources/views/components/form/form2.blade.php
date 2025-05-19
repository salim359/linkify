<form {{ $attributes->merge([
    "class" => " bg-black  shadow-2xl rounded-2xl p-12 w-full max-w-4xl mx-10 my-12 transition-all duration-300 hover:shadow-3xl",
    "method" => "GET"
]) }}>
    @if ($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
