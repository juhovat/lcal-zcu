<div class="flex justify-between items-center w-full pl-3 h-10 ">
    <!-- hearts placeholders for blade kit icons -->
    <div>
        {{-- 'composer require blade-ui-kit/blade-zondicons' -> for icon use--}}
        {{-- <x-zondicon-filter /> --}}
       <button><i class="fas fa-filter"></i></button>
    </div>

    <!-- Icons on the right -->
    <div class="flex items-center space-x-2 pr-3 h-10">
        {{-- <x-zondicon-download />
             <x-zondicon-translate />
             <x-zondicon-refresh />
             <x-zondicon-wrench /> --}}
        <button><i class="fas fa-download"></i></button>
        <button><i class="fas fa-language"></i></button>
        <button><i class="fas fa-sync-alt"></i></button>
        <button><i class="fas fa-wrench"></i></button>
    </div>
</div>