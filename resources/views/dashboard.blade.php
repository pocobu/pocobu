<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @can('admin_access')
        <x-slot name="title">
            {{ __('Admin Dashboard') }}
        </x-slot>
        @include('pages.admin.dashboard')
    @endcan
</x-app-layout>
