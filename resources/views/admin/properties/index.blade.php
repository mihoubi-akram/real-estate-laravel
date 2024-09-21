@extends('../welcome')

@section('title','All properties')

@section('content')
<div class="flex justify-end items-end my-10">
    <a href="" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
        Add property
    </a>
</div>
<table class="min-w-full table-auto border-collapse border border-gray-300">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-4 py-2 border border-gray-300">Title</th>
            <th class="px-4 py-2 border border-gray-300">Surface</th>
            <th class="px-4 py-2 border border-gray-300">Price</th>
            <th class="px-4 py-2 border border-gray-300">City</th>
            <th class="px-4 py-2 border border-gray-300 ">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($properties as $property)
            <tr class="odd:bg-white even:bg-gray-50">
                <td class="px-4 py-2 border border-gray-300">{{ $property->title }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $property->surface }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ number_format($property->price, thousands_separator:'') }}</td>
                <td class="px-4 py-2 border border-gray-300">{{ $property->city }}</td>
                <td class="px-4 py-2 border border-gray-300 ">
                    <div class="flex gap-2 justify-center">
                        <a href="" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                        <form action="{{route('admin.property.destroy',$property)}}" method="post">
                            @csrf
                            @method("delete")
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $properties->links('vendor.pagination.tailwind') }}
</div>
@endsection