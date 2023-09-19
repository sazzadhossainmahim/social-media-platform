<!-- nav-menu.blade.php -->
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
<script>
    var toggle = document.getElementById('nav-toggle');
    var nav = document.getElementById('nav-content');

    toggle.addEventListener('click', function() {
        nav.classList.toggle('hidden');
    });
</script> 
