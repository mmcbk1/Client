@extends('client::index')
@section('component')
    <div>
        <form method="post" action="{{route('update', ['id'=>$product->id])}}">
            {{method_field('put')}}
            <h2>Product {{$product->name}}</h2>
            <div class="form-group">
                <input class="form-control" type="hidden" name="id" value="{{$product->id}}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="amount" value="{{$product->amount}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Aktualizuj</button>
            </div>
        </form>

    </div>
@endsection