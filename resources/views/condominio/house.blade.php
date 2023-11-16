<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Condominio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>House</h1>
                </div>


                    <div class="items-center justify-center w-screen min-h-screen bg-gray-900 py-10">

                        <!-- Component Start -->
                        <h1 class="text-lg text-gray-400 font-medium">2020-21 Season</h1>
                        <div class="flex flex-col mt-6">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden sm:rounded-lg">
                                        <table class="min-w-full text-sm text-gray-400">
                                            <thead class="bg-gray-800 text-xs uppercase font-medium">
                                                <tr>
                                                    <th></th>
                                                    <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                                        {{ __('ubication') }}
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left tracking-wider">
                                                        {{ __('description') }}
                                                    </th>
                                                    <th></th>
                                                    	
                                                </tr>
                                            </thead>
                                            <tbody class="bg-gray-800">
                                                @foreach ($houses as $house)
                                                    <tr class="bg-black bg-opacity-20">
                                                        <td class="pl-4">
                                                            {{ $house->id }}
                                                        </td>
                                                        <td class="flex px-6 py-4 whitespace-nowrap">
                                                            {{ $house->ubication }}
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $house->description }}
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            11
                                                        </td>                                                    
                                                    </tr>
                                                @endforeach
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Component End  -->
                    
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>