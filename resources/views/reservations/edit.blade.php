<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('予約編集') }}
        </h2>
    </x-slot>
    <form action="{{ route('reservations.update', [$reservations->id]) }}" accept-charset="UTF-8" method="post">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @csrf
      <div class="container">
        <div class="row">
          <div class="field">
            <div class="label">
              <label for="start">開始時間</label>
            </div>
            <div class="value">
              <input type="date" value="{{ $reservations->start }}" name="start" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="end">終了時間</label>
            </div>
            <div class="value">
              <input type="date" value="{{ $reservations->end }}" name="end" />
            </div>
          </div>
        </div>

      </div>

      <div class="actions">
        <input type="submit" name="commit" value="更新する"/>
      </div>
    </form>

    <a href="{{ route('reservations.index') }}">戻る</a>
</x-app-layout>