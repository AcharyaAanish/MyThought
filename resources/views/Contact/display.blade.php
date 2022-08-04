@extends('Admin.sidebar')
<link rel="stylesheet" href="{{asset('assetsss/css/contain/contains.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    $contacts = App\Models\Contact::latest()->paginate(10);
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
                        <h4 class="card-title">{{__('CONTACT US')}}</h4>

                        {{-- <div class="card-button">
                            <a href="{{route('contact.create')}}" class="btn btn-colors">{{__('Add Data')}}</a>
                        </div> --}}

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
                                            {{__('Name')}}
                                        </th>
                                        <th>
                                            {{__('Email')}}
                                        </th>
                                        <th>
                                            {{__('Subject')}}
                                        </th>
                                        <th>
                                            {{__('Actions')}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($contacts as $key => $contact )
                                    <tr>
                                        <td>{{$contact->id}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td>
                                            <form action="{{route('contact.destroy',$contact->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                            <button type="submit" class="btn btn-destroy">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
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
                <div class="d-flex flex-wrap justify-content-center">{{$contacts->links()}}</div>

            </div>

        </div>
    </div>
</div>
@foreach ($contacts as $contactkey => $contact )
<div class="modal fade" id="exampleModalCenter{{$contactkey}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h6><span style="font-weight: bolder"> Name : </span>{{$contact->name}} </h6>
          <h5 class="modal-title" id="exampleModalLongTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

                <div class="text-field">

                    <h6><span style="font-weight: bold"> Email: </span>{{$contact->email}}</h6>
                    <h6><span style="font-weight: bold"> Subject: </span>{{$contact->subject}}</h6>
                    <h6 style="font-weight: bolder"> Message:</h6>
                    <span>{{$contact->message}} </span>
                </div>
        </div>

      </div>
    </div>
</div>
@endforeach
@endsection
