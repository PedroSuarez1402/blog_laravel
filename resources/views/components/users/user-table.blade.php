<table class="min-w-full bg-white rounded-2xl shadow-lg">
    <thead>
        <tr class="bg-blue-500 text-white">
            <th class="py-3 px-6 text-left">Avatar</th>
            <th class="py-3 px-6 text-left">Nombre</th>
            <th class="py-3 px-6 text-left">Email</th>
            <th class="py-3 px-6 text-left">Role</th>
            <th class="py-3 px-6 text-left">Status</th>
            <th class="py-3 px-6 text-left">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="border-b">
                <td class="py-4 px-6 text-left">
                    @if ($user->avatar)
                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="w-10 h-10 rounded-full">
                    @else
                        <img src="https://www.gravatar.com/avatar/?d=mp" alt="No Avatar" class="w-10 h-10 rounded-full">
                    @endif
                </td>
                <td class="py-4 px-6">
                    <a href="{{ route('users.show', $user) }}" class="font-semibold text-gray-800 hover:text-blue-500">
                        {{ $user->name }}
                    </a>
                </td>
                <td class="py-4 px-6">
                    {{ $user->email }}
                </td>
                <td class="py-4 px-6">
                    {{ $user->role ?? 'N/A' }}
                </td>
                <td class="py-4 px-6">
                    @if ($user->is_active)
                        <span class="text-green-600 font-semibold">Active</span>
                    @else
                        <span class="text-red-600 font-semibold">Inactive</span>
                    @endif
                </td>
                <td class="py-4 px-6 flex space-x-2">
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="text-red-500 hover:text-red-700">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>