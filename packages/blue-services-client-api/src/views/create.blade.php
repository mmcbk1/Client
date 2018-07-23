@extends('client::index')
@section('component')
    <div>
        <form method="post" action="{{route('store')}}">

            <h2>Dodaj produkt</h2>

            <div class="form-group">
                <div>
                    <label>Nazwa</label>
                </div>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <div>
                    <label>Ilość</label>
                </div>
                <input class="form-control" type="text" name="amount">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Zapisz</button>
            </div>
        </form>

    </div>
@endsection