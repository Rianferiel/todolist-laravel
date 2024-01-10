@extends('layout/aplikasi')

@section('konten')
<div class="container">
    <h1 class="text-warning text-center mb-4">TO DO LIST</h1>
    <form action="{{url('todo')}}" method="POST" class="d-flex">
        @csrf
        <input type="text" name="todo" class="form-control" value="" placeholder="Enter your to do list">
        <button class="btn btn-warning" type="submit">Add</button>
    </form>
    
    <table class="table table-bordered text-white mt-5">
        <thead class="bg-warning text-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col" class="w-50">Todo</th>
            <th scope="col" class="w-25">Is Done</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1?>
            @foreach ($data as $item)
            <tr>
                <th>{{$i}}</th>
                <td>{{$item -> todo}}</td>
                <td>{{$item -> is_done ? 'Done' : 'Not Done' }}</td>
                <td class="">
                    <a class="btn btn-secondary btn-sm" href="{{url('/todo/'.$item->id.'/edit')}}">Edit</a>
                    <form onSubmit="return confirm('Yakin mau hapus data?')" action="{{'/todo/'.$item->id}}" class="d-inline" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>
            <?php $i++?>  
            @endforeach
        </tbody>
    </table>
   {{-- {{dd($data)}} --}}
</div>
    
@endsection