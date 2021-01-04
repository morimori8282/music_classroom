<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザ一覧') }}
        </h2>
    </x-slot>

    <dev class="new-link">
        <a href="{{ route('users.create') }}">新規登録</a>
    </dev>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=asc&amp;order=login_id">ログインID</a></th>
                        <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=asc&amp;order=name">氏名</a></th>
                        <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=asc&amp;order=phonetic_name">ふりがな</a></th>
                        <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=asc&amp;order=birthday">生年月日</a></th>
                        <!-- <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=desc&amp;order=birthday">年齢</a></th> -->
                        <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=asc&amp;order=gender">性別</a></th>
                        <th>住所</th>
                        <!-- <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=asc&amp;order=job_type">業種</a></th>
                        <th>役職</th>
                        <th><a rel="nofollow" data-method="post" href="/users/order?asc_or_desc=asc&amp;order=status">入退</a></th> -->
                        <th colspan="3"></th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)

                        <tbody>
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->official_name}}</td>
                                <td>{{$user->phonetic_name}}</td>
                                <td>{{$user->birthday}}</td>
                                <td>{{$user->gender_name}}</td>
                                <td>{{$user->address}}</td>
                                <td><a href="{{ route('users.edit', [$user->id]) }}">詳細</a></td>
                                <td>
                                    <form action="{{ route('users.destroy', [$user->id]) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="submit" value="削除">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>