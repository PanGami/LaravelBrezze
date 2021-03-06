<x-app-layout>

    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                <x-card>
                    <form action="{{ route('statuses.store') }}" method="post">
                        @csrf
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{ Auth::user()->name }}">
                            </div>
                            <div class="w-full">
                                <div class="font-bold">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="my-2">
                                    <textarea name="body" placeholder="What is on your mind" id="body" class="form-textarea w-full border-gray-300 rounded-xl resize-none focus:border-red-500 focus:ring focus:ring-red-200 transition duration-200"></textarea>
                                </div>
                                <div class="text-right">
                                    <x-button>Post</x-button>
                                </div>
                            </div>
                        </div>
                    </form>

                </x-card>
                <div class="space-y-6 mt-5">
                    <div class="rounded-xl space-y-5">
                        <x-statuses :statuses="$statuses"/>
                    </div>
                </div>
            </div>
            <div class="col-span-5">
                <x-card>
                    <h1 class="font-semibold mb-5">Recently Followed</h1>
                    <div class="space-y-5">
                        @foreach(Auth::user()->follows()->limit(5)->get() as $user)
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{ $user->name }}">
                            </div>
                            <div>
                                <div class="font-bold">
                                    {{ $user->name }}
                                </div>
                                <div class="text-sm text-gray-600">
                                    {{ $user->pivot->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </x-card>
            </div>
        </div>
    </x-container>

</x-app-layout>
