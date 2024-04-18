@extends('layout.layout')

@section('title', 'main')

@section('navbar')
    <div class="navbar">

        <div class="logo">
            <a href="">Logo</a>
        </div>

        <div class="menu">
            <a href="{{route('registrationPage')}}">Registrasi</a>
            <a href="">Edit</a>
            <a href="login">Hi {{auth()->user()->name}}</a>
        </div>
    </div>
@endsection

@section('content')
    <table>
        <tr>
            <th>NIM</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Telepon</th>
        </tr>

        <tr>
            @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>
                    {{-- {{ $row->foto }} --}}
                    @if ($row->foto)
                        <img src="{{asset('storage/' .$row->foto)}}" alt="" style="max-width: 50px">
                    @else
                        <p>tidak ada foto</p>
                    @endif
                </th>
                <td>{{ $row->name }}</th>
                <td>{{ $row->jurusan }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->telepon }}</td>
            </tr>
            @endforeach
            {{-- <td>
                <a href="/delete/{{ $row->id }}" type="button" class="btn btn-danger">Delete</a>
                <a href="/koleksiView/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
            </td> --}}
        </tr>

    </table>
@endsection

@section('footer')
    <p>footer</p>
@endsection
