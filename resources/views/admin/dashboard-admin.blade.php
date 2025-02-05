<x-app-layout>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex p-5">
            <!-- Page content here -->
            <label for="my-drawer-2" class="drawer-overlay btn drawer-button self-start ml-2 mt-2 lg:hidden my-5">
                <i class="fa-solid fa-bars"></i>
            </label>
            <div class="w-full">
                <h1 class="text-3xl font-bold mt-3 ml-3">Main Dashboard</h1>
                <hr class="mt-4">
            </div>
            {{-- <div class="overflow-x-auto w-full mt-4">
                
            </div> --}}
        </div>

        <!-- Sidebar -->
        <x-sidebar-admin></x-sidebar-admin>
    </div>
</x-app-layout>
