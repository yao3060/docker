<?php
/**
 * Created by PhpStorm.
 * User: Yao
 * Date: 2018/11/19
 * Time: 21:31
 */
?>

@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

            <div class="col-md-8">
                    <h1 class="h3">{{ __('New Role') }}</h1>
                </div>
                <div class="col-md-4">
                    <div class="text-right"><a href="{{ route('roles.index') }}" class="btn btn-outline-secondary btn-sm">{{ __('Roles') }}</a></div>
                </div>
                

        <div class="col-md-12">

                <hr>


                    
                    <form action="{{route('roles.store')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="content">
                                    <p class="h5">Role Details:</p>
                                    <div class="field">
                                            <div class="form-group">
                                            <label for="display_name" class="label">Name (Human Readable)</label>
                                            <input type="text" class="form-control" name="display_name" value="{{old('display_name')}}" id="display_name">
                                            </div>
                                    </div>
                                    <div class="field">
                                        <p class="form-group">
                                            <label for="name" class="label">Slug (Can not be changed)</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name">
                                        </p>
                                    </div>
                                    <div class="field">
                                        <p class="form-group">
                                            <label for="description" class="label">Description</label>
                                            <input type="text" class="form-control" value="{{old('description')}}" id="description" name="description">
                                        </p>
                                    </div>
                                    <input type="hidden" :value="permissionsSelected" name="permissions" >
                                </div>
                
                            </div>
        
                            <div class="col-md-6">
                                <div class="box">
                                    <article class="media">
                                        <div class="media-content">
                                            <div class="content">
                                                    <p class="h5">Permissions:</p>
                                                    <b-form-group>
                                                            <b-form-checkbox-group stacked 
                                                            v-model="permissionsSelected" 
                                                            name="permissionsSelected" 
                                                            :options="options" />
                                                    </b-form-group>
                                            </div>
                                        </div>
                                    </article>
                                </div> <!-- end of .box -->

                                
                            </div>

                            <div class="col-md-12">
                                    <button class="btn btn-primary">Create new Role</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
</div>
@endsection

@section('scripts')
<?php
$new_permissions = [];
foreach ($permissions as $permission) {
    $new_permissions[] = [
        'text' => $permission->display_name . ' ('. $permission->description .')',
        'value' => $permission->id
    ];
}
?>
<script>
    var app = new Vue({
        el: "#app",
        data: {
            permissionsSelected: [],
            options: <?php echo json_encode($new_permissions);?>
        }
    });
</script>
@endsection