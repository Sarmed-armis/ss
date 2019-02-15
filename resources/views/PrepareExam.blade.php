@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">اختر الامتحان الذي تود المشاركه به</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
    <div class="row">
      @foreach ($subjects as $subject)
    <div class="col-sm">
      <a  href="exams/{{$subject->section_id}}" class="btn btn-secondary">{{$subject->subname}}</a>
    </div>
  @endforeach
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
