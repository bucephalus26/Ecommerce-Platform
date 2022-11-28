@extends('layouts.adminwindow')

@section('title', 'Show Message: '.$data->title)

@section('content')    

   <!-- Main content -->
   <section class="content">
   <div class="card">
              <div class="card-header">
                <h3 class="card-title">Messages</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                    <tr>
                      <th style="width: 200px">Id</th>
                      <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                      <th>Name</th>
                      <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                      <th>Phone No.</th>
                      <td>{{$data->phone}}</td>
                    </tr>
                    <tr>
                      <th>Message</th>
                      <td>{{$data->message}}</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>{{$data->status}}</td>
                    </tr>
                    <tr>
                      <th>Create Date</th>
                      <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                      <th>Update Date</th>
                      <td>{{$data->updated_at}}</td>
                    </tr>
                    <tr>
                      <th>Reply</th>
                      <td>
                        <form role="form" action="{{route('admin.message.update', ['id'=>$data->id])}}" method="post">
                        @csrf
                        <textarea id="note" name="note" cols="120" rows="5">{{$data->note}}</textarea>
                            <div class ="card-footer">
                              <button type="submit" class="btn btn-primary">Update Reply</button>
                            </div>
                        </form>
                        </td>
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</section>
<!-- /.content -->

@endsection