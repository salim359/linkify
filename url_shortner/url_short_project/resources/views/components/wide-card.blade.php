@props(['url'])

<x-panel class="flex gap-x--6">
   <div>
        <x-employer-logo/>
    </div>
    <div class="flex-1 flex flex-col ">
        <a  href="#" class="self-start text-sm text-gray-400">{{$url->user->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
              <a href="{{$url->url}}">
                  {{$url->long_url }}
              </a>
            
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{$url->short_code }}</p>
    </div>

</x-panel>
 

 