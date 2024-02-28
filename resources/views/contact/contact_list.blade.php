<!-- resources/views/contacts/contact_list.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>連絡先一覧</title>
    <!-- 他の必要なヘッダー情報を追加 -->
</head>
<body>
    <h1>連絡先一覧</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>氏名</th>
            <th>フリガナ</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th>お問い合わせ内容</th>
            <th>送信日時</th>
            <th>操作1</th>
            <th>操作2</th>
        </tr>

        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->kana }}</td>
                <td>{{ $contact->tel }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->body }}</td>
                <td>{{ $contact->created_at }}</td>
                <td><a href="{{ route('contact.edit', $contact->id) }}">編集</a></td>
                <td>
                    <form action="{{ route('contact.delete', $contact->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
