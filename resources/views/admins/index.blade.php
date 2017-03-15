@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <h1>Users</h1>
    <hr>

    @forelse($users as $user)
        <h4>{{{$user->name}}}</h4>
        
            
        <p>{{{$user->email}}}</p>
        <p>{{{$user->thoughts}}}</p>
            

        <p>{{$user->isAdmin() ? 'User is admin.' : 'User is not admin.' }}</p>

        

        <table>
        <tr>
        @if ($user->isAdmin())
            <td>
                <form action="{{ url('/admin/' .$user->id . '/removeadmin') }}" method="post">
                    {{csrf_field()}}
                    
                    <button type="submit" class="btn btn-primary btn-xs">Remove admin status</button>
                </form>
            </td>
        @else
            <td>
                <form action="{{ url('/admin/' .$user->id . '/makeadmin') }}" method="post">
                    {{csrf_field()}}
                    
                    <button type="submit" class="btn btn-primary btn-xs">Make user admin</button>
                </form>
            </td>
        @endif

            <td style="padding-left: 0.6em">
                <form action="{{ url('/admin/' .$user->id . '/deleteuser') }}" method="post">
                    {{csrf_field()}}
                    
                    <button type="submit" class="btn btn-danger btn-xs">Delete user</button>
                </form>
            </td>

        </tr>
        </table>

        
        <hr>

       
    @empty
        <p class="lead">Wut there are no users y r u here???</p>
    @endforelse

</div>



@endsection