@extends('admin.layouts.layout')
@section('content')
<style>
    input{
        margin-bottom: 10px;
    }
</style>
    <div class="card">
        <div class="card-body">
            <h2>Course Form</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('courses.store') }}" method="POST">
              @csrf
              <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $course->title }}">
              </div>
              <div class="form-group">
                  <label for="about">About:</label>
                  <textarea class="form-control" id="about" name="about">{{ old('about') ? old('about') : $course->about }}</textarea>
              </div>
              <div class="form-group">
                  <label for="html5-date-input" class="col-md-2 col-form-label">Duration</label>
                  <input class="form-control" type="date" name="duration" id="html5-date-input" value="{{ old('duration') ? old('duration') : $course->duration }}">
              </div>
              <div class="mb-3">
                  <label for="select2Basic" class="form-label">Language</label>
                  <select id="select2Basic" name="language" class="select2 form-select form-select-lg" data-allow-clear="true">
                      <!-- Options here -->
                      <option value="test">test</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="categorie">Categorie:</label>
                  <select class="form-select" name="categorie" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option disabled>Select Categorie</option>
                      <option value="1" {{ old('categorie') == '1' ? 'selected' : '' }}>One</option>
                      <option value="2" {{ old('categorie') == '2' ? 'selected' : '' }}>Two</option>
                      <option value="3" {{ old('categorie') == '3' ? 'selected' : '' }}>Three</option>
                  </select>
              </div>
              <div class="form-group my-3">
                  <label for="skill_level">Skill Level:</label>
                  <select class="form-select" name="skill_level" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option disabled>Select Level</option>
                      <option value="1" {{ old('skill_level') == '1' ? 'selected' : '' }}>One</option>
                      <option value="2" {{ old('skill_level') == '2' ? 'selected' : '' }}>Two</option>
                      <option value="3" {{ old('skill_level') == '3' ? 'selected' : '' }}>Three</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="deadline" class="col-md-2 col-form-label">Deadline</label>
                  <input class="form-control" type="date" name="deadline" id="deadline" value="{{ old('deadline') ? old('deadline') : $course->deadline }}">
              </div>
              <div class="form-group">
                  <label for="certificate">Certificate:</label>
                  <div class="col-md p-2">
                      <div class="form-check mt-3">
                          <input name="certificate" class="form-check-input" type="radio" value="yes" id="defaultRadio1" {{ old('certificate') == 'yes' ? 'checked' : '' }}>
                          <label class="form-check-label" for="defaultRadio1">
                              Yes
                          </label>
                      </div>
                      <div class="form-check">
                          <input name="certificate" class="form-check-input" type="radio" value="no" id="defaultRadio2" {{ old('certificate') == 'no' ? 'checked' : '' }}>
                          <label class="form-check-label" for="defaultRadio2">
                              No
                          </label>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="price">Price:</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Amount" value="{{ old('price') ? old('price') : $course->price   }}">
              </div>
              <div class="form-group">
                  <label for="discount">Discount:</label>
                  <input type="text" class="form-control" id="discount" name="discount" placeholder="Amount" value="{{ old('discount') ? old('discount') : $course->discount }}">
              </div>
              <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea class="form-control" id="description" name="description">{{ old('description') ? old('description') : $course->description }}</textarea>
              </div>
          
              <!-- Learn input fields -->
              <div class="d-flex align-items-start mt-2">
                  <div id="learn" class="w-100 me-2">
                      <label for="learn">What they're going to learn:</label>
                      <div class="form-group l">
                          <input type="text" class="form-control" name="learn[]" value="{{ old('learn.0') ? old('learn.0') : $course->learn  }}">
                      </div>
                  </div>
                  <div>
                      <button type="button" class="btn btn-secondary clone1">Add</button>
                  </div>
              </div>
          
              <!-- Requirements input fields -->
              <div class="d-flex align-items-start mt-2">
                  <div id="requirements" class="w-100 me-2">
                      <label for="requirements">Requirements:</label>
                      <div class="form-group r">
                          <input type="text" class="form-control" name="requirements[]" value="{{ old('requirements.0') ? old('requirements.0') : $course->requirements }}">
                      </div>
                  </div>
                  <div>
                      <button type="button" class="btn btn-secondary clone2">Add</button>
                  </div>
              </div>
          
              <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </div>
          </form>
          
        </div>
    </div>

<script>
    // Clone input field
$('.clone1').click(function() {

    // Clone input group
    var cloned = $('.l:first').clone(); 

    // Clear input name
    cloned.find('input').val('');

    // Add to skills div  
    $('#learn').append(cloned);

});
$('.clone2').click(function() {

// Clone input group
var cloned = $('.r:first').clone(); 

// Clear input name
cloned.find('input').val('');

// Add to skills div  
$('#requirements').append(cloned);

});
</script>
<script>
  $(".select2").select2();
</script>
@endsection