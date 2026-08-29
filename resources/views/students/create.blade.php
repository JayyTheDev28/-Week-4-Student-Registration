<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen py-10">

    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">

        <div class="bg-blue-600 text-white p-6">
            <h1 class="text-3xl font-bold">Student Registration</h1>
            <p class="text-blue-100 mt-1">
                Complete the form below to register.
            </p>
        </div>

        <form action="{{ route('students.store') }}"
              method="POST"
              enctype="multipart/form-data"
              class="p-8 space-y-6">

            @csrf

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded">
                    <strong>Please correct the following errors:</strong>

                    <ul class="list-disc ml-5 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div>
                <h2 class="text-xl font-semibold border-b pb-2">
                    Personal Information
                </h2>
            </div>


            <div class="grid md:grid-cols-2 gap-6">

                <div>
                    <label class="block font-medium mb-2">
                        Student ID
                    </label>

                    <input type="text"
                           name="student_id"
                           value="{{ old('student_id') }}"
                           class="w-full border rounded-lg p-3"
                           placeholder="2026-00001">

                    @error('student_id')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Email Address
                    </label>

                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="w-full border rounded-lg p-3">

                    @error('email')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        First Name
                    </label>

                    <input type="text"
                           name="first_name"
                           value="{{ old('first_name') }}"
                           class="w-full border rounded-lg p-3">
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Middle Name
                    </label>

                    <input type="text"
                           name="middle_name"
                           value="{{ old('middle_name') }}"
                           class="w-full border rounded-lg p-3">
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Last Name
                    </label>

                    <input type="text"
                           name="last_name"
                           value="{{ old('last_name') }}"
                           class="w-full border rounded-lg p-3">
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Mobile Number
                    </label>

                    <input type="text"
                           name="mobile_number"
                           value="{{ old('mobile_number') }}"
                           class="w-full border rounded-lg p-3">
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Date of Birth
                    </label>

                    <input type="date"
                           name="date_of_birth"
                           value="{{ old('date_of_birth') }}"
                           class="w-full border rounded-lg p-3">
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Gender
                    </label>

                    <select name="gender"
                            class="w-full border rounded-lg p-3">

                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>

                    </select>
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Program
                    </label>

                    <select name="program"
                            class="w-full border rounded-lg p-3">

                        <option value="">Select Program</option>
                        <option value="BSIT">BS Information Technology</option>
                        <option value="BSCS">BS Computer Science</option>
                        <option value="BSIS">BS Information Systems</option>

                    </select>
                </div>


                <div>
                    <label class="block font-medium mb-2">
                        Year Level
                    </label>

                    <select name="year_level"
                            class="w-full border rounded-lg p-3">

                        <option value="">Select Year Level</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>

                    </select>
                </div>

            </div>


            <div>
                <label class="block font-medium mb-2">
                    Address
                </label>

                <textarea name="address"
                          rows="4"
                          class="w-full border rounded-lg p-3">{{ old('address') }}</textarea>
            </div>


            <div>
                <label class="block font-medium mb-2">
                    Profile Picture
                </label>

                <input type="file"
                       name="profile_picture"
                       accept="image/*"
                       class="w-full border rounded-lg p-3">

                @error('profile_picture')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            <button type="submit"
                    class="w-full bg-blue-600 text-white p-4 rounded-lg font-semibold hover:bg-blue-700">

                Register Student

            </button>

        </form>

    </div>

</body>
</html>