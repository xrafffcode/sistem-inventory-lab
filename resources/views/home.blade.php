@extends('layouts.master')

@section('heading')
    <h3>Dashboard</h3>
@endsection

@section('content')
    <section>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{ route('item.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" placeholder="Komputer">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Stok</label>
                                <input type="number" name="quantity" class="form-control" placeholder="2">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Invetory
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $i => $item)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ asset('image_item/' . $item->image) }}" alt="{{ $item->name }}"
                                        width="100">
                                </td>
                                <td>{{ $item->quantity }}</td>
                                <td width="180">
                                    <a href="{{ route('item.edit', $item->id) }}">
                                        <button class="btn btn-success">Edit</button>
                                    </a>
                                    <a href="/delete_item/{{ $item->id }}"><button
                                            class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
