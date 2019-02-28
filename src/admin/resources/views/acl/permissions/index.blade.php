<?php
/**
 * Created by PhpStorm.
 * User: Yao
 * Date: 2018/11/19
 * Time: 12:55
 */
?>
@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1 class="title">Permissions</h1>
            </div>
            <div class="col-md-4 text-right">
               
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary ">{{ __('Roles') }}</a>
                    <a href="{{ route('permissions.index') }}" class="btn btn-outline-secondary ">{{ __('Permissions') }}</a>
                    <a href="{{ route('permissions.create') }}" class="btn btn-outline-secondary">{{ __('Add Permissions') }}</a>
                </div>
            </div>
     
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Display Name</th>
                        <th>slug</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->display_name }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->description }}</td>
                            <td style="text-align:right; padding:8px">
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-outline-secondary">Show</a>
                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-outline-secondary">Edit</a>
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