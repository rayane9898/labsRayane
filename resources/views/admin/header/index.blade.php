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
   
    <form action="{{route("updateHeader", $headers->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
           
    
               
                        <label for="exampleFormControlFile1">logo</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="logo">
                 
                          <label for="exampleFormControlFile1">img</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
               
                
                        <label for="exampleFormControlFile1">img2</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img2">
              

                        <input placeholder="{{$headers->paragraphe}}" type="text" name="paragraphe">
                        <button class="btn btn-primary" type="submit">submit</button>
    

    
        </form>
{{-- tableau --}}


    @endforeach

    </div>
    </div>
@endsection