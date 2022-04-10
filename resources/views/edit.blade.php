@extends('layouts.master')

@section('heading')
    <h3>Edit Item</h3>
@endsection

@section('content')
    <section>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{ route('item.update', $items->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $items->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Stok</label>
                                <input type="number" name="quantity" class="form-control"
                                    value="{{ $items->quantity }}">
                            </div>

                        </div>
                        <button type=" submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
