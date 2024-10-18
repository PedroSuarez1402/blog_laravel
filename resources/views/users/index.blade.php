<x-app-layout>
    <div >
        <x-users.user-table :users="$users"></x-users.user-table>
    </div>
    {{-- Pagination --}}
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</x-app-layout>
