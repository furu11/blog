<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    // 編集画面表示
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('items.edit', compact('contact'));
      
        }

   

   
        public function editPost(Request $request, $id)
        {
            $inputs = $request->all();
        
            if (empty($inputs)) {
                 return redirect()->route('index');
            }
        
            $validator = Validator::make($inputs, [
                'name' => 'required',
                'age' => 'required',
                'time_start' => 'required',
                'time_end' => 'required',
                'location' => 'required',
                'body' => 'required',
            ]);
        
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        
            // 既存のデータを取得して更新
            $contact = Contact::find($id);
            
            if (!$contact) {
                // データが見つからない場合のエラーハンドリング
                return redirect()->route('index')->with('error_message', '指定されたIDのデータが見つかりませんでした。');
            }
        
            $contact->name = $request->input('name');
            $contact->age = $request->input('age');
            $contact->time_start = $request->input('time_start');
            $contact->time_end = $request->input('time_end');
            $contact->location = $request->input('location');
            $contact->body = $request->input('body');
            $contact->save();
        
            return view('items.edit_done', [
                'inputs' => $inputs,
            ]);
        }
        
    
    



    // 削除
    public function destroy($id)
    {
        // Booksテーブルから指定のIDのレコード1件を取得
        $contact = Contact::find($id);
        // レコードを削除
        $contact->delete();
       
        return view('items.delete');
    }
}
