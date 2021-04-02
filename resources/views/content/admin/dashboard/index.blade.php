@extends('master-template.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="md:pl-16 pt-16">
    <div class="col-span-12 mt-8 mx-10">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    General Report
                </h2>
                <a href="" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="zoom-in">
                        <div class="box p-5 flex border-l-4 border-blue-500">
                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                <i data-feather="shopping-cart" class="text-theme-1 w-6 h-6"></i>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="text-sm text-gray-500">Users</div>
                                <div class="font-bold text-lg">1259</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="zoom-in">
                        <div class="box p-5 flex border-l-4 border-blue-500">
                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                <i data-feather="shopping-cart" class="text-theme-1 w-6 h-6"></i>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="text-sm text-gray-500">Users</div>
                                <div class="font-bold text-lg">1259</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="zoom-in">
                        <div class="box p-5 flex border-l-4 border-blue-500">
                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                <i data-feather="shopping-cart" class="text-theme-1 w-6 h-6"></i>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="text-sm text-gray-500">Users</div>
                                <div class="font-bold text-lg">1259</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="zoom-in">
                        <div class="box p-5 flex border-l-4 border-purple-400">
                            <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                <i data-feather="shopping-cart" class="text-theme-1 w-6 h-6"></i>
                            </div>
                            <div class="flex flex-col flex-grow ml-4">
                                <div class="text-sm text-gray-500">Users</div>
                                <div class="font-bold text-lg">1259</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection