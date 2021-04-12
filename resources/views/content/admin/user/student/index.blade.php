@extends('master-template.master')

@section('title')
 Students
@endsection

@section('content')
<div class="md:pl-16 pt-16">
    <div class="col-span-12 mt-8 mx-10">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
            <div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                <div class="text-2xl font-bold text-blue-300 mb-10 mt-5"> <strong class="text-theme-1">Data</strong> List</div>
                @if (Session::get('success'))
                <div class="mb-10">
                    @include('components.alert.success')
                </div>
                @endif
                <div class="flex justify-between">
                    <div class="inline-flex border-2 rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                        <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                            <div class="flex">
                                <span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                    <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text" class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-medium" placeholder="Search">
                        </div>
                    </div>
                    <div class="flex">
                        <a href="/landing-users" class="btn border-blue-500 border text-blue-500  hover:bg-blue-700 hover:text-white focus:outline-none mb-5 mr-5"><i data-feather="arrow-left" class="w-5 h-5 mx-auto mr-1"></i> Back</a>
                        <a href="{{ route('students.create') }}" class="btn border-blue-500 border text-blue-500  hover:bg-blue-700 hover:text-white focus:outline-none mb-5"><i data-feather="plus" class="w-5 h-5 mx-auto mr-1"></i> Create Student</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="align-middle inline-block min-w-full overflow-hidden bg-white px-8 pt-3 rounded-bl-lg rounded-br-lg">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left leading-4 text-blue-500 tracking-wider capitalize">no</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">exam number</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">fullname</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">email</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">phone</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">class</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">majors</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">address</th>
                        <th class="px-6 py-3 text-left text-sm leading-4 text-blue-500 tracking-wider capitalize">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($students as $index => $student)   
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-blue-300">
                            <div class="flex items-center">
                                <div>
                                    <div class="text-sm font-medium leading-5 text-gray-500">{{ $index + $students->firstItem() }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-blue-300">
                            <div class="text-sm leading-5 font-medium text-gray-500">{{ $student->student_exam_number }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b font-medium text-gray-500 border-blue-300 text-sm leading-5">
                            <a href="{{ route('students.show', $student->id) }}" class="text-theme-1 text-underline hover:text-blue-300 capitalize">
                                {{ $student->first_name.' '.$student->last_name  }}
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b font-medium text-gray-500 border-blue-300 text-sm leading-5">{{ $student->user->email }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b font-medium text-gray-500 border-blue-300 text-sm leading-5">{{ $student->phone }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b font-medium text-gray-500 border-blue-300 text-sm leading-5">
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                    <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                    <span class="relative text-xs capitalize">{{ $student->class }}</span>
                        </span>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b font-medium text-gray-500 border-blue-300 text-sm leading-5 capitalize">{{ $student->majors }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b font-medium text-gray-500 border-blue-300 text-sm leading-5 capitalize">{{ $student->address }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-blue-300 text-sm leading-5">
                            <a href="{{ route('students.edit', $student->id) }}" class="btn tooltip px-2 py-2 border-yellow-300 border text-yellow-500 rounded transition duration-300 hover:bg-yellow-300 hover:text-white focus:outline-none" title="Edit" data-content="edit"><i data-feather="edit" class="w-5 h-5 mx-auto mr-1"></i></a>
                            <a class="btn tooltip px-2 py-2 border-red-300 border text-red-500 rounded transition duration-300 hover:bg-red-300 hover:text-white focus:outline-none" title="Delete" data-content="delete" data-toggle="modal" data-target="#destroy"><i data-feather="trash-2" class="w-5 h-5 mx-auto mr-1"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans mb-5">
                {{-- <p class="text-sm leading-5 text-blue-700">
                    Showing
                    <span class="font-medium">1</span>
                    to
                    <span class="font-medium">200</span>
                    of
                    <span class="font-medium">2000</span>
                    results
                </p> --}}
                {{-- pagination --}}
            </div>
        </div>
    </div>
</div>
@include('components.modal.destroy')
@endsection

@push('link')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
@endpush