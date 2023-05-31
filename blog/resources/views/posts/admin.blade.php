@extends('layouts.app')

@section('page-title')
<!--page title start-->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Admin Panel</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Blog Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--page title end-->
@endsection

@section('content')
<div class="page-content">
    <div class="container">

        <div class="clearfix toolbox">
            <a href="/posts/create" class="btn btn-primary pull-right">create post</a>
        </div>

        <ul class="list-group">
            @foreach($posts as $key =>$post)
            <li class="list-group-item clearfix">
                {{ $post->title}}
                <span class="pull-right">
                    <a href="/posts/show/{{ $post->id }}" class="btn btn-default">View</a>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                    <button class="btn btn-danger" onclick="deletePost({{ $post->id }})">Delete</button>
                </span>
            </li>
            @endforeach
        </ul>

    </div>
</div>

{{-- 使用http來刪除資料 --}}
<form id="delete-form" action="/posts/id" method="post">
    <input type="hidden" name="_method" value="delete">
    @csrf
</form>
@endsection

{{-- @section('script')
<script>
let deletePost = function(id){
  let result = confirm('Do you want to delete the post?');
//   console.log(result);
  if(result){
    //delete
    let actionUrl = '/posts/' + id;

    // 使用http來刪除資料
    $('#delete-form').attr('action', actionUrl).submit();

    //使用ajax來刪除資料
    // $.post(actionUrl, {_method: 'delete'}).done(function(){
    //     location.reload();
    // });

  }
};
</script>
@endsection --}}
