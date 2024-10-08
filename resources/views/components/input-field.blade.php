<div>
    <div class="{{ $wrapperClass }}">
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
        
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
            class="w-full border {{ $errors->has($name) ? 'border-red-500' : 'border-gray-300' }} rounded-md focus:ring-blue-500 focus:border-blue-500 px-4 py-2">
    </div>    
</div>