@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('contact.create')}}" class="btn btn-success">新規登録</a>
                    <br>
                    @foreach($contacts as $contact)
                    {{ $contact->id}}
                    {{$contact->your_name}}
                    {{$contact->title}}
                    {{$contact->created_at}}
                    <br>
                    <h3><a href="{{ route('contact.show', ['id' => $contact->id ]) }}">詳細</a></h3>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
