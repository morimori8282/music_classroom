<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザ一編集') }}
        </h2>
    </x-slot>
    <form action="{{ route('users.update', [$user->id]) }}" accept-charset="UTF-8" method="post">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      @csrf
      <div class="container">
        <div class="row">
          <div class="field">
            <div class="label">
              <label for="name">ログインid</label>
            </div>
            <div class="value">
              <input type="text" value="{{ $user->name }}" name="name" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="official_name">氏名</label>
            </div>
            <div class="value">
              <input type="text" value="{{ $user->official_name }}" name="official_name" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="email">メールアドレス</label>
            </div>
            <div class="value">
              <input type="text" value="{{ $user->email }}" name="email" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="phonetic_name">ふりがな</label>
            </div>
            <div class="value">
              <input type="text" value="{{ $user->phonetic_name }}" name="phonetic_name" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="birthday">生年月日</label>
            </div>
            <div class="value">
              <input value="{{ $user->birthday }}" type="date" name="birthday" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="gender">性別</label>
            </div>
            <div class="value">
              <select name="gender">
                <option value=""></option>
                <option value="1" @if($user->gender === 1) selected @endif>男性</option>
                <option value="2" @if($user->gender === 2) selected @endif>女性</option>
                <option value="3" @if($user->gender === 3) selected @endif>その他</option></select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="zip">郵便番号</label>
            </div>
            <div class="value">
              <input type="text" value="{{ $user->zip }}" name="zip" />
            </div>
          </div>
        </div>
        <script>
          // TODO イベントリスナーでKeyUpイベントを生成する
          $('input[name="zip"]').on('keyup', function() {
            AjaxZip3.zip2addr(this,'','pref','address');
          });
        </script>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="pref">都道府県</label>
            </div>
            <div class="value">
              <select name="pref">
              <option value=""></option>
              <option value="1" @if($user->pref === 1) selected @endif>北海道</option>
              <option value="2" @if($user->pref === 2) selected @endif>青森県</option>
              <option value="3" @if($user->pref === 3) selected @endif>岩手県</option>
              <option value="4" @if($user->pref === 4) selected @endif>宮城県</option>
              <option value="5" @if($user->pref === 5) selected @endif>秋田県</option>
              <option value="6" @if($user->pref === 6) selected @endif>山形県</option>
              <option value="7" @if($user->pref === 7) selected @endif>福島県</option>
              <option value="8" @if($user->pref === 8) selected @endif>茨城県</option>
              <option value="9" @if($user->pref === 9) selected @endif>栃木県</option>
              <option value="10" @if($user->pref === 10) selected @endif>群馬県</option>
              <option value="11" @if($user->pref === 11) selected @endif>埼玉県</option>
              <option value="12" @if($user->pref === 12) selected @endif>千葉県</option>
              <option value="13" @if($user->pref === 13) selected @endif>東京都</option>
              <option value="14" @if($user->pref === 14) selected @endif>神奈川県</option>
              <option value="15" @if($user->pref === 15) selected @endif>新潟県</option>
              <option value="16" @if($user->pref === 16) selected @endif>富山県</option>
              <option value="17" @if($user->pref === 17) selected @endif>石川県</option>
              <option value="18" @if($user->pref === 18) selected @endif>福井県</option>
              <option value="19" @if($user->pref === 19) selected @endif>山梨県</option>
              <option value="20" @if($user->pref === 20) selected @endif>長野県</option>
              <option value="21" @if($user->pref === 21) selected @endif>岐阜県</option>
              <option value="22" @if($user->pref === 22) selected @endif>静岡県</option>
              <option value="23" @if($user->pref === 23) selected @endif>愛知県</option>
              <option value="24" @if($user->pref === 24) selected @endif>三重県</option>
              <option value="25" @if($user->pref === 25) selected @endif>滋賀県</option>
              <option value="26" @if($user->pref === 26) selected @endif>京都府</option>
              <option value="27" @if($user->pref === 27) selected @endif>大阪府</option>
              <option value="28" @if($user->pref === 28) selected @endif>兵庫県</option>
              <option value="29" @if($user->pref === 29) selected @endif>奈良県</option>
              <option value="30" @if($user->pref === 30) selected @endif>和歌山県</option>
              <option value="31" @if($user->pref === 31) selected @endif>鳥取県</option>
              <option value="32" @if($user->pref === 32) selected @endif>島根県</option>
              <option value="33" @if($user->pref === 33) selected @endif>岡山県</option>
              <option value="34" @if($user->pref === 34) selected @endif>広島県</option>
              <option value="35" @if($user->pref === 35) selected @endif>山口県</option>
              <option value="36" @if($user->pref === 36) selected @endif>徳島県</option>
              <option value="37" @if($user->pref === 37) selected @endif>香川県</option>
              <option value="38" @if($user->pref === 38) selected @endif>愛媛県</option>
              <option value="39" @if($user->pref === 39) selected @endif>高知県</option>
              <option value="40" @if($user->pref === 40) selected @endif>福岡県</option>
              <option value="41" @if($user->pref === 41) selected @endif>佐賀県</option>
              <option value="42" @if($user->pref === 42) selected @endif>長崎県</option>
              <option value="43" @if($user->pref === 43) selected @endif>熊本県</option>
              <option value="44" @if($user->pref === 44) selected @endif>大分県</option>
              <option value="45" @if($user->pref === 45) selected @endif>宮崎県</option>
              <option value="46" @if($user->pref === 46) selected @endif>鹿児島県</option>
              <option value="47" @if($user->pref === 47) selected @endif>沖縄県</option></select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="address">住所</label>
            </div>
            <div class="value">
              <input type="text" value="{{ $user->address }}" name="address" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="building">方書</label>
            </div>
            <div class="value">
              <input type="text" value="{{ $user->building }}" name="building" />
            </div>
          </div>
        </div>

      </div>

      <div class="actions">
        <input type="submit" name="commit" value="更新する"/>
      </div>
    </form>

    <a href="{{ route('users.index') }}">戻る</a>
</x-app-layout>