// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

document.deletePost = function(id){
    let result = confirm('Do you want to delete the post?');
    console.log(result);
    if(result){
      //delete
      let actionUrl = '/posts/' + id;

      // 使用http來刪除資料
      $('#delete-form').attr('action', actionUrl).submit();
    }
  };
