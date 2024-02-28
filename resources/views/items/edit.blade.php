<!-- resources/views/contacts/edit.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>編集</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate">
    <meta http-equiv="Expires" content="Sat, 27 Mar 2023 00:00:00 GMT">
    <meta http-equiv="Pragma" content="cache">
   
</head>
<body>
    <section>
        <div class="contact_box">
            <h2>編集</h2>
            <form method="post" action="{{ route('admin.post.update', ['id' => $contact->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <input type="hidden" name="id" value="{{ $contact->id }}">
                <h2>下記の項目を編集の上更新ボタンを押してください</h2>
                <dl>
               
                <div class="vali" style="color: black; font-size: 16px;">
            <label for="name" class="required-tag">氏名</label><br>
          
            <input type="text" placeholder="山田太郎" id="name" name="name" value="{{ $contact->name }}">

            @if($errors !== null && $errors->has('name'))
                <p class="required">{{ $errors->first('name') }}</p>
            @endif
        </div>

        <div class="vali" style="color: black; font-size: 16px;">
    <label for="age" class="required-tag">年代</label><br>
    <select id="age" name="age" style="font-size: 20px;">
        <option value="10代">10代</option>
        <option value="20代">20代</option>
        <option value="30代">30代</option>
        <option value="40代">40代</option>
        <option value="50代">50代</option>
        <option value="60代">60代</option>
        <option value="70代">70代</option>
        <option value="80代">80代</option>
        <option value="90代">90代</option>
    </select>
    @if($errors !== null && $errors->has('age'))
        <p class="required">{{ $errors->first('age') }}</p>
    @endif
</div>




<div class="vali" style="color: black; font-size: 16px;">
    <label for="time_start" class="required-tag">開始時間</label><br>
    <input type="datetime-local" id="time_start" name="time_start" value="{{ $contact->time_start }}">
    @if($errors !== null && $errors->has('time_start'))
        <p class="required">{{ $errors->first('time_start') }}</p>
    @endif
</div>

<div class="vali" style="color: black; font-size: 16px;">
    <label for="time_end" class="required-tag">終了時間</label><br>
    <input type="datetime-local" id="time_end" name="time_end" value="{{ $contact->time_end }}">
    @if($errors !== null && $errors->has('time_end'))
        <p class="required">{{ $errors->first('time_end') }}</p>
    @endif
</div>





        <div class="vali" style="color: black; font-size: 16px;">
            <label for="location" class="required-tag lg-label">場所</label><br>
            <input type="location" placeholder="住所記入欄" id="location" name="location" class="mg-b_10" value="{{ $contact->location }}">
            @if($errors !== null && $errors->has('location'))
                <p class="required">{{ $errors->first('location') }}</p>
            @endif
        </div>


        <div class="vali" style="color: black; font-size: 16px;">
            <label for="body" class="required-tag lg-label">募集要項</label><br>
            <input type="location" placeholder="競技名、人数など" id="body" name="body" class="mg-b_10" value="{{ $contact->body }}">
            @if($errors !== null && $errors->has('body'))
                <p class="required">{{ $errors->first('body') }}</p>
            @endif
        </div>
                
                </dl>

                <button type="submit" class="btn btn-danger">更新</button>
            </form>
        </div>
    </section>
</body>
</html>