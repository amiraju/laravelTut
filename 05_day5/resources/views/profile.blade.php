@extends('layout')
@section('content')

  <p>Page Name:{{ $data['page_name'] }}</p>
  <p>Description:{{ $data['contents'] }}</p>




{{-- {{ $name }} --}}
    {{-- <p>This is prfile Id:</p>
    <p>Name:</p> --}}


@endsection

@section('script')
<script src="page.js"></script>
@endsection
