<nav class="bg-white shadow p-4 mb-3">
    <div class="flex justify-between items-center">
        <div class="text-blue-600 text-lg font-bold">
            Estate
        </div>
        
        <div class="flex-1 text-center">
            <div class="inline-flex space-x-6">
                @foreach($options as $option)
                    <a href="{{ $option['link'] }}" class="text-black hover:text-blue-600 font-medium">
                        {{ $option['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
