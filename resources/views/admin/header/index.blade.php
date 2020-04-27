@extends('layouts/provisoir')

@section('content')
    <div class="container ">
        <h1 style="margin-bottom:40px" class="bg-danger text-center">
            Je suis index Header
        </h1>
    <div>
    @foreach ($header as $headers)
        
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Logo</th>
            <th scope="col">Img</th>
            <th scope="col">Img2</th>
            <th scope="col">Paragraphe</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>{{$headers->logo}}</td>
            <td>{{$headers->img}}</td>
            <td>{{$headers->img2}}</td>
            <td>{{$headers->paragraphe}}</td>
        </tr>

        </tr>
        </tbody>

        {{-- tableau --}}
    <table class="table table-striped">
        <thead>
        <tr class="">
            <th scope="col">#</th>
            <th scope="col">Logo</th>
            <th scope="col">Img</th>
            <th scope="col">Img2</th>
            <th scope="col">Paragraphe</th>
            <th scope="col">Action</th>

        </tr>
        </thead>
    <form action="{{route("updateHeader", $headers->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <tbody>
       
                <tr>
    
                    <th scope="row">1</th>
                    <td><input placeholder="{{$headers->logo}}" type="text" name="logo"></td>
                    <td><input type="text" placeholder="{{$headers->img}}" name="img"></td>
                    <td><input placeholder="{{$headers->img2}}" type="text" name="img2"></td>
                    <td> <input placeholder="{{$headers->paragraphe}}" type="text" name="paragraphe"></td>
                    <td><button class="btn btn-primary" type="submit">submit</button></td>
    
                </tr>
    
            </tbody>
        </form>
    </table>
{{-- tableau --}}

    </table>
    @endforeach

    </div>
    </div>
@endsection