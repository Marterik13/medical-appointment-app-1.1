@if (isset($breadcrumbs) && count($breadcrumbs) > 0)
    <nav class="mb-4">
        <ol class="flex flex-wrap text-sm text-gray-600">
            @foreach ($breadcrumbs as $item)
                <li class="flex items-center">
                    @if (!$loop->first)
                        <span class="px-2 text-gray-400">/</span>
                    @endif

                    @if (isset($item['href']))
                        <a href="{{ $item['href'] }}" class="hover:text-blue-600 transition-colors">
                            {{ $item['name'] }}
                        </a>
                    @else
                        <span class="text-gray-500">{{ $item['name'] }}</span>
                    @endif
                </li>
            @endforeach
        </ol>
        
        <h1 class="font-bold text-2xl mt-2 text-gray-800">
            {{ end($breadcrumbs)['name'] }}
        </h1>
    </nav>
@endif