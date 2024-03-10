@extends('Backend_editor.Layout')
@section('title', 'show')
@section('content')
<!-- fixed navbar -->
<div class="sticky-top bg-white border-bottom  px-4 py-3">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="text-xl font-bold text-gray-900">Shool details</h2>
    <div class="d-flex gap-3 align-items-center">
     


                <div class="navbar-toggler" style="color: black;" class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2" style="color: black;"></i><!-- name f user here -->
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
    </div>
    
  </div>

</div><br>
<!-- card  -->
<div class="card text-center" style="width: 48rem; height:43rem ;margin-left:15%;">
  <div class="card-header">
    <form id="delete-form-{{$school->id}}" action="{{route('Schools.destroy', $school->id)}}" method="Post">

      <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="btn btn-outline-info btn-sm m-1" href="{{ route('Schools.index') }}"><i class="fa-regular fa-circle-left"></i> Back </a>
          <a class="btn btn-outline-success btn-sm m-1" href="{{route('Schools.edit',$school->id)}}"><i class="fa-solid fa-pen"></i> Edit </a>
          @csrf
    @method('DELETE')
    <button class="btn btn-outline-danger btn-sm" data-title="Delete" onclick="confirmation(event,`{{$school->id}}`)"  data-toggle="modal"><i class="fa-solid fa-trash"></i>Delete</button>
  
        </li>
        <li class="nav-item">
        </li>
      </ul>
  </div>
  <div>
    <h4>school : {{ $school->school_name }}</h4><br>

    <img src="{{ asset('storage/'.$school->school_logo) }}"  class="card-img-top" alt="..." style="width: 260px; height:170px ;"><br><br>
    <div class="form-row">
      <div class="col-md-5">
        <p><strong>school number :</strong> {{$school->phone_number}} </p>

      </div>
      <div class="col-md-5">
        <p><strong>email :</strong> {{$school->email}}</p>

      </div>
    </div>
    <div class="form-row">
      <div class="col-md-5">
        <p><strong>headmaster : </strong>{{$school->name_headmaster}}</p>

      </div>
      <div class="col-md-5">
        <p><strong>headmaster number : </strong>{{$school->phone_number_headmaster}}</p>

      </div>
    </div>
    <div class="form-row">
      <div class="col-md-5">
        <p><strong>city :</strong> {{$school->school_city}}</p>

      </div>
      <div class="col-md-5">
        <p><strong>adresse :</strong> {{$school->adresse}}</p>

      </div>
    </div><br>
    <hr style="margin-left: 90px;  width:70% ;"  >
    <p ><strong style="float: left; margin:12px;">description :</strong><br><br> {{$school->description}} 
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, labore a consectetur quis autem dolore adipisci tenetur ut quia sapiente accusamus sit harum veritatis sint eos minus, cum voluptatem alias.</p>
  </div>
</div><br><br>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

@endsection