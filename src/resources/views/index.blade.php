<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  
  
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>
  
  <main>
  
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--item">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" placeholder="例:山田" 
              class="validata[required]" data-prompt-position="topLeft">
              <input type="text" placeholder="例:太郎" 
              class="validata[required]" data-prompt-position="topLeft">
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--item">※</span>
          </div>
          <div class="form__group-content">
              <form action="receive.php" method="post">
              <p>
              <input type="radio" name="review" value="男性" checked> 男性 
              <input type="radio" name="review" value="女性"> 女性 
              <input type="radio" name="review" value="その他"> その他 
              </p>
              </form>
            </div>
            <div class="form__error">
              @error('gender')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--item">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com"  value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--item">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <!--<input type="hidden" name="col_3_title"-->
              <form action="#" method="GET" name="number">
                <input type="text" placeholder="" class="size-input-telS" maxlength="4"> - 
                <input type="text" placeholder="" class="size-input-telS" maxlength="4"> -
                <input type="text" placeholder="" class="size-input-telS" maxlength="4"> 

                
                
                
              </form>
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--item">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
            <div class="form__error">
              @error('building')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--item">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <form action="recive.php" method="get">
                <select name="select">
                  <option value="選択してください">選択してください</option>
                </select>
              </form>
            </div>
            <div class="form__error">
              @error('select')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--item">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form__error">
              @error('content')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
          
        </div>
      </form>
    </div>
  
  </main>
  
</body>

</html>
