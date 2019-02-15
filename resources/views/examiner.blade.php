@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header lead text-right">{{$exames->question}}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
    <form method="post" action="session">
    <div class="row">
    <div class="col-sm ">
      <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="FirstAnswer" >
  <input type="hidden" name="exzams_section" value="{{$exames->exzams_section}}">
  <input type="hidden" name="question_id" value="{{$exames->id}}">
  <label class="form-check-label" for="exampleRadios1">
  {{$exames->FirstAnswer}}
  </label>
</div>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="SecoundAnswer" value="SecoundAnswer">
  <label class="form-check-label" for="SecoundAnswer">
    {{$exames->SecoundAnswer}}
  </label>
</div>

  </div>

  <div class="col-sm ">
    <div class="form-check">
<input class="form-check-input " type="radio" name="exampleRadios" id="ThirdAnswer" value="ThirdAnswer" >
<label class="form-check-label " for="ThirdAnswer">
{{$exames->ThirdAnswer}}
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="exampleRadios" id="FourthAnswer" value="FourthAnswer">
<label class="form-check-label" for="FourthAnswer">
  {{$exames->FourthAnswer}}
</label>
</div>

</div>
<div class="col-auto">
    <button type="submit" class="btn btn-success mb-2 text-left">Submit</button>
</div>

</div>

</div>
</div>
</div>
</div>

</div>
</div>
</div>
@endsection
