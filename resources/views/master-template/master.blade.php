
<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Topson admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Topson admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Settings - Topson - Tailwind HTML Admin Template</title>
        
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
    </head>

    <body class="main">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar top-0 left-0 fixed w-full h-16">
            <div class="-intro-y top-bar__content bg-white border-theme-3 dark:bg-dark-2 dark:border-dark-2 border-b w-full h-full flex px-5">
                <!-- BEGIN: Logo -->
                <a class="hidden md:flex items-center h-full mr-auto" href="http://localhost/page/dashboard">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="h-8" src="dist/images/logo.svg">
                    <div class="font-medium text-blue-300 ml-4"> <span class="font-medium text-theme-1">Lara</span> Xam </div>
                </a>
                <!-- END: Logo -->
                <a class="mobile-menu-toggler flex md:hidden items-center h-full mr-auto px-5 -ml-5" href="javascript:;"> <i data-feather="bar-chart-2" class="w-5 h-5 transform rotate-90"></i> </a>
                <div class="h-full flex items-center">
                    <div class="mr-3">Dark Mode</div>
                    <input class="form-check-switch" type="checkbox" id="dark-mode-switcher">
                </div>
                <div class="hidden md:flex items-center px-5"> <a href="javascript:;" data-toggle="modal" data-target="#invite-friends-modal" class="btn btn-primary">Invite Friends</a> </div>
                <!-- BEGIN: Notifications -->
                <div class="notification-dropdown dropdown">
                    <a href="javascript:;" class="notification-dropdown__toggler text-gray-600 border-theme-7 dark:border-dark-4 dark:text-gray-300 dropdown-toggle h-full flex items-center px-5 relative -mr-3 md:mr-0 md:border-l md:border-r">
                        <div class="relative">
                            <i data-feather="bell" class="w-5 h-5"></i> 
                            <div class="w-2 h-2 bg-theme-1 text-white flex items-center justify-center absolute -mt-0.5 top-0 right-0 rounded-full"></div>
                        </div>
                    </a>
                    <div class="notification-dropdown__content dropdown-menu">
                        <div class="dropdown-menu__content box dark:bg-dark-2 px-4 pt-4 pb-5">
                            <div class="text-base font-medium leading-tight mb-4">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                    <div class="w-3 h-3 absolute right-0 bottom-0 bg-theme-1 border-white rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a> 
                                        <div class="text-opacity-50 text-gray-800 text-xs ml-auto whitespace-nowrap -mt-0.5">01:10 PM</div>
                                    </div>
                                    <div class="text-opacity-70 text-gray-800 dark:text-gray-500 w-full truncate mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-6">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                    <div class="w-3 h-3 absolute right-0 bottom-0 bg-theme-1 border-white rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Christian Bale</a> 
                                        <div class="text-opacity-50 text-gray-800 text-xs ml-auto whitespace-nowrap -mt-0.5">05:09 AM</div>
                                    </div>
                                    <div class="text-opacity-70 text-gray-800 dark:text-gray-500 w-full truncate mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-6">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                    <div class="w-3 h-3 absolute right-0 bottom-0 bg-theme-1 border-white rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Tom Cruise</a> 
                                        <div class="text-opacity-50 text-gray-800 text-xs ml-auto whitespace-nowrap -mt-0.5">06:05 AM</div>
                                    </div>
                                    <div class="text-opacity-70 text-gray-800 dark:text-gray-500 w-full truncate mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-6">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                    <div class="w-3 h-3 absolute right-0 bottom-0 bg-theme-1 border-white rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Morgan Freeman</a> 
                                        <div class="text-opacity-50 text-gray-800 text-xs ml-auto whitespace-nowrap -mt-0.5">01:10 PM</div>
                                    </div>
                                    <div class="text-opacity-70 text-gray-800 dark:text-gray-500 w-full truncate mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-6">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                    <div class="w-3 h-3 absolute right-0 bottom-0 bg-theme-1 border-white rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a> 
                                        <div class="text-opacity-50 text-gray-800 text-xs ml-auto whitespace-nowrap -mt-0.5">06:05 AM</div>
                                    </div>
                                    <div class="text-opacity-70 text-gray-800 dark:text-gray-500 w-full truncate mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account -->
                <div class="account-dropdown dropdown relative">
                    <a href="javascript:;" class="h-full dropdown-toggle flex items-center pl-5">
                        <div class="w-8 h-8 image-fit">
                            {{-- <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full shadow-md" src="dist/images/profile-14.jpg"> --}}
                        </div>
                        <div class="hidden md:block ml-3">
                            <div class="w-28 truncate font-medium leading-tight">John Travolta</div>
                            <div class="account-dropdown__info text-xs text-gray-600">Software Engineer</div>
                        </div>
                    </a>
                    <div class="dropdown-content dropdown-menu absolute w-56 top-0 right-0 z-20">
                        <div class="dropdown-menu__content box dark:bg-dark-2">
                            <div class="p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </div>
                            <div class="border-gray-200 dark:border-dark-4 p-2 border-t">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account -->
            </div>
        </div>

        <!-- BEGIN: Invite Friends Modal -->
        <div class="modal-invite-friends modal" id="invite-friends-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <div class="intro-y text-lg font-medium">Invite Friends</div>
                        <div class="modal-content__scrollable overflow-y-auto scrollbar-hidden -mx-4 px-4 mt-4">
                            <div class="user-list">
                                <div class="intro-y pb-3">
                                    <div class="intro-y text-gray-500 mb-3">A</div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">John Travolta</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 33 minutes ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-a-0">
                                        </div>
                                    </div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">Christian Bale</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 21 minutes ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-a-1">
                                        </div>
                                    </div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">Tom Cruise</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 20 seconds ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-a-2">
                                        </div>
                                    </div>
                                    <div class="intro-y text-gray-500 mt-6 mb-3">B</div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">John Travolta</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 33 minutes ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-b-0">
                                        </div>
                                    </div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">Christian Bale</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 21 minutes ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-b-1">
                                        </div>
                                    </div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">Tom Cruise</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 20 seconds ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-b-2">
                                        </div>
                                    </div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">Morgan Freeman</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 15 minutes ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-b-3">
                                        </div>
                                    </div>
                                    <div class="intro-y text-gray-500 mt-6 mb-3">C</div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">John Travolta</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 33 minutes ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-ac-0">
                                        </div>
                                    </div>
                                    <div class="intro-y block">
                                        <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                            <div class="w-10 h-10 flex-none image-fit mr-1">
                                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <a href="javascript:;" class="font-medium">Christian Bale</a> 
                                                <div class="flex items-center text-xs">
                                                    <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 21 minutes ago ago</div>
                                                </div>
                                            </div>
                                            <input class="form-check-switch ml-auto" type="checkbox" id="friend-list-ac-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-list__action bg-white dark:bg-dark-6 -mx-4 px-4">
                                    <button class="btn btn-primary w-full">Send Invitation</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN: Side Menu -->
        <div class="side-menu hidden md:block top-0 left-0 fixed w-16 h-screen">
            <div class="side-menu__content box border-theme-3 dark:bg-dark-2 dark:border-dark-2 -intro-x border-r w-full h-full pt-16 flex flex-col justify-center overflow-hidden">
                <a class="-intro-x side-menu__content__link text-gray-600 dark:text-gray-300 relative tooltip py-5" href="index.html" data-placement="right" title="Chats" data-content="chats"> <i data-feather="mail" class="w-5 h-5 mx-auto"></i> </a>
                <a class="-intro-x side-menu__content__link text-gray-600 dark:text-gray-300 relative tooltip py-5" href="index.html" data-placement="right" title="Groups" data-content="groups"> <i data-feather="edit" class="w-5 h-5 mx-auto"></i> </a>
                <a class="-intro-x side-menu__content__link text-gray-600 dark:text-gray-300 relative tooltip py-5" href="index.html" data-placement="right" title="Contacts" data-content="contacts"> <i data-feather="users" class="w-5 h-5 mx-auto"></i> </a>
                <a class="-intro-x side-menu__content__link text-gray-600 dark:text-gray-300 relative tooltip py-5" href="index.html" data-placement="right" title="Profile" data-content="profile"> <i data-feather="user" class="w-5 h-5 mx-auto"></i> </a>
                <a class="-intro-x side-menu__content__link text-gray-600 dark:text-gray-300 relative tooltip py-5" href="login.html" data-placement="right" title="Login"> <i data-feather="lock" class="w-5 h-5 mx-auto"></i> </a>
                <a class="-intro-x side-menu__content__link text-gray-600 dark:text-gray-300 relative tooltip py-5" href="register.html" data-placement="right" title="Register"> <i data-feather="user-plus" class="w-5 h-5 mx-auto"></i> </a>
                <a class="-intro-x side-menu__content__link text-gray-600 dark:text-gray-300 relative tooltip py-5" href="settings.html" data-placement="right" title="Settings"> <i data-feather="settings" class="w-5 h-5 mx-auto"></i> </a>
            </div>
        </div>

        <!-- BEGIN: Content -->
        @yield('content')

        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
    </body>
</html>