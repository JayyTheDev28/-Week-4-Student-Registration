<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen py-10">

    <div class="max-w-3xl mx-auto">

        @if(session('success'))

            <div class="bg-green-100 border border-green-400 text-green-700 p-4 rounded-lg mb-6">

                {{ session('success') }}

            </div>

        @endif


        <div class="bg-white shadow-lg rounded-xl overflow-hidden">

            <div class="bg-blue-600 p-6 text-white">

                <h1 class="text-3xl font-bold">
                    Student Profile
                </h1>

            </div>


            <div class="p-8">

                <div class="flex flex-col md:flex-row gap-8">

                    <div class="flex justify-center">

                        <img
                            src="{{ asset('storage/' . $student->profile_picture) }}"
                            alt="Student Profile Picture"
                            class="w-48 h-48 object-cover rounded-full border-4 border-blue-500">

                    </div>


                    <div class="flex-1 space-y-3">

                        <h2 class="text-2xl font-bold">

                            {{ $student->first_name }}
                            {{ $student->middle_name }}
                            {{ $student->last_name }}

                        </h2>

                        <p>
                            <strong>Student ID:</strong>
                            {{ $student->student_id }}
                        </p>

                        <p>
                            <strong>Email:</strong>
                            {{ $student->email }}
                        </p>

                        <p>
                            <strong>Mobile:</strong>
                            {{ $student->mobile_number }}
                        </p>

                        <p>
                            <strong>Date of Birth:</strong>
                            {{ $student->date_of_birth }}
                        </p>

                        <p>
                            <strong>Gender:</strong>
                            {{ $student->gender }}
                        </p>

                        <p>
                            <strong>Program:</strong>
                            {{ $student->program }}
                        </p>

                        <p>
                            <strong>Year Level:</strong>
                            {{ $student->year_level }}
                        </p>

                        <p>
                            <strong>Address:</strong>
                            {{ $student->address }}
                        </p>

                    </div>

                </div>


                <div class="mt-8">

                    <a href="{{ route('students.create') }}"
                       class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg">

                        Register Another Student

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>