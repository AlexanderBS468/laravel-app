@extends('layouts.app')

<?php
$mainTitle = 'Main';
?>
@section('title-head')<?=$mainTitle?>@endsection

@section('content')
    <h1>Main</h1>
@endsection

@section('aside')
    @parent
    <p>Additional text</p>
@endsection
