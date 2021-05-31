<!--このファイルにログイン後に表示されるコードを書く -->
{{-- layouts/snsadmin.blade.phpを読み込む --}} 
@extends('layouts.snsadmin')

@section('content')
<div class="text-center">
                <form action="/admin/sns/create" method="post">
                    {{ csrf_field() }}
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
<input type="text" name="tweet" style="margin: 1rem; padding: 0 1rem; width: 50%; border-radius: 6px; border: 1px solid #ccc; height: 2.3rem;" placeholder="今どうしてる？">
<button type="submit" style="background-color: #2695E0; color: white; border-radius: 10px; padding: 0.5rem;">つぶやく</button>
                </form>

</div>
<body style="height:100%; background-color: #E6ECF0;">
<div class="wrapper" style="margin: 0 auto; width: 60%; height: 100%; background-color: white;">

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2></h2>

                    
                    
                    <table class="table table-white">
                        <tbody>
                            @foreach($posts as $coment)
                                <tr>
                                    <!-- <th>{{ $coment->id }}</th> -->
                                    <!--ここに名前を表示-->
                                    <th>{{$user->name}}</th>
                                    <td>{{ str_limit($coment->tweet, 255) }}</td>
                                    <td>{{ str_limit($coment->created_at) }}</td>
                                    <td>{{ str_limit($coment->deleted_at) }}</td>
                                    <td>
                                        <a href="{{ action('Admin\SnsController@delete', ['id' => $coment->id]) }}">削除</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="form-group row">
                    </div>
            </div>
        </div>
    </div>
</body>
@endsection
