<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="py-5 bg-red-500 text-white font-bold">

                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>

                    </div>
                @endif



                <div class="item-product flex flex-col gap-y-10 ">
                    <img src="{{ Storage::url($order->product->cover) }}" class="h-auto w-[300px]" alt="">
                    <div>
                        <h3>{{ $order->product->name }}</h3>
                        <p>{{ $order->product->category->name }}</p>
                    </div>
                    <hr>
                    <p>{{ $order->buyer->name }}</p>
                    
                    <hr>
                    <div class="flex flex-row gap-x-5 item-center">
                        <p class="mb-2">Rp {{ $order->total_price }}</p>
                        @if ($order->is_paid)
                            <span class="py-2 px-5 rounded-full bg-green-500 text-white">
                                PAID
                            </span>
                        @else
                            <span class="py-2 px-5 rounded-full bg-orange-500 text-white">
                                PENDING
                            </span>
                        @endif
                    </div>
                    <img src="{{ Storage::url($order->proof) }}" class="h-auto w-[300px]" alt="">

                    @if ($order->is_paid)

                    @else
                        <div class="flex flex-row gap-x-3">
                            <form action="{{ route('admin.product_orders.update', $order) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="py-3 px-5 bg-indigo-500 text-white">Approve Now</button>
                            </form>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>