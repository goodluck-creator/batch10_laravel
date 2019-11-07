@extends('template')
@section('content')
	<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Category Item</small>
        </h1>
        <div class="table-responsive">
          <table class="table table-bordered"cellspacing="0" cellpadding="10">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
              <tbody>
                @php 
                $i=1;
                @endphp
                @foreach($categories as $row)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$row->name}}</td>
                  <td><a href="{{route('category.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                  <td>
                    <form method="post" action="{{route('category.destroy',$row->id)}}">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
          
          </table>
        </div>
        
        
      </div>

      
      </div>

    </div>
@endsection