@extends('Admin.sidebar')
<link rel="stylesheet" href="{{asset('assetsss/css/contain/contains.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    $movies = App\Models\Movies::latest()->paginate(5);
?>

@section('content')
<div id="content-wrapper" class="d-flex flex-column">
    <div class="contain" >
        <div class="content">
    <!-- Main Content -->
        <div class="row ">
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-header" >
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                              </svg>
                        </div>
                        <h4 class="card-title">{{__('MOVIES')}}</h4>

                        <div class="card-button">
                            <a href="{{route('movie.create')}}" class="btn btn-colors">{{__('Add Data')}}</a>
                        </div>

                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                        <div class="alert alert-success"><h4>{{session('success')}}</h4></div>
                    @endif
                        <div class="tables">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>
                                            {{__('S.NO')}}
                                        </th>
                                        <th>
                                            {{__('Title')}}
                                        </th>
                                        <th>
                                            {{__('Image')}}
                                        </th>
                                        <th>
                                            {{__('Author Name')}}
                                        </th>
                                        <th>
                                            {{__('Created At')}}
                                        </th>
                                        <th>
                                            {{__('Actions')}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($movies as $key => $movie)
                                    <tr>
                                        <td>{{$movie->id}}</td>
                                        <td>{{$movie->title_movies}}</td>
                                        <td>
                                        <img src={{asset("storage/$movie->image_movies")}} width="150" style="height: 100px ! important; object-fit:fill;" rel="nofollow" alt="Image not found">
                                              </td>
                                        <td>{{$movie->author_name}}</td>
                                        <td>{{$movie->created_at}}</td>
                                        <td>
                                            <form action="{{route('movie.destroy',$movie->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                            <button type="submit" class="btn btn-destroy">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                            <a href="{{route('movie.edit',$movie->id)}}" class="btn btn-update">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                  </svg>
                                            </a>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$key}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                  </svg>
                                              </button>
                                            </form>
                                        </td>
                                    </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-center">{{$movies->links()}}</div>

            </div>

        </div>
    </div>
</div>
@foreach ($movies as $moviekey => $movie )
<div class="modal fade" id="exampleModalCenter{{$moviekey}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5><span style="font-weight: bold">Director Name : </span> {{$movie->director_name}}</h5>

          <h5 class="modal-title" id="exampleModalLongTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h5><span style="font-weight: bold">Cast Name : </span> {{$movie->cast_name}}</h5>
                <div class="text-field">
                    <img src="{{asset("/storage/$movie->image_movies")}}"width="150" style="height: 100px ! important; object-fit:fill;" rel="nofollow" alt="Image not found">
                    <h6 style="font-weight: bolder;"> DESCRIPTION:</h6>
                    <span>{!! $movie->description_movies !!} </span>
                </div>
        </div>

      </div>
    </div>
</div>
@endforeach
@endsection
