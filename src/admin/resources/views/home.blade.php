@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!

                    <hr>

                    <?php

$svgIcons = file_get_contents(resource_path('sass/octicons-data.json'));

// print_r(json_decode($svgIcons));die;

foreach (json_decode($svgIcons) as $icon) {
    echo '<span style="padding: 8px; display: inline-block;">
            <svg height="32" class="octicon octicon-' . $icon->name . '" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">' . $icon->path . '</svg>
         </span>';
}
?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection