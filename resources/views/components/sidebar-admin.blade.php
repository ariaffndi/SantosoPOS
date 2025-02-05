<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4 flex flex-col justify-between">
        <!-- Sidebar content here -->
        <div>
            <li><a class="text-2xl font-bold">SantosoPOS Admin</a></li>
            <li><a href="{{ route('dashboard') }}"
                    class="{{ request()->is('admin/dashboard') ? 'nav-link active' : 'nav-link' }} text-xl"><i
                        class="fa-solid fa-house "></i> Dashboard</a></li>
            <li><a href="#" class="nav-link"><i class="fa-solid fa-receipt"></i> Transactions</a></li>
            <li><a href="#" class="nav-link"><i class="fa-solid fa-utensils"></i> Products</a></li>
            <li><a href="#" class="nav-link"><i class="fa-solid fa-user"></i> Cashiers</a></li>
        </div>
        <div class="w-full">
            <x-dropdown-profile></x-dropdown-profile>
        </div>
    </ul>
</div>
