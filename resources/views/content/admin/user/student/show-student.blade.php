@extends('master-template.master')

@section('title')
    Create
@endsection

@section('content')
<div class="md:pl-16 pt-16">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 font-sans antialiased">
      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="md:flex no-wrap md:-mx-2 mb-20">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-blue-300">
                        <div class="image overflow-hidden">
                            <img class="h-auto w-full mx-auto"
                                src="{{ $student->photo != null ? Storage::url($student->photo) : asset('dist/images/default-profile.png') }}"
                                alt="">
                        </div>
                        <ul
                            class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Role</span>
                                <span class="ml-auto"><span
                                        class="bg-blue-300 py-1 px-2 rounded text-white text-sm">Student</span></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Created at</span>
                                <span class="ml-auto">{{ date('d F Y', strtotime($student->created_at)) }}</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End of profile card -->
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <div class="intro-y box p-4 mt-3">
                        <div class="text-base font-bold text-blue-400">Personal Information</div>
                        <div class="mt-4 grid lg:grid-cols-2 gap-6">
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Firstname</div>
                                    <div class="mt-0.5 capitalize">{{ $student->first_name }}</div>
                                </div>
                                <i data-feather="user" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Lastname</div>
                                    <div class="mt-0.5 capitalize">{{ $student->last_name }}</div>
                                </div>
                                <i data-feather="user" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Place of birth</div>
                                    <div class="mt-0.5 capitalize">{{ $student->place_of_birth }}</div>
                                </div>
                                <i data-feather="map-pin" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Date of birth</div>
                                    <div class="mt-0.5">{{ date('d F Y', strtotime($student->date_of_birth)) }}</div>
                                </div>
                                <i data-feather="calendar" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Gender</div>
                                    <div class="mt-0.5 capitalize">{{ $student->gender === 1 ? 'male' : 'female' }}</div>
                                </div>
                                <i data-feather="user" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Address</div>
                                    <div class="mt-0.5 capitalize">{{ $student->address }}</div>
                                </div>
                                <i data-feather="map-pin" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Age</div>
                                    <div class="mt-0.5">{{ $student->age }}</div>
                                </div>
                                <i data-feather="smile" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Zip code</div>
                                    <div class="mt-0.5">{{ $student->zip_code }}</div>
                                </div>
                                <i data-feather="clipboard" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                        </div>
                    </div>
                    <!-- End of about section -->
    
                    <div class="my-4"></div>
    
                    <div class="intro-y box p-4 mt-3">
                        <div class="text-base font-bold text-blue-400">Others Information</div>
                        <div class="mt-4 grid lg:grid-cols-2 gap-6">
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Exam number</div>
                                    <div class="mt-0.5">{{ $student->student_exam_number }}</div>
                                </div>
                                <i data-feather="clipboard" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Email</div>
                                    <div class="mt-0.5">{{ $student->user->email }}</div>
                                </div>
                                <i data-feather="mail" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Class</div>
                                    <div class="mt-0.5 capitalize">{{ $student->class }}</div>
                                </div>
                                <i data-feather="list" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Majors</div>
                                    <div class="mt-0.5 capitalize">{{ $student->majors }}</div>
                                </div>
                                <i data-feather="list" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Phone</div>
                                    <div class="mt-0.5">{{ $student->phone }}</div>
                                </div>
                                <i data-feather="phone" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                            <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                                <div class="pesonal_information">
                                    <div class="text-gray-600 mb-2 font-semibold">Hobby</div>
                                    <div class="mt-0.5 capitalize">{{ $student->hobby }}</div>
                                </div>
                                <i data-feather="globe" class="w-4 h-4 text-gray-600 ml-auto"></i> 
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('students.index') }}" class="btn border-blue-500 border text-blue-500  hover:bg-blue-700 hover:text-white focus:outline-none mb-10 mt-5 mr-5"><i data-feather="arrow-left" class="w-5 h-5 mx-auto mr-1"></i> Back</a>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection