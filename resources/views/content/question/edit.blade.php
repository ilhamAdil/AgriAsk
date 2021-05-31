@extends('content.community')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/community/{{ $question->id }}" method="post">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="title" value="{{ old('title', $question->title) }}" class="form-control mb-3" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="Body">Body</label>
                    <textarea type="text" name="body" class="form-control mb-3 areaedit">{{ old('body', $question->body)}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="Tags">Tags</label>
                    <input type="text" name="tags" value="{{ old('tags', $question->tags->tag_name)}}" class="form-control mb-3" placeholder="Enter Tags">
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>            
              </form>
            </div>
    </div>   
@endsection