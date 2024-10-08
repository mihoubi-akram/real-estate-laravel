<div class="{{ $wrapperClass }}">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}"
        class="w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 px-4 py-2">{{ old($name, $value) }}</textarea>
</div>
