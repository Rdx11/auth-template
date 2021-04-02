@extends('master-template.master')

@section('title')
    Create
@endsection

@section('content')
<div class="md:pl-16 pt-16">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 font-sans antialiased">
      <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 mt-10">
          <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
            <div>
              <div class="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 sm:px-20">
                  <div class="mt-8 text-2xl dark:text-gray-200"> Welcome to your Jetstream application! </div>
                    <div class="mt-6 text-gray-500 dark:text-gray-400"> 
                        Laravel Jetstream provides a
                        beautiful, robust starting point for your next Laravel application. Laravel
                        is designed to help you build your application using a development
                        environment that is simple, powerful, and enjoyable. We believe you should
                        love expressing your creativity through programming, so we have spent time
                        carefully crafting the Laravel ecosystem to be a breath of fresh air. We
                        hope you love it. 
                    </div>
              </div>
              <div class="grid grid-cols-1 bg-gray-200 bg-opacity-25 dark:bg-gray-800 md:grid-cols-2">
                <div class="p-6">
                  <div class="flex items-center">
                    <img src="{{ asset('dist/images/svg/student.svg') }}" class="w-10 h-10" alt="student icon">
                    <div class="ml-4 text-xl font-semibold leading-7 text-gray-600 dark:text-gray-200">
                        <a href="https://laravel.com/docs">Student</a>
                    </div>
                  </div>
                  <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500 dark:text-gray-400"> Laravel has
                        wonderful documentation covering every aspect of the framework.
                        Whether you're new to the framework or have previous experience, we
                        recommend reading all of the documentation from beginning to end.
                    </div>
                    <a href="https://laravel.com/docs">
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
                        Laracasts
                        offers thousands of video tutorials on Laravel, PHP, and JavaScript
                        development. Check them out, see for yourself, and massively level
                        up your development skills in the process. 
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
                        Laravel
                          Jetstream is built with Tailwind, an amazing utility first CSS
                          framework that doesn't get in your way. You'll be amazed how easily
                          you can build and maintain fresh, modern designs with this wonderful
                          framework at your fingertips. 
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
                              Authentication and registration views are included with Laravel
                              Jetstream, as well as support for user email verification and
                              resetting forgotten passwords. So, you're free to get started what
                            matters most: building your application. 
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