<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center" id="siteLogo">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 hidden sm:flex items-center" id="sidemenutoggle">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" id="toggleIcon" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 4l-8 8l8 8"/></svg>
                </button>
            </div>
        </div>
    </div>
</nav>
<ul>
    <li class="bg-indigo-100 border-red-400 border-l-4">
        <a href="" class="flex items-center justify-start gap-4 px-5 py-3">
            <span class="iconify" data-icon="mingcute:dashboard-2-line"></span>
            <p class="linktext">Dashboard</p>
        </a>
    </li>
    <li class="hover:bg-indigo-100">
        <a href="" class="flex items-center justify-start gap-4 px-5 py-3">
            <span class="iconify" data-icon="ph:users"></span>
            <p class="linktext">Admins</p>
        </a>
    </li>
    <li class="hover:bg-indigo-100">
        <a href="" class="flex items-center justify-start gap-4 px-5 py-3">
            <span class="iconify" data-icon="icon-park-outline:appointment"></span>
            <p class="linktext">Appointments</p>
        </a>
    </li>
</ul>

