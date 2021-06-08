@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th scope="col">{{__('Surname')}}</th>
                            <th scope="col">{{__('Email')}}</th>
                            <th scope="col">{{__('Phone number')}}</th>
                            <th scope="col">{{__('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->surname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>
                            <button class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">X</button>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
@push('javascript')
<script>
const deleteurl = "{{ url('users') }}/";
</script>
@endpush
@push('js-files')
<script src="{{ asset('js/delete.js') }}"></script>
@endpush