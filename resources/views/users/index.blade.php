<x-app-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('ID') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Name') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Email') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Created At') }}
                        </th>
                        <th
                            class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Updated At') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$user->id}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$user->name}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$user->email}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$user->created_at}}
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                {{$user->updated_at}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>