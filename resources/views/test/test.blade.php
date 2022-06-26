
{{-- レイアウトの継承 --}}
@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    Index Page
@endsection

@section('content')
    <p>This is a body part.</p>
    
    <ul>
        @each('components.item', $data, 'item')
    </ul>
    
    {{--
    <p>You can write anything in this space.</p>
    
    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot
        
        @slot('msg_content')
        This is a displayed message.
        @endslot
    @endcomponent
    --}}
    
@endsection

@section('footer')
    copyright 2020 tuyono.
@endsection