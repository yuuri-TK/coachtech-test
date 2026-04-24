<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">COACHTECH</a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form action="{{ url('/confirm') }}" method="post">
                @csrf
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お名前</span>
                            <span class="form__label--required">必須</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('name')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                            <span class="form__label--required">必須</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                        </div>
                    </div>
                    <div class="form__error">
                        @error('email')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">電話番号</span>
                            <span class="form__label--required">必須</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('tel')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お問い合わせ内容</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--textarea">
                                <textarea name="message" placeholder="資料をいただきたいです">{{ old('message') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">送信</button>
                    </div>
            </form>
        </div>
    </main>
</body>
</html>