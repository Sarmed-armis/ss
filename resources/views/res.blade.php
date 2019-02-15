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



                    <a href="/queryresult" class="btn btn-success">الاستعلام عن النتائح</a>

                </div>

                <table class="table">
    <thead>
      <tr>
        <th scope="col">النتيجه</th>
        <th scope="col">القسم</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($truns as $trun)
      <tr>
      <td>{{$trun->result}}</td>
      <td>{{$trun->name}}</td>
      </tr>
     @endforeach

    </tbody>
  </table>
            </div>
        </div>
    </div>
</div>



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

                </div>
                <form action="studentresult" method="post">

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label for="exampleFormControlSelect1">اسم الطالب</label>

<select class="form-control" id="actor" name="actor">
  @foreach ($actors as $actor)
 <option value="{{$actor->id}}">{{$actor->name}}</option>
 @endforeach
</select>
</div>

<div class="col-auto">
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
</div>
</form>
            </div>
        </div>
    </div>
</div>















@endsection
