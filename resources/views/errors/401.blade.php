@extends('errors::minimal')

@section('title', __('Error 401'))
@section('code', '401')
@section('message', __('Anda tidak memiliki izin untuk mengakses halaman ini'))