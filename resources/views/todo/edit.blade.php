@extends('layout/aplikasi')

@section('konten')
<div class="container w-50 border border-warning rounded">
    <h1 class="text-warning text-center mb-4 mt-4">TO DO LIST</h1>
    <form action="{{'/todo/'.$data->id}}" method="POST" class="">
        @csrf
        @method('PUT')
        <input type="text" name="todo" class="form-control mb-4" value="{{$data->todo}}">
        <div class="form-group text-white mb-4">
            <label class="control-label"><b>Is Done?</b></label>
            <div class="radio">
                <label>
                    <input type="radio" value="1" name="is_done"> Done
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" value="0" name="is_done"> Not Done
                </label>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-warning w-50 center mb-4" type="submit">Add</button>
        </div>
        
    </form>
    
</div>
@endsection