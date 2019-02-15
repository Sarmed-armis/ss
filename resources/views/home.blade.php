@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    يرجى ملئ الحقول
                    <form action="ActorsRecorde" method="post">

                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="exampleFormControlSelect1">اختر القسم</label>
    <select class="form-control" id="department" name="department">
      @foreach ($departments as $department)
     <option value="{{$department->id}}">{{$department->name }}</option>
     @endforeach
    </select>


  </div>

  <div class="form-group">
                            <label for="exampleFormControlSelect1">اختر المرحله</label>
                            <select class="form-control" id="level" name="level">
                                @foreach ($levels as $level)
                                    <option value="{{$level->id }}">{{$level->arname }}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="exampleFormControlSelect1">رقم الهاتف</label>
                            <input type="text" name="msisdns" class="form-control" >
                        </div>

  <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
