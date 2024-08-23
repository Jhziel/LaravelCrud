<x-layout>
    <div
        class=" w-6/12 h-4/6 shadow-md bg-slate-50 absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 py-2 px-4 ">
        <div class="flex flex-col items-center">
            <a href="{{ route('student.index') }}"
                class="self-start bg-blue-500 py-2 px-4 text-slate-50 rounded-sm">Back</a>
            <h1 class="text-2xl text-slate-800 mb-14">Create New Student</h1>
        </div>

        <form action="{{ route('student.store') }}" method="POST" class="w-full flex flex-col justify-start items-center">
            @csrf
            <div class="flex gap-3 ">
                <div class="relative input-field">
                    <input id="name" type="text" name="first_name" id="first_name" required
                        class="w-full px-4 py-2 border border-zinc-950 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    <label for=""
                        class="absolute top-1/2 -translate-y-1/2 left-4 pointer-events-none transition-all duration-500 ease-ease">Enter
                        student first name</label>
                </div>

                <div class="relative input-field">
                    <input id="name" type="text" name="last_name" id="last_name" required
                        class="w-full px-4 py-2 border border-zinc-950 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                    <label for=""
                        class="absolute top-1/2 -translate-y-1/2 left-4 pointer-events-none transition-all duration-500 ease-ease">Enter
                        student last name</label>
                </div>
            </div>
            <div class="relative input-field w-2/3 mt-5">
                <input id="name" type="number" name="age" id="age" required
                    class="no-spinner w-full px-4 py-2 border border-zinc-950 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                <label for=""
                    class="absolute top-1/2 -translate-y-1/2 left-4 pointer-events-none transition-all duration-500 ease-ease">Enter
                    student Age</label>
            </div>

            <div class="relative input-field w-2/3 mt-5">
                <input id="name" type="number" name="stud_id" id="stud_id" required
                    class="no-spinner w-full px-4 py-2 border border-zinc-950 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                <label for=""
                    class="absolute top-1/2 -translate-y-1/2 left-4 pointer-events-none transition-all duration-500 ease-ease">Enter
                    student Number</label>
            </div>
            <button class="w-2/3 bg-green-600 mt-4 py-2 px-4 text-slate-50">Submit</button>
        </form>
    </div>
</x-layout>
