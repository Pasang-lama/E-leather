@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
   <!-- Main content -->
   <section class="content pt-4">
      <div class="container-fluid">
         <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-md-12">
                  <div class="card card-default">
                     <div class="card-header">
                        <h3 class="card-title">Create Blog</h3>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">

                              <div class="form-group">
                                 <label for="blog_title">Title</label>
                                 <input type="text" class="form-control slug_source {{ $errors->has('blog_title') ? 'is-invalid' : '' }}" name="blog_title" id="blog_title" value="{{ old('blog_title') }}" placeholder="Enter Blog Title" autocomplete="off" />
                                 @error('blog_title')
                                 <span class="text-danger">
                                    {{ $errors->first('blog_title') }}
                                 </span>
                                 @enderror
                              </div>

                              <div class="form-group">
                                 <label for="blog_slug">Slug</label>
                                 <input type="text" class="form-control slug_field {{ $errors->has('blog_slug') ? 'is-invalid' : '' }}" name="blog_slug" id="blog_slug" value="{{ old('blog_slug') ? old('blog_slug') : '' }}" placeholder="Enter Blog Slug" autocomplete="off" />
                                 @error('blog_slug')
                                 <span class="text-danger">
                                    {{ $errors->first('blog_slug') }}
                                 </span>
                                 @enderror
                              </div>

                              <div class="form-group">
                                 <label for="blog_description">Description</label>
                                 <textarea class="form-control editor {{ $errors->has('blog_description') ? 'is-invalid' : '' }}" name="blog_description" rows="5" id="blog_description">{{ old('blog_description') }}</textarea>
                                 @error('blog_description')
                                 <span class="text-danger">
                                    {{ $errors->first('blog_description') }}
                                 </span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <label for="blog_image">Blog Image</label>
                                 <img class="col-md-3" src="{{ asset('images/default.png') }}" alt="Blog Image" height="300px" width="300px" id="pic">
                                 <input type="file" name="blog_image" onchange="pic.src=window.URL.createObjectURL(this.files[0])" accept="image/*" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label for="blog_meta_title">SEO Title</label>
                                 <input type="text" class="form-control" name="blog_meta_title" id="blog_meta_title" value="{{ old('blog_meta_title') }}" placeholder="Enter Meta Title" autocomplete="off" />
                              </div>
                              <div class="form-group">
                                 <label>SEO Keyword</label>
                                 <textarea name="blog_meta_keyword" id="blog_meta_keyword" class="form-control {{ $errors->has('blog_meta_keyword') ? 'is-invalid' : '' }}">{!! old('blog_meta_keyword') !!}</textarea>
                                 @error('blog_meta_keyword')
                                 <span class="text-danger">
                                    {{ $errors->first('seo_keyword') }}
                                 </span>
                                 @enderror
                              </div>

                              <div class="form-group">
                                 <label for="blog_meta_description">SEO Description</label>
                                 <textarea class="form-control" name="blog_meta_description" rows="5" id="blog_meta_description" placeholder="Enter Meta Description" autocomplete="off">{{ old('blog_meta_description') }}</textarea>
                              </div>
                              <div class="form-group">
                                 <label>Schema</label>
                                 <textarea name="blog_schema" id="blog_schema" class="form-control {{ $errors->has('blog_schema') ? 'is-invalid' : '' }}">{!! old('blog_schema') !!}</textarea>
                                 @error('blog_schema')
                                 <span class="text-danger">
                                    {{ $errors->first('blog_schema') }}
                                 </span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="statusSwitch" name="blog_status" value="1" {{ old('status') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="statusSwitch"> Active
                                       Status</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-footer">
                        <input type="submit" class="btn btn-primary btn-sm  float-left" value="Submit">
                     </div>
                     <!-- /.card-body -->
                  </div>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </form>
      </div>
      <!-- /.container-fluid -->
   </section>
</div>
@endsection
@section('script')
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
<script type="text/javascript">
   $(function() {
      if ($('.slug_source').length > 0) {
         $('.slug_source').on('keyup change', function() {
            var text = $(this).val();
            text = text.toLowerCase().replace(/[^a-zA-Z0-9]+/g, '-');
            $('.slug_field').val(text);
         });
      }

      if ($('.slug_field').length > 0) {
         $('.slug_field').on('keyup change', function() {
            var text = $(this).val();
            text = text.toLowerCase().replace(/[^a-zA-Z0-9]+/g, '-');
            $('.slug_field').val(text);
         });
      }

      if ($('.editor').length > 0) {
         $('.editor').each(function(e) {
            CKEDITOR.replace(this.id, {
               filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
               filebrowserUploadMethod: 'form',
               filebrowserBrowseUrl: "{{ route('getUploadedFiles') }}",
            });
         });
      }
   });
</script>
@endsection