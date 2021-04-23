@extends('layouts.app')

@section('content')
<div class="col-lg-8 col-md-10 mx-auto">
    <form name="sentMessage" id="contactForm" novalidate>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls">
          <label>Category</label>
          <select class="form-control form-control-lg">
            <option id=opt1>Drink</option>
            <option id=opt2>Food</option>
            <option id=opt3>Snack</option>
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