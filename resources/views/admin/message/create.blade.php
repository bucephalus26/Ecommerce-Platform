@extends('layouts.adminbase')

@section('title', 'Add Product')

@section('content')    

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
   <section class="content">
   <div class="card card-primary">
              <div class="card-header">Product Elements</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role ="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="card-body">
                  
                  <!-- Main category selection -->
                  <div class="form-group">
                    <label>Parent Product</label>

                    <select class="form-control select2" name="category_id" style="width: 100%;">
                      <!-- Select other categories using getParentsTree function-->
                      @foreach($data as $rs)
                        <option value="{{ $rs->id }}">{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Keywords</label>
                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description">
                  </div>

                   <!-- Attribute selection -->
                  @php
                    $attributeOptions = \App\Models\Attribute::with('values')->get();
                  @endphp

                  @foreach($attributeOptions as $attr)

               
                  <div class="form-group">
                    <label for="">{{$attr->name}} :</label>
                    <select class="form-control" name = "product_attributes[{{$attr->name}}]">
                    <option value=""></option>
                      @foreach ($attr->values as $val)
                      <option>{{$val->value}}</option>
                      @endforeach
                    </select>
                  </div>

                  @endforeach

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" name="price" value="0">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="tenumberxt" class="form-control" name="quantity" value="0">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Minimum Quantity</label>
                    <input type="tenumberxt" class="form-control" name="minquantity" value="0">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Details</label>
                    <textarea class="form-control" name="detail"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                      </div>

                    </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          <option>True</option>
                          <option>False</option>
                        </select>
                      </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection