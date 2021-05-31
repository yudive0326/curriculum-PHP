<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Auth;

// 以下を追記することでPosts Modelが扱えるようになる
use App\Posts;
use App\User;

class SnsController extends Controller
{
  public function add()
  {
  // それ以外はすべてのニュースを取得する
    $posts = Posts::orderBy('id','desc')->get();
    $user = User::find(1);
    
    return view('admin.sns.create',['posts' => $posts, "user"=>$user]);


    }
    
    public function create(Request $request)
    {
      
      // 以下を追記
      // Varidationを行う
      
      $posts = new Posts;
      $form = $request->all();

      // フォームから画像が送信されてきたら、保存して、$posts->image_path に画像のパスを保存する

      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $posts->image_path = basename($path);
      } else {
          // $posts->image_path = null;
      }


      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $posts->fill($form);
      $posts->user_id = Auth::id();

      $posts->save();


      return redirect('admin/sns/create');
  }
  //更新と削除の追記したコード↓
  // 以下を追記　　
public function delete(Request $request)
{
    // 該当するPosts Modelを取得
    $posts = Posts::find($request->id);
    // 削除する
    $posts->delete();
    return redirect('admin/sns/create');
}  
}
