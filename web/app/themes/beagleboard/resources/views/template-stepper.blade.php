{{--
  Template Name: Stepper Template
--}}

@extends('layouts.app')

@php $book_list=$books_gettingstarted; @endphp

@section('header')
  @include('partials.entry-meta')
@endsection

@section('content')
  @include('partials.content-page-stepper')
@endsection
