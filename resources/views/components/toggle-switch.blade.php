<div class="{{ $wrapperClass }} flex items-center mt-4">
    <label for="{{ $name }}" class="relative inline-flex items-center cursor-pointer">
        <input type="hidden" name="{{ $name }}" value="0">
        <input type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ old($name, $checked) ? 'checked' : '' }}
            class="sr-only peer">
        <div
            class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 
            peer-checked:after:translate-x-full peer-checked:after:border-white 
            after:content-[''] after:absolute after:top-[2px] after:left-[2px] 
            after:bg-white after:border-gray-300 after:border after:rounded-full 
            after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-500">
        </div>
        <span class="ml-3 text-sm font-medium text-gray-700">{{ $label }}</span>
    </label>
</div>
