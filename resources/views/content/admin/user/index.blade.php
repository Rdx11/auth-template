@extends('master-template.master')

@section('title')
    Create data student
@endsection

@section('content')
<div class="md:pl-16 pt-16">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 font-sans antialiased">
      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 mt-10">
          <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
            <div>
              <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 sm:px-20">
                  <div class="text-2xl font-bold text-blue-300"> <strong class="text-theme-1">Manage</strong> User</div>
              </div>
              <div class="grid grid-cols-1 bg-gray-200 bg-opacity-25 dark:bg-gray-800 md:grid-cols-2">
                <div class="p-6">
                  <div class="flex items-center">
                    <img src="{{ asset('dist/images/svg/student.svg') }}" class="w-10 h-10" alt="student icon">
                    <div class="ml-4 text-xl font-semibold leading-7 text-gray-600 dark:text-gray-200">
                        Student
                    </div>
                  </div>
                  <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                      you can manage all <strong>student</strong> related data on this page.
                      (create, read, update, and delete).
                      but, you can't manage student test results.
                    </div>
                    <a href="/students">
                      <div class="flex items-center mt-3 text-sm font-semibold text-theme-1 dark:text-indigo-400 hover:text-blue-300">
                          <div>Manage all Students</div>
                          <div class="ml-1">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                              </path>
                            </svg>
                          </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                  <div class="flex items-center">
                    <img src="{{ asset('dist/images/svg/teacher.svg') }}" class="w-10 h-10" alt="teacher icon">
                      <div class="ml-4 text-xl font-semibold leading-7 text-gray-600 dark:text-gray-200">
                          <a href="https://laracasts.com">Teacher</a>
                      </div>
                  </div>
                  <div class="ml-12">
                      <div class="mt-2 text-sm text-gray-500 dark:text-gray-400"> 
                        you can manage all <strong>teacher</strong> related data on this page.
                      (create, read, update, and delete).
                      </div>
                      <a href="https://laracasts.com">
                        <div class="flex items-center mt-3 text-sm font-semibold text-theme-1 dark:text-indigo-400 hover:text-blue-300">
                            <div>Manage all Teachers</div>
                            <div class="ml-1">
                              <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                              </svg>
                            </div>
                        </div>
                      </a>
                  </div>
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                  <div class="flex items-center">
                      <img src="{{ asset('dist/images/svg/admin.svg') }}" class="w-10 h-10" alt="admin icon">
                      <div class="ml-4 text-xl font-semibold leading-7 text-gray-600 dark:text-gray-200">
                          <a href="https://tailwindcss.com/">Admin</a>
                      </div>
                  </div>
                  <div class="ml-12">
                      <div class="mt-2 text-sm text-gray-500 dark:text-gray-400"> 
                      you can manage all <strong>admin</strong> related data on this page.
                      (create, read, update, and delete).
                      </div>
                      <a href="https://laracasts.com">
                        <div class="flex items-center mt-3 text-sm font-semibold text-theme-1 dark:text-indigo-400 hover:text-blue-300">
                            <div>Manage all Admin</div>
                            <div class="ml-1">
                              <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                              </svg>
                            </div>
                        </div>
                      </a>
                  </div>
                </div>
                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                      <img src="{{ asset('dist/images/svg/users.svg') }}" class="w-10 h-10" alt="users icon">
                      <div class="ml-4 text-xl font-semibold leading-7 text-gray-600 dark:text-gray-200">
                          Users
                      </div>
                    </div>
                    <div class="ml-12">
                      <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                        you can manage all <strong>users</strong> related data on this page.
                        (create, read, update, and delete).
                      </div>
                      <a href="https://laracasts.com">
                        <div class="flex items-center mt-3 text-sm font-semibold text-theme-1 dark:text-indigo-400 hover:text-blue-300">
                            <div>Manage all Users</div>
                            <div class="ml-1">
                              <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                                </path>
                              </svg>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection