
@include('layouts.header')
<form action="{{url('/addtemple')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
    <br>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="temple_name" name="temple_name" placeholder="Enter Temple Name">
    </div>
    <div class="form-floating"  style= "display: flex;">
    <p><b>Banner Image</b></p>
    <input type="file" class="form-control" placeholder="" name="banner_image[]" id="banner_image" multiple><button class="btn btn-primary" type="button" id="add">Add</button>
    </div> 
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="time_period" name="time_period" placeholder="Enter Time Period">
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="patron" name="patron" placeholder="Enter Patron">
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="deity" name="deity" placeholder="Enter Deity">
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
    </div>
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="category" name="category" placeholder="Enter Category">
    </div>  
    <br>
    <div class="form-floating">
    <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
    </div>  
    <br>
    <div class="form-floating">
    <label type="text" class="form-control" placeholder="">Enter About Temple</label>
    </div>
    <textarea class="form-control" id="about_temple" name="about_temple" width="100%" height="150" ckeditor="true" maxlength="20000" ismandatory="false"></textarea>    
    </div>
    <br>
    <div class="submit" style="text-align:center;">
    <button class="btn btn-primary" type="submit">submit</button>
    </div>
    </form>


@include('layouts.footer')