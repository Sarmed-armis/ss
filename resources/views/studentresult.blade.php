@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                </div>

                <table class="table">
    <thead>
      <tr>
        <th scope="col">الماده</th>
        <th scope="col">النتيجه</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($STS as $ST)
      <tr>
      <td>{{$ST->subname}}</td>
      <td>{{$ST->result}}</td>
      </tr>
     @endforeach

    </tbody>
  </table>
            </div>
        </div>
    </div>
</div>

@endsection
