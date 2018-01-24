@extends("layout.master")

@section("content")
<div class="card card-register mx-auto mt-5">
   <div class="card-header">Register a house</div>
   <div class="card-body was-validated">
     <form method='post' action='{{route("housing.store")}}'>
       {{ csrf_field() }}
       <div class="col-md-12">
         <h2>Address</h2>
       </div>
       <div class="form-group">
         <div class="form-row">
           <div class="col-md-6">
             <label for="exampleInputName">Number</label>
             <input name='number' class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Number">
           </div>
           <div class="col-md-6">
             <label for="exampleInputLastName">Street</label>
             <input name='street' class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter street">
           </div>
         </div>
         <div class="form-row">
           <div class="col-md-6">
             <label for="exampleInputName">building</label>
             <input name='building' class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter building">
           </div>
           <div class="col-md-6">
             <label for="exampleInputLastName">flat</label>
             <input name='flat' class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter flat">
           </div>
         </div>
         <div class="form-row">
           <div class="col-md-6">
             <label for="exampleInputName">zipcode</label>
             <input name='zipcode' class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter zipcode">
           </div>
           <div class="col-md-6">
             <label for="exampleInputLastName">city</label>
             <input name='city' class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter city">
           </div>
         </div>
       </div>
       <div class="col-md-12">
         <h2>Caracteristics</h2>
       </div>
       <div class="form-group">
         <div class="form-row">
           <label for="exampleInputEmail1">building</label>
           <select name='building' class="form-control" id="exampleFormControlSelect1">
             <option value='flat'>flat</option>
             <option value='house'>house</option>
           </select>
         </div>
       </div>
       <div class="form-group">
         <div class="form-row">
           <div class="col-md-4">
             <label for="exampleInputName">Area</label>
             <input name='area' class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Number">
           </div>
           <div class="col-md-4">
             <label for="exampleInputLastName">Type</label>
             <input name='type' class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter street">
           </div>
           <div class="col-md-4">
             <legend for="exampleInputName">Furnished</legend>


             <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0">
                <label class="form-check-label" for="inlineCheckbox1">No</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1">
                <label class="form-check-label" for="inlineCheckbox2">Yes</label>
              </div>

          </div>
         </div>
         <div class="form-row">
           <div class="col-md-4">
             <label for="exampleInputLastName">Access</label>
             <input name='' class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter flat">
           </div>
         <div class="col-md-4">
           <label for="exampleInputName">Room</label>
           <input name='' class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter zipcode">
         </div>
         <div class="col-md-4">
           <label for="exampleInputLastName">Floor</label>
           <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter city">
         </div>
       </div>
     </div>
    <div class="form-group">
       <div class="form-row">
         <div class="col-md-3">
           <label for="exampleInputName">Garage/park-place</label>
           <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Number">
         </div>
         <div class="col-md-3">
           <label for="exampleInputLastName">Bedroom</label>
           <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter street">
         </div>
         <div class="col-md-3">
           <label for="exampleInputLastName">greenhouse Gaz</label>
           <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter flat">
         </div>
         <div class="col-md-3">
           <label for="exampleInputName">Energic class</label>
           <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter zipcode">
         </div>
       </div>
     </div>
     <div class="form-group">
        <div class="form-row">
           <div class="col-md-12">
             <label for="exampleInputName">description</label>
             <textarea class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter description"></textarea>
           </div>
         </div>
         <div class="form-row">
           <div class="col-md-12">
             <input type="file" class="custom-file-input" id="validatedCustomFile" required>
             <label class="form-control" for="validatedCustomFile">Insert picture</label>
           </div>
         </div>
     </div>
       <div class="form-group">
         <div class="form-row">
           <div class="col-md-12">
             <button type='submit' class="btn btn-primary btn-block">Create</button>
           </div>
         </div>
       </div>
     </div>
   </form>
  </div>
@endsection
