<?php
/**
 * Created by PhpStorm.
 * User: Yao
 * Date: 2018/11/19
 * Time: 20:47
 */
?>
@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-md-8">
            <h1 class="h3">{{ __('Roles') }}</h1>
        </div>
        <div class="col-md-4 text-right"> 
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <a href="{{ route('roles.create') }}" class="btn btn-outline-secondary btn-sm">{{ __('Add Role') }}</a>
                    <a href="{{ route('permissions.index') }}" class="btn btn-outline-secondary btn-sm">{{ __('Permissions') }}</a>
                </div>
        </div>

        <div class="col-md-12">
            
            <hr>

            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Display Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->description }}</td>
                        <td style="padding:8px; text-align: right;">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-secondary">{{ __('Edit')
                                    }}</a>
                                <a href="{{ route('roles.destroy', $role->id) }}" class="btn btn-secondary">{{
                                    __('Delete') }}</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
    var app = new Vue({
        el: "#app",
        data: {}
    });
</script>
@endsection