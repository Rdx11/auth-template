<div class="space-x-2 bg-green-200 p-4 rounded flex items-center text-green-600 my-4 shadow-md w-full border-b-2 border-green-300">
        <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full mr-3">
            <span class="text-green-500">
                <svg fill="currentColor"
                    viewBox="0 0 20 20"
                    class="h-6 w-6">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content ml-5 flex-1">
            <div class="alert-title font-semibold text-lg text-green-800">
                Success
            </div>
            <div class="alert-description text-sm text-green-600">
                {{ session('success') }}
            </div>
        </div>
        <a class="hover:text-green-900" onclick="this.parentElement.remove();">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 h-4 pt-1" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
        </a>
</div>