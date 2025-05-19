<select {{$attributes->merge(['class'=>"w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm px-3 py-2"])}} >
    {{ $slot}}
</select>