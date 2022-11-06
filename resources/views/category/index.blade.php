@extends('app')

@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th class="white-space-nowrap" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $cat)
        <tr>
            <th scope="row">{{ ++$loop->index }}</th>
            <td>{{$cat->category}}</td>
            <td><img width="50px" src="{{asset('public/uploads/category/'.$cat->image)}}" alt=""></td>
            <td class="white-space-nowrap">
                <a href="{{route('category.edit',$cat->id)}}">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="javascript:void()" onclick="$('#form{{$cat->id}}').submit()">
                    <i class="fas fa-trash"></i>
                </a>
                <form id="form{{$cat->id}}" action="{{route('category.destroy',$cat->id)}}" method="post">
                    @csrf
                    @method('delete')
                    
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <th colspan="4">No Category Found</th>
        </tr>
    @endforelse
  </tbody>
</table>


@endsection