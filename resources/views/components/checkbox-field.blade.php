<div class="{{ $wrapperClass }} flex items-center mt-4">
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ old($name, $checked) ? 'checked' : '' }}
        class="rounded focus:ring-blue-500 text-blue-500 mr-2">
    <label for="{{ $name }}" class="text-sm font-medium text-gray-700">{{ $label }}</label>
</div>
