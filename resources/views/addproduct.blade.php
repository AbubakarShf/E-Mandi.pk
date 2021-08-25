@extends('base')



@section('content')

      
 <div class="container">    
   <input type="text" id="index" value="{{$index}}" hidden>
   <input type="text" id="table" value="{{$table}}" hidden>
   <div style="margin-top: 30px">
      <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title text-center"><h1>Add New Product</h1></div>
        </div>  
            <div class="panel-body" >
                <form action="#" type="POST">

                    <!--Stock Name-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Stock Name </label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input value="bull" type="text" required class="input-md textinput textInput form-control form require" name="stock_name" placeholder="Stock Name" style="margin-bottom: 15px" type="text" />
                        </div>
                    </div>
                    
                    <!--Stock Code-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Stock Code </label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input value="007" type="text" required  class="input-md textinput textInput form-control form require"  name="stock_code" placeholder="Stock Code" style="margin-bottom: 15px" type="text" />
                        </div>
                    </div>

                    <!--Stock Color-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Stock Color</label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input value="black" type="text" required  class="input-md textinput textInput form-control form require" name="stock_color"  placeholder="Stock Color" style="margin-bottom: 15px" type="text" />
                        </div>
                    </div>

                    <!--Weight-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Weight</label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input type="text" value="200" class="input-md textinput textInput form-control form require" type="number" name="stock_weight"   placeholder="CNIC" style="margin-bottom: 15px" type="text" value="Not Provided"/>
                        </div>
                    </div>

                    <!--Age.-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Age</label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input type="text" value="2" required  class="input-md textinput textInput form-control form" name="stock_age"   placeholder="Age" style="margin-bottom: 15px" type="text" />
                        </div>
                    </div>


                    <!--Base Price-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Base Price</label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input type="number" value="200000"  required class="input-md textinput textInput form-control form require" name="stock_base_price"   placeholder="Base Price" style="margin-bottom: 15px" type="text" />
                        </div>
                    </div>


                    <!--Base Bide-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Base Bide</label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input type="number" value="5000"  required class="input-md textinput textInput form-control form require" name="stock_base_bid"   placeholder="Base Bid" style="margin-bottom: 15px" type="text" />
                        </div>
                    </div>


                     <!--Origin-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Origin</label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <input type="text" value="Sahiwal"  required class="input-md textinput textInput form-control form" name="stock_origin"   placeholder="Origin" style="margin-bottom: 15px" type="text" />
                        </div>
                    </div>


                     <!--Status-->

                    <div id="div_id_catagory" class="form-group required">
                        <label for="id_catagory" class="control-label col-md-4 col-lg-2 requiredField">Status</label>
                        <div class="controls col-md-8 col-lg-4 "> 
                            <select class="form-control form require" name="status" id="exampleFormControlSelect1">
                                <option value="new" selected>New</option>
                                <option value="sold">Sold</option>
                                <option value="bidding">Bidding</option>
                            </select>
                        </div>
                    </div>



                   
                    <!--Photo-->

                    <label for="id-photo" class="control-label col-md-4 col-lg-2 ">Photo<span class="asteriskField">*</span></label>
                    <div class="controls col-md-8 col-lg-4 "  style="margin-bottom: 10px">
                     <input type="file" name="photo" class="file require" id="photo"   multiple >
                    </div>
                        <input type="text" class="form require" hidden name="stock_added_by" value="{{$uid}}">
                    <div class="form-group"> 
                        <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 " style="margin-bottom: 40px">
                            <input type="submit" name="addproduct" value="Add Product" class="btn btn-primary btn btn-info" id="saveBtn" /></div>
                    </div> 

                </form>    
            </div>
        </div>   
    </div>
</div>   

@section('script')
    <script src="{{asset('assets/js/scripts/script.js')}}"></script>
@endsection

@stop