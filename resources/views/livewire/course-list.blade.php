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

                <div>
                    <img src="{{ $course->user->avatar }}" class="rounded-full mt-4 mx-auto h-8 w-8">
                    <p>{{ $course->user->name }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>
