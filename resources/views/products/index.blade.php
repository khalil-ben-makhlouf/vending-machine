<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="mx-10 my-4">
        <div>
            @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
            @endif
        </div>
        <div>
            <div class="text-right mx-2 mt-7">
                <a href="{{ route('product.create') }}" class="my-5 text-white bg-[#264745] hover:bg-[#192e2c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <button type="button">
                        Add Product
                    </button>
                </a>
            </div>

            <!-- Refill Stock Button -->
            <div class="text-right mx-2 mt-7">
                <button id="refillStockButton" class="my-5 text-white bg-[#264745] hover:bg-[#192e2c] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Refill Stock
                </button>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-7">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="border-b bg-[#0d044d]">
                            <th scope="col" class="px-6 py-3">Image</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Qty</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3">Edit</th>
                            <th scope="col" class="px-6 py-3">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="p-4">
                                <div class="w-20 h-20 flex items-center justify-center overflow-hidden rounded">
                                    <img class="object-contain w-full h-full" src="{{ $product->getImageURL() }}">
                                </div>
                            </td>
                            <td class="px-6 py-3">{{ $product->name }}</td>
                            <td class="px-6 py-3">{{ $product->category }}</td>
                            <td class="px-6 py-3">{{ $product->qty }}</td>
                            <td class="px-6 py-3">{{ $product->price }}</td>
                            <td class="px-6 py-3">{{ $product->description }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('product.edit', ['product' => $product]) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" />
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="popup-modal" tabindex="-1" class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                    <div class="flex justify-center space-x-3">
                    <form method="post" action="{{ route('product.refill') }}">
                        @csrf
                        <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                    </form>
                    <button type="button" class="py-2.5 px-5 ml-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" data-modal-hide="popup-modal">
                        No, cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the required Tailwind CSS and JavaScript -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.getElementById('refillStockButton').addEventListener('click', function() {
            document.getElementById('popup-modal').classList.remove('hidden');
        });

        document.querySelectorAll('[data-modal-hide="popup-modal"]').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('popup-modal').classList.add('hidden');
            });
        });

        document.getElementById('confirmButton').addEventListener('click', function() {
            console.log('Refill stock confirmed!');
            document.getElementById('popup-modal').classList.add('hidden');
        });
    </script>
</x-app-layout>
