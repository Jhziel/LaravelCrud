<x-layout>
    <h1 class="text-4xl text-center text-white py-3">List of Students</h1>
    <a href="{{ route('student.create') }}" class="bg-green-600 absolute top-4 right-80 text-slate-50 py-2 px-4">Create
        New</a>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Student ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $student->stud_id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $student->last_name }} {{ $student->first_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->age }}
                        </td>
                        <td class=" py-4 flex gap-x-2">
                            <a href="{{ route('student.show', $student) }}"
                                class="py-2 px-4 bg-yellow-700 text-slate-50">View</a>
                            <a href="{{ route('student.edit', $student) }}"
                                class="py-2 px-4  bg-blue-800 text-slate-50">Edit</a>
                            <form action="{{ route('student.destroy', $student) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="py-2 px-4 bg-red-700 text-slate-50">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-layout>
