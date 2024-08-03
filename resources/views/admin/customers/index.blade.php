<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('List Customers') }}
            </h2>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @foreach($customers as $customer)
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Name</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $customer->first_name }} {{ $customer->last_name }}</h3>
                    </div>
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Email</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $customer->email }}</h3>
                    </div>
                    <div class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Birth Date</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{ $customer->birthdate }}</h3>
                    </div>
                </div> 
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
