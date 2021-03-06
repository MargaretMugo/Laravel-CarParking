@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

        <div >
          <p><a class="back" href="{{route('home')}}">Back</a></p>
        </div>

        
  
        

          <table class="">
            <thead>
                <tr>
                  <td>ID</td>
                  <td>Car Brand  </td>
                  <td>Car Plate  </td>
                  <td>Car Make   </td>
                  <td  colspan="2">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($cars_display as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->car_brand}}</td>
                    <td>{{$car->car_plate}}</td>
                    <td>{{$car->car_make}}</td>
                    <td class="outlined"><a href="{{ route('cars.edit', $car->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('cars.destroy', $car->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="delete" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    
  
<div>
@endsection