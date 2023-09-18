<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <span class="font-semibold text-xl tracking-tight">Your Site</span>
    </div>
    <div class="block lg:hidden">
        <button id="nav-toggle"
            class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v15z" />
            </svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden" id="nav-content">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Docs
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                Examples
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                Blog
            </a>
        </div>
    </div>
    <div class="">
        <a class="" href="#responsive-header"
            class=" block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4 border-2 border-red-600">
            Join Now
        </a>
        <a class="" href="#responsive-header"
            class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
            Request Demo
        </a>
    </div>
</nav>
<script>
    var toggle = document.getElementById('nav-toggle');
    var nav = document.getElementById('nav-content');

    toggle.addEventListener('click', function() {
        nav.classList.toggle('hidden');
    });
</script>
