@extends('admin.Layout.layout');
@section('content');
<table class="table">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Category Name</th>
            <th>Parent Category Name</th>
            <th>Create Data</th>

        </tr>
    </thead>
    <tbody>
      
    <tr>
    @foreach($categories as $key=>$categorie)
        <td>{{$key+1}}</td>
        <td>{{$categorie->name}}</td>
        <td>
            @if($categorie->category_id)
             {{$categorie->parent->name}}
            @else
            No parent category
            @endif
        </td>
        <td>{{$categorie->created_at}}</td>
        
    </tr>
    @endforeach
    </tbody>
</table>



@endsection;