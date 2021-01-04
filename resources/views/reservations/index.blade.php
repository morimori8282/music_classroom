<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('予約覧') }}
        </h2>
    </x-slot>

    <dev class="new-link">
        <a href="{{ route('reservations.create') }}">新規登録</a>
    </dev>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><a rel="nofollow" data-method="post" href="/reservations/order?asc_or_desc=asc&amp;order=name">氏名</a></th>
                            <th><a rel="nofollow" data-method="post" href="/reservations/order?asc_or_desc=asc&amp;order=phonetic_name">ふりがな</a></th>
                            <th><a rel="nofollow" data-method="post" href="/reservations/order?asc_or_desc=asc&amp;order=birthday">開始日時</a></th>
                            <th><a rel="nofollow" data-method="post" href="/reservations/order?asc_or_desc=asc&amp;order=gender">終了日時</a></th>
                            <th><a rel="nofollow" data-method="post" href="/reservations/order?asc_or_desc=asc&amp;order=gender">更新日</a></th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    @foreach ($reservations as $reservation)

                        <tbody>
                            <tr>
                                <td>{{$reservation->user_official_name}}</td>
                                <td>{{$reservation->user_phonetic_name}}</td>
                                <td>{{$reservations->start}}</td>
                                <td>{{$reservations->end}}</td>
                                <td>{{$reservations->updated_at}}</td>
                                <td><a href="{{ route('reservations.edit', [$reservations->id]) }}">詳細</a></td>
                                <td>
                                    <form action="{{ route('reservations.destroy', [$reservations->id]) }}" method="post">
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