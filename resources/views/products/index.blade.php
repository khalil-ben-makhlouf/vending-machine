<x-app-layout>
    <x-slot  name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>



    <div class="mx-10 my-4 ">


        <div>
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>
        <div>
            <div class="text-right mx-2 mt-7">
                <a href="{{route('product.create')}} " class="my-5 text-white bg-[#264745] hover:bg-[#192e2c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <button type="button">
                        Add Product
                    </button>
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-7">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="border-b bg-[#0d044d]">
                            <th scope="col" class="px-16 py-3 h-2.5 w-10px">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Qty</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3"></th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    @foreach($products as $product )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="p-4">
                            <img class="w-16 md:w-12 ml-8" src="{{$product->getImageURL()}}">
                        </td>
                        <td class="px-6 py-3">{{$product->name}}</td>
                        <td class="px-6 py-3">{{$product->category}}</td>
                        <td class="px-6 py-3">{{$product->qty}}</td>
                        <td class="px-6 py-3">{{$product->price}}</td>
                        <td class="px-6 py-3">{{$product->description}}</td>
                        <td class="px-6 py-4">
                            <a href="{{route('product.edit', ['product' => $product])}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Edit</a>
                        </td>
                        <td class="px-6 py-4">

                            <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                @csrf
                                @method('delete')

                                <input type="submit" value="Delete" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" />
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
    
</x-app-layout>
