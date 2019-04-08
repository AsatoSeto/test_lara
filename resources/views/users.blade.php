@extends('layouts.app')

@section('content')
   <div class="container">
    <table class="table " >
        <thead class="thead-dark">               
            <th>login</th>
            <th>role</th>                    
            <th></th>                                        
            <th></th>                                        
        </thead>                    
        <tbody  >
            <div class="table-container">
                <div id="cone"> 
                </div>
                @foreach ($users as $us) 
                    <tr>
                        <td>{{$us->name}}</td>
                        <td>{{$us->role}}</td>
                        <td>
                            <form action="{{ url('/'.$us->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <button type="submit" class="btn btn-succes">
                                    <i class="fa fa-btn fa-trash"></i>edit user role
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ url('/'.$us->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach     
            </div>
        </tbody>
    </table>
    </div>      

@endsection
