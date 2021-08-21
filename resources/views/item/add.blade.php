@extends('layout.main')
@section('content')

    <div class="grid mt-24 place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
            <h1 class="text-xl font-semibold">Hello there 👋, <span class="font-normal">please fill in your information to
                    continue</span></h1>
            <form class="mt-6" method="POST" action="{{ route('item.add') }}">
                @csrf
                <label for="Name" class="block text-xs font-semibold text-gray-600 uppercase">Name</label>
                <input id="name" type="text" name="name" placeholder="Name" autocomplete="given-name" value="{{old('name')}}"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                    required />
                @error('name')
                    <div class="text-red-800">{{ $message }}</div>
                @enderror
                <label for="quantity" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">quantity</label>
                <input id="quantity" type="text" name="quantity" placeholder="quantity" autocomplete="quantity" value="{{old('quantity')}}"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                    required />
                @error('quantity')
                    <div class="text-red-800">{{ $message }}</div>
                @enderror
                <label for="price" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">price</label>
                <input id="price" type="text" name="price" placeholder="price" autocomplete="price" value="{{old('price')}}"
                    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                    required />
                @error('price')
                    <div class="text-red-800">{{ $message }}</div>
                @enderror
                
                <button type="submit"
                    class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Post
                </button>

            </form>
        </div>
    </div>
@endsection
