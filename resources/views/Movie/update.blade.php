@extends('Admin.sidebar')
<link rel="stylesheet" href="{{asset('assetsss/css/contain/contains.css')}}">
<link rel="stylesheet" href="{{asset('assetsss/css/contain/form.css')}}">
@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <div class="row">
            <div class="container-fluid">
                <form action="{{route('movie.update',$movies->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card">
                        <div class="card-header">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                  </svg>
                            </div>
                            <h4>{{__('MOVIES')}}</h4>
                            <div class="card-button">
                                <a href="{{route('movie.index')}}" class="btn btn-colors">Back To Index</a>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="row">
                                <label class="col-sm-2 form-label">{{__('Title')}}</label>
                                <div class="col-sm-10">
                                    <div class="form-group bmd-form-group" id="form-box">
                                        <input type="text" class="form-control"  id="title_movies" name="title_movies" style="outline: none;" value="{{old('title_movies',$movies->title_movies)}}" required/>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 form-label">{{__('Director Name')}}</label>
                            <div class="col-sm-10">
                                <div class="form-group bmd-form-group" id="form-box">
                                    <input type="text" class="form-control"  id="director_name" name="director_name" style="outline: none;" value="{{old('director_name',$movies->director_name)}}" required/>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 form-label">{{__('Movie Cast')}}</label>
                        <div class="col-sm-10">
                            <div class="form-group bmd-form-group" id="form-box">
                                <input type="text" class="form-control"  id="cast_name" name="cast_name" style="outline: none;" value="{{old('cast_name',$movies->cast_name)}}" required/>
                            </div>
                        </div>
                </div>

                        <div class="row">
                            <label class="col-sm-2 form-label">{{__('Rating')}}</label>
                            <div class="col-sm-10">
                                <div class="form-group bmd-form-group" id="form-box">
                                    <input type="text" class="form-control"  id="rating_movies" name="rating_movies" style="outline: none;" value="{{old('rating_movies',$movies->rating_movies)}}" required/>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 form-label">{{__('Movie Type')}}</label>
                        <div class="col-sm-10">
                            <div class="form-group bmd-form-group" id="form-box">
                                <input type="text" class="form-control"  id="type_movies" name="type_movies" style="outline: none;" value="{{old('type_movies',$movies->type_movies)}}" required/>
                            </div>
                        </div>
                </div>
                    <div class="row">
                        <label class="col-sm-2 form-label">{{__('Release Date')}}</label>
                        <div class="col-sm-10">
                            <div class="form-group bmd-form-group" id="form-box">
                                <input type="text" class="form-control"  id="release_date" name="release_date" style="outline: none;" value="{{old('release_date',$movies->release_date)}}" required/>
                            </div>
                        </div>
                </div>
                    <div class="row">
                        <label class="col-sm-2 form-label">{{__('Description')}}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description_movies" rows="5" name="description_movies">{{$movies->description_movies}}</textarea>
                        </div>
                   </div>
                     <div class="row">
                            <label class="col-sm-2 form-label">{{__('Image')}}</label>
                            <div class="col-sm-10">
                                <div class="form-group bmd-form-group" id="form-box">
                                    <div class="input-image">
                                        {{-- <button id="files" class="upload-btn" onclick="document.getElementById('file').click()">Upload file</button>
                                        //style for file type input in inline
                                        style="visibility:hidden;padding: 0px 0px; margin-top: -10px;"
                                        --}}
                                        <input type="file" name="image_movies" id="image_movies"  class="form-control" />
                                    </div>
                                </div>
                            </div>
                     </div>
                       <div class="row">
                        <label class="col-sm-2 form-label">{{__('Author Name')}}</label>
                        <div class="col-sm-10">
                            <div class="form-group bmd-form-group" id="form-box">
                                <input type="text" class="form-control"  id="author_name" name="author_name" style="outline: none;" value="{{old('author_name',$movies->author_name)}}" required/>
                            </div>
                        </div>
                    </div>
                           <div class="card-footer">
                                <button type="submit" class="btn btn-submit">{{__('SUBMIT')}}</button>
                            </div>

                        </div>

                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Javascript for CKeditor --}}
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description_movies' );
</script>

@endsection
