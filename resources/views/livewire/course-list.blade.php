<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{ route('course', $course->slug) }}">

                <img src="{{ $course->image }}" class="rounded-md mb-2">
                <h2 class="text-left text-lg text-gray-600 truncate uppercase mb-2">
                    {{ $course->name }}
                </h2>
                <h3 class="text-md text-justify text-gray-500">
                    {{ $course->excerpt }}
                </h3>

                <div class="flex mt-4">
                    <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2">
                    <div class="text-left">
                        <p class="text-gray-500 text-sm">
                            {{ $course->user->name }}
                        </p>
                        <p class="text-gray-400 text-xs">
                            {{ $course->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>

            </a>
        </div>
    @endforeach
</div>
