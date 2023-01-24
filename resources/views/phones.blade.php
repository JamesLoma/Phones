@extends('layout.layout')
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   Phone List
                </div>
               
                @foreach($phones as $phones)
                    <div>
                        {{ $phones ['type'] }} - {{ $phones ['base'] }}
                    </div>
                @endforeach
            </div>
        </div>
@endsection