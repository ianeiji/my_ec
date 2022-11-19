<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー管理画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">
                          <div class="w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                              <thead>
                                <tr>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">名前</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">編集</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($owners as $owner)
                                <tr>
                                  <td class="px-4 py-3">{{ $owner->name }}</td>
                                  <td class="px-4 py-3">{{ $owner->email }}</td>
                                  <td class="px-4 py-3">{{ $owner->created_at }}</td>
                                  <td class="px-4 py-3">
                                    <button onclick="location.href='{{ route('admin.owners.edit',['owner' => $owner->id]) }}'" class="text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded">編集</button>
                                </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="flash_message bg-green-500 w-80 text-center rounded text-white py-3 my-0 float-right">
            {{ session('success') }}
        </div>
    @elseif (session('danger'))
        <div class="flash_message bg-red-500 w-80 rounded text-center text-white py-3 my-0 float-right">
            {{ session('danger') }}
        </div>
    @endif
</x-app-layout>
