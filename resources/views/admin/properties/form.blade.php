@extends('../welcome')

@section('title','edit property')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md mt-10 p-8">
    <h2 class="text-3xl font-semibold text-blue-500 mb-8 text-center">Edit Property</h2>
    <form action="{{route('admin.property.update',$property)}}" method="post">
        @csrf
        @method('PUT')
        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-6 rounded-lg">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <x-toggle-switch label="Sold" name="sold" checked="{{ $property->sold }}" wrapperClass="col-span-2"/>
            <x-input-field label="Title" name="title" type="text" value="{{ $property->title }}" wrapperClass="col-span-1"/>    
            <x-input-field label="Price ($)" name="price" type="number" value="{{ $property->price }}" wrapperClass="col-span-1"/>
            <x-input-field label="Surface (sq ft)" name="surface" type="number" value="{{ $property->surface }}" wrapperClass="col-span-1"/>
            <x-input-field label="Rooms" name="rooms" type="number" value="{{ $property->rooms }}" wrapperClass="col-span-1"/>
            <x-input-field label="Bedrooms" name="bedrooms" type="number" value="{{ $property->bedrooms }}" wrapperClass="col-span-1"/>
            <x-input-field label="Floor" name="floor" type="number" value="{{ $property->floor }}" wrapperClass="col-span-1"/>
            <x-input-field label="City" name="city" type="text" value="{{ $property->city }}" wrapperClass="col-span-1"/>
            <x-input-field label="Postal Code" name="postal_code" type="text" value="{{ $property->postal_code }}" wrapperClass="col-span-1"/>
            <x-input-field label="Address" name="address" type="text" value="{{ $property->address }}" wrapperClass="col-span-2"/>
            <x-text-area-field label="Description" name="description" rows="4" value="{{ $property->description }}" wrapperClass="col-span-2"/>

        </div>

        <div class="flex justify-end mt-8">
            <a href="{{ route('admin.property')}}" class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 mr-4">Cancel</a>
            <x-button type="submit" buttonClass="bg-blue-500 hover:bg-blue-600">Update Property</x-button>
        </div>

    </form>
</div>
@endsection