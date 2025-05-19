<x-layout>
    <div class="flex flex-col">
        <x-welcome>Welcome to <span>Linkify</span>, {{ $username }}</x-welcome>
        <div class=" min-h-screen flex flex-col md:flex items-center justify-between px-6 py-12 border-b border-white/10 ">
            <div class=" min-h-screen  md:flex-row items-center justify-between px-6 py-12 border-b border-white/10 ">
                <x-form.form class="space-y-2" method="POST" action="/generateurl">
                    <div class="mt-10 md:mt-0 md:ml-12">
                        <!-- <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Illustration" class="w-full max-w-md  "> -->

                    </div>

                    <x-page-heading>Linkify</x-page-heading>
                    <x-form.form-field>
                        <div class="mt-2">
                            <x-form.form-label>Url:</x-form.form-label>
                            <x-form.form-input name="url" id="url" :value='old("url")' placeholder="Enter the link here" required />
                            <x-form.form-error name='url' />
                        </div>
                    </x-form.form-field>
                    <div class="flex justify-center mt-10">
                        @if(true)
                            <x-form.form-button>SHORT URL</x-form.form-button>
                        @else
                             <x-form.form-button>Copy</x-form.form-button>
                        @endif
                        
                    </div>

                </x-form.form>
                <div>
                    <x-page-heading>Copy link from here</x-page-heading>
                    <div class="overflow-x-auto bg-black shadow-md rounded-lg border border-white/10">
                        <table class="min-w-full divide-y divide-white/10">
                            <thead class="bg-black">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Original URL
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Shortened URL
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        VALID FOR
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-black divide-y divide-white/10">
                                @foreach ($urls as $url)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-700 break-words">
                                        <a href="{{ $url->long_url }}" class="text-white-600 hover:underline" target="_blank">
                                            {{ $url->long_url }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        <a href="/{{ $url->short_code }}" class="text-white-600 hover:underline" target="_blank">
                                            {{ $url->short_code }}
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        <p class="text-white-600 hover:underline">
                                            {{ round(now()->diffInDays($url->expires_at, false)) }} days 
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        <x-form.form-button onclick="copyText('{{ url($url->short_code) }}')">Copy</x-form.form-button>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        <form method="POST" action="/delete/{{$url->id}}">
                                            @csrf
                                            @method('delete')
                                            <x-form.form-button>Delete</x-form.form-button>
                                        </form>

                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-10 mb-10">
                        {{ $urls->links() }}
                    </div>

                </div>

            </div>

        </div>
        <x-slot:section></x-slot:section>
</x-layout>
<script>
    function copyText(shortCode) {
        navigator.clipboard.writeText(shortCode)
            .then(() => {
                alert("Copied: " + shortCode);
            })
            .catch(err => {
                console.error("Failed to copy: ", err);
            });
    }
</script>
