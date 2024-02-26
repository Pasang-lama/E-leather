@extends('backend.layouts.master')
@section('content')
<div class="content-wrapper">
   <!-- Main content -->
   <section class="content pt-4">
      <div class="container-fluid">
         <form action="{{ route('admin.homepageextra.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="row gy-4">
               <div class="col-md-4">
                  <div class="card card-default">
                     <div class="card-header">
                        <h3 class="card-title">Men Category</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <div class="form-group">
                           <label for="homepageextramentileimg">Men Tile Image</label> <br>
                           <img  src="{{ (($homepageextra->homepageextra_mentileimg != '') && file_exists(public_path('/images/homepageextra/'.$homepageextra->homepageextra_mentileimg))) ? asset('/images/homepageextra/'.$homepageextra->homepageextra_mentileimg) : asset('images/default.png') }}" alt="Home Page Extra Men Tile Image" height="189px" width="193px" id="homepageextramentileimg">
                           <input type="file" name="homepageextra_mentileimg" onchange="homepageextramentileimg.src=window.URL.createObjectURL(this.files[0])" accept="image/*" class="form-control col-md-9">
                           @error('homepageextra_mentileimg')
                           <span class="text-danger">
                              {{ $errors->first('homepageextra_mentileimg') }}
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label for="homepageextra_mentilelink">Men Tile Image Link</label>
                           <input type="text" class="form-control col-md-9 {{ $errors->has('homepageextra_mentilelink') ? 'is-invalid' : '' }}" name="homepageextra_mentilelink" id="homepageextra_mentilelink" value="{{ old('homepageextra_mentilelink') ? old('homepageextra_mentilelink') : $homepageextra->homepageextra_mentilelink }}" placeholder="Enter Men Image Tile Link" />
                           @error('homepageextra_mentilelink')
                           <span class="text-danger">
                              {{ $errors->first('homepageextra_mentilelink') }}
                           </span>
                           @enderror
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <input type="submit" class="btn btn-primary  btn-sm float-left" value="Submit">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card card-default ">
                     <div class="card-header">
                        <h3 class="card-title">Women Category</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="homepageextrawomentileimg">Women Tile Image</label> <br>
                                 <img  src="{{ (($homepageextra->homepageextra_womentileimg != '') && file_exists(public_path('/images/homepageextra/'.$homepageextra->homepageextra_womentileimg))) ? asset('/images/homepageextra/'.$homepageextra->homepageextra_womentileimg) : asset('images/default.png') }}" alt="Home Page Extra Women Tile Image" height="189px" width="193px" id="homepageextrawomentileimg">
                                 <input type="file" name="homepageextra_womentileimg" onchange="homepageextrawomentileimg.src=window.URL.createObjectURL(this.files[0])" accept="image/*" class="form-control col-md-9">
                                 @error('homepageextra_womentileimg')
                                 <span class="text-danger">
                                    {{ $errors->first('homepageextra_womentileimg') }}
                                 </span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <label for="homepageextra_womentilelink">Women Tile Image Link</label>
                                 <input type="text" class="form-control col-md-9 {{ $errors->has('homepageextra_womentilelink') ? 'is-invalid' : '' }}" name="homepageextra_womentilelink" id="homepageextra_womentilelink" value="{{ old('homepageextra_womentilelink') ? old('homepageextra_womentilelink') : $homepageextra->homepageextra_womentilelink }}" placeholder="Enter Women Image Tile Link" />
                                 @error('homepageextra_womentilelink')
                                 <span class="text-danger">
                                    {{ $errors->first('homepageextra_womentilelink') }}
                                 </span>
                                 @enderror
                              </div>
                           </div>
                           <!-- /.col -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <input type="submit" class="btn btn-primary  btn-sm float-left" value="Submit">
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card card-default ">
                     <div class="card-header">
                        <h3 class="card-title">Kids Category</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="homepageextrakidtileimg">Kid's Tile Image</label> <br>
                                 <img  src="{{ (($homepageextra->homepageextra_kidtileimg != '') && file_exists(public_path('/images/homepageextra/'.$homepageextra->homepageextra_kidtileimg))) ? asset('/images/homepageextra/'.$homepageextra->homepageextra_kidtileimg) : asset('images/default.png') }}" alt="Home Page Extra Women Tile Image" height="189px" width="193px" id="homepageextrakidtileimg">
                                 <input type="file" name="homepageextra_kidtileimg" onchange="homepageextrakidtileimg.src=window.URL.createObjectURL(this.files[0])" accept="image/*" class="form-control col-md-9">
                                 @error('homepageextra_kidtileimg')
                                 <span class="text-danger">
                                    {{ $errors->first('homepageextra_kidtileimg') }}
                                 </span>
                                 @enderror
                              </div>

                              <div class="form-group">
                                 <label for="homepageextra_kidtilelink">Kid's Tile Image Link</label>
                                 <input type="text" class="form-control col-md-9 {{ $errors->has('homepageextra_kidtilelink') ? 'is-invalid' : '' }}" name="homepageextra_kidtilelink" id="homepageextra_kidtilelink" value="{{ old('homepageextra_kidtilelink') ? old('homepageextra_kidtilelink') : $homepageextra->homepageextra_womentilelink }}" placeholder="Enter Women Image Tile Link" />
                                 @error('homepageextra_kidtilelink')
                                 <span class="text-danger">
                                    {{ $errors->first('homepageextra_kidtilelink') }}
                                 </span>
                                 @enderror
                              </div>
                           </div>
                           <!-- /.col -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <input type="submit" class="btn btn-primary  btn-sm float-left" value="Submit">
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </section>
</div>
@endsection
@section('script')
<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
<script type="text/javascript">
   if ($('.editor').length > 0) {
      $('.editor').each(function(e) {
         CKEDITOR.replace(this.id, {
            filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            filebrowserBrowseUrl: "{{ route('getUploadedFiles') }}",
         });
      });
   }
</script>
@endsection