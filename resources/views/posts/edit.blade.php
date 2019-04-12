@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-action">
            <form action="{{ route('posts.update', $post->slug) }}" method="POST"  enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                <div class="card-content">
                    <div class="card-title text-center">
                            <h2 class="mb-0">Edit Title</h2>
                            <input type="text" name="title" id="title" class="validate form-control mt-0" value="{{$post->title}}">
                    </div>
                </div>
                <div class="input-field">

                    @if ($errors->has('title'))
                            <div class="red-text">
                                {{$errors->first('title')}}
                            </div>
                    @endif
                    <div class="text-center mb-3">
                        <h2 >Upload Main Picture: <span><input class="ml-5" type="file" name="feature"></span></h2>

                    </div>

                    <div class="text-center">
                        <h3>Choose Categories</h3>
                        <select name="categories_id[]" id="" class="form-control" multiple>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                    <textarea name="post" id="post"  class="form-control my-editor">{!!$post->body!!}</textarea>
                    <input type="submit" class="btn blue btn-primary" style="width: 100%;">
                    @if($errors->has('post'))
                        <div class="red-text">
                            {{$errors->first('post')}}
                        </div>
                    @endif

            </form>
        </div>
    </div>
</div>

<script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea.my-editor",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };

        tinymce.init(editor_config);
      </script>
@endsection
