<x-app-layout>
    <div class="border-b -mt-8 py-14">
        <x-container>
            <div class="flex">
                <div class="flex-shrink-0 mt-3">
                    <img class="w-20 h-20 rounded-full border-2 border-red-500 p-1" src="{{ $user->gravatar() }}" alt="{{ $user->gravatar() }}">
                </div>
                <div class="ml-6">
                    <div class="font-bold mb-3">
                        {{ $user->name }}
                    </div>
                    <div class="text-sm text-gray-500">
                        Joined {{ $user->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </x-container>
    </div>
    <div class="border-b mb-5">
        <x-container>
            <div class="flex ">
                <div class="px-10 py-3 font-semibold text-center border-r">
                    <div class="text-2xl font-semibold mb-2">{{ $user->statuses->count() }}</div>
                    <div class="uppercase text-xs text-gray-600">Status</div>
                </div>
                <div class="px-10 py-3 font-semibold text-center border-r">
                    <div class="text-2xl font-semibold mb-2">{{ $user->follows->count() }}</div>
                    <div class="uppercase text-xs text-gray-600">Following</div>
                </div>
                <div class="px-10 py-3 font-semibold text-center border-r">
                    <div class="text-2xl font-semibold mb-2">{{ $user->followers->count() }}</div>
                    <div class="uppercase text-xs text-gray-600">Follower</div>
                </div>
            </div>
        </x-container>
    </div>

    <x-container>
        <div class="grid grid-cols-2">
            <div class="spcae-y-5">
                <x-statuses :statuses="$statuses"/>
            </div>
        </div>
    </x-container>
</x-app-layout>
