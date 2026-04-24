<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
            COACHTECH
            </a>
        </div>
    </header>
    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>お問い合わせ内容確認</h2>
            </div>
                <form method="post" action="/thanks">
                    @csrf

                    <div class="confirm-table">
                        <table class="confirm-table__inner">
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">お名前</th>
                                    <td class="confirm-table__text">
                                        {{ $inputs['name'] }}
                                    </td>
                                </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">メールアドレス</th>
                                    <td class="confirm-table__text">
                                        {{ $inputs['email'] }}
                                    </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">電話番号</th>
                                    <td class="confirm-table__text">
                                        {{ $inputs['tel'] }}
                                    </td>
                            </tr>
                            <tr class="confirm-table__row">
                                <th class="confirm-table__header">お問い合わせ内容</th>
                                    <td class="confirm-table__text">
                                        {{ $inputs['message'] }}
                                    </td>
                            </tr>
                        </table>
                    </div>
                        <input type="hidden" name="name" value="{{ $inputs['name'] }}">
                        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                        <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
                        <input type="hidden" name="message" value="{{ $inputs['message'] }}">

                        <button class="form__button-submit" type="submit">送信</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
