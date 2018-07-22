@extends('client::index')
@section('component')
    <div>
        <button>
            <a href="{{route('createProduct')}}">Dodaj nowy</a>
        </button>
        <button>
            <a href="{{route('available')}}">Lista Dostępnych Produktów</a>
        </button>
        <button>
            <a href="{{route('unavailable')}}">Lista niedostępnych Produktów</a>
        </button>
        <button>
            <a href="{{route('graterThen').'?gt=5'}}">Lista produktów w ilosci większej od 5</a>
        </button>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AMOUNT</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>
                        <a href="{{route('single', ['id'=>$product->id])}}">{{$product->name}}</a>
                    </td>
                    <td>{{$product->amount}}</td>
                    <td>
                        <a href="{{route('removeProduct', ['id'=>$product->id])}}">USUŃ</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection