@layouts('layouts.main')
@section('title', 'Lista de Usuários')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold mb-6 text-green-600">Lista de Usuários</h1>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr>
                    <th class="py-3 px-6 bg-gray-200 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="py-3 px-6 bg-gray-200 text-left text-sm font-semibold text-gray-700">Nome</th>
                    <th class="py-3 px-6 bg-gray-200 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="py-3 px-6 bg-gray-200 text-left text-sm font-semibold text-gray-700">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-4 px-6 text-sm text-gray-900">{{ $user->id }}</td>
                        <td class="py-4 px-6 text-sm text-gray-900">{{ $user->name }}</td>
                        <td class="py-4 px-6 text-sm text-gray-900">{{ $user->email }}</td>
                        <td class="py-4 px-6 text-sm text-gray-900">
                            <a href="{{ route('users.edit', $user, false) }}" 
                               class="text-green-600 hover:text-green-800 font-medium mr-4">
                                Editar
                            </a>
                            <form action="{{ route('users.destroy', $user, false) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:text-red-800 font-medium"
                                        onclick="return confirm('Tem certeza que deseja excluir este usuário?');">
                                    Excluir
                                </button>
                            </form>
                        </td>             

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $users->links() }}
    </div>
</div>
@endsection
