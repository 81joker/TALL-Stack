<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Hallo</h1>
                    <x-icon name="home" class="w-5 h-5" outline />
                            <div>
                            <x-card title="Your title here">
                                <p>Lorem ipsum, dolor sit amet consectetur
                                     adipisicing elit. Et molestias inventore
                                     est excepturi cupiditate aspernatur. Dolore, tenetur dolorem cumque eum numquam totam!</p>
                            
                                <x-slot name="footer">
                                    <div class="flex justify-between items-center">
                                        <x-button :async-data="route('home')" label="Delete" flat negative />
                                        <x-button :async-data="route('home')"  label="Save" primary />
                                    </div>
                                </x-slot>
                            </x-card>
                            </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
