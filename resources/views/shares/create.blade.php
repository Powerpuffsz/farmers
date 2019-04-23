@extends('shares.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .errorf{
    font-style: italic;
    color: red;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
   
      <form method="post" action="{{ route('shares.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Share Name:</label>
              <input type="text" class="form-control" name="share_name"/>
              @if($errors->has('share_name'))
              <span class="errorf">{{$errors->first('share_name')}}</span>
              
              @endif
          </div>
          <div class="form-group">
              <label for="price">Share Price :</label>
              <input type="text" class="form-control" name="share_price"/>
              @if($errors->has('share_price'))
              <span class="errorf">{{$errors->first('share_price')}}</span>
              @endif
          </div>
          <div class="form-group">
              <label for="quantity">Share Quantity:</label>
              <input type="text" class="form-control" name="share_qty"/>
              @if($errors->has('share_qty'))
              <span class="errorf">{{$errors->first('share_qty')}}</span>
              @endif
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection