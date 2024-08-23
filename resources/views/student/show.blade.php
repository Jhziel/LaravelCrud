<x-layout>
    <div
        class=" w-6/12 h-4/6 shadow-md bg-slate-50 absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 py-2 px-4 ">
        <div class="flex flex-col items-center">
            <a href="{{ route('student.index') }}"
                class="self-start bg-blue-500 py-2 px-4 text-slate-50 rounded-sm">Back</a>
            <h1 class="text-2xl text-slate-800 mb-14">Student Data</h1>
        </div>
        <div class="flex flex-col gap-3 items-center">
            <h1 class="text-2xl">FullName:{{ $student->first_name }} {{ $student->last_name }}</h1>
            <h1 class="text-2xl">Age:{{ $student->age }} </h1>
            <h1 class="text-2xl">Student Id Number:{{ $student->stud_id }}</h1>

            <div class="flex gap-3">
                <a href="{{ route('student.edit', $student) }}"
                    class="bg-blue-500 py-2 px-4 text-slate-50 shadow-md">Edit</a>
                <form action="{{ route('student.destroy', $student) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 py-2 px-4 text-slate-50 shadow-md">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
