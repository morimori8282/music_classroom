<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザ一登録') }}
        </h2>
    </x-slot>

    <form action="{{ route('users.update', [$user->id]) }}" accept-charset="UTF-8" method="put">

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
              <label for="password">パスワード</label>
            </div>
            <div class="value">
              <input type="password" name="password" />
              <label>変更しない場合は未入力でよいです。</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="field">
            <div class="label">
              <label for="password_confirmation">確認用パスワード</label>
            </div>
            <div class="value">
              <input type="password" name="password_confirmation" />
              <label>変更しない場合は未入力でよいです。</label>
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
                <option selected="selected" value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option></select>
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
              <option value="1">北海道</option>
              <option value="2">青森県</option>
              <option value="3">岩手県</option>
              <option value="4">宮城県</option>
              <option value="5">秋田県</option>
              <option value="6">山形県</option>
              <option value="7">福島県</option>
              <option selected="selected" value="8">茨城県</option>
              <option value="9">栃木県</option>
              <option value="10">群馬県</option>
              <option value="11">埼玉県</option>
              <option value="12">千葉県</option>
              <option value="13">東京都</option>
              <option value="14">神奈川県</option>
              <option value="15">新潟県</option>
              <option value="16">富山県</option>
              <option value="17">石川県</option>
              <option value="18">福井県</option>
              <option value="19">山梨県</option>
              <option value="20">長野県</option>
              <option value="21">岐阜県</option>
              <option value="22">静岡県</option>
              <option value="23">愛知県</option>
              <option value="24">三重県</option>
              <option value="25">滋賀県</option>
              <option value="26">京都府</option>
              <option value="27">大阪府</option>
              <option value="28">兵庫県</option>
              <option value="29">奈良県</option>
              <option value="30">和歌山県</option>
              <option value="31">鳥取県</option>
              <option value="32">島根県</option>
              <option value="33">岡山県</option>
              <option value="34">広島県</option>
              <option value="35">山口県</option>
              <option value="36">徳島県</option>
              <option value="37">香川県</option>
              <option value="38">愛媛県</option>
              <option value="39">高知県</option>
              <option value="40">福岡県</option>
              <option value="41">佐賀県</option>
              <option value="42">長崎県</option>
              <option value="43">熊本県</option>
              <option value="44">大分県</option>
              <option value="45">宮崎県</option>
              <option value="46">鹿児島県</option>
              <option value="47">沖縄県</option></select>
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