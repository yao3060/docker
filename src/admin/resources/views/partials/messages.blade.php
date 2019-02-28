<?php
/**
 * Created by PhpStorm.
 * User: Yao
 * Date: 2018/11/21
 * Time: 20:49
 */
?>

@if (Session::has('success'))
<div class="container-fluid">
    <b-alert show dismissible>
            <strong>Success:</strong> {{ Session::get('success') }}
    </b-alert>
</div>
@endif

@if (count($errors) > 0)
<div class="container-fluid">
    <b-alert show variant="danger" dismissible>
            <strong>Errors:</strong> 
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
    </b-alert>
</div>
@endif