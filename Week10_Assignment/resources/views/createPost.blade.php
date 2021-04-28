@extends('layouts.app')
@section('content')
<div class="col-lg-8 col-md-10 mx-auto">
    <form method ="POST" action="/posts"name="sentMessage" id="contactForm" novalidate>
      @csrf
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category</label>
          <select class="form-control form-control-lg">
            <option value="Drink" id=opt1>Drink</option>
            <option value="Food" id=opt2>Food</option>
            <option value="Snack" id=opt3>Snack</option>
          </select>           
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Post</label>
          <textarea type="text" class="form-control" placeholder="Post" id="name" required data-validation-required-message="Please enter your name."></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary" id="sendMessageButton">POST</button>
    </form>
</div>
@endsection