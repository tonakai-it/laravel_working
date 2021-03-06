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

                    showです
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $gender }}
                    {{ $age }}
                    {{ $contact->contact }}
                    <form method="GET" action="{{route('contact.edit' , ['id' => $contact->id])}}">
                    @csrf
                
                    <input type="submit" class="btn btn-info" name="btn_confirm" value="変更する">
                    </form>
                    <form method="POST" action="{{route('contact.destroy' , ['id' => $contact->id])}}">
                    @csrf
                    <input type="submit" class="btn btn-danger" name="btn_confirm" value="削除する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
