@extends('layouts.app')

<?php
$mainTitle = 'Contacts';
?>
@section('title-head')<?=$mainTitle?>@endsection

@section('content')
    <h1>Contacts</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid distinctio earum, explicabo fuga, hic laborum quae reiciendis repudiandae tempore, temporibus velit voluptate. Beatae consequuntur cumque dolores explicabo harum impedit itaque laborum neque, nostrum omnis perspiciatis placeat quidem quod sapiente sed, tempore voluptas. Aspernatur aut beatae delectus dignissimos fugiat harum impedit iste, magni nisi, nulla quaerat quisquam, quod repellat sapiente tenetur unde voluptatibus. Accusantium aliquid, asperiores culpa deleniti dolores est fugit illo itaque mollitia nam natus nemo, neque nulla, numquam perspiciatis placeat repellat voluptatum. Aspernatur blanditiis consectetur dignissimos exercitationem facere illum laborum quibusdam quisquam, repellendus sed sequi sunt tenetur. Debitis iure modi ut! Adipisci amet doloribus et ipsa molestias necessitatibus quod temporibus voluptatum. Adipisci alias atque aut consectetur culpa deserunt dolorem eius illo incidunt libero magni modi nemo nesciunt nisi, non perferendis possimus quia quidem sit tenetur totam velit veniam vero. Atque deleniti eligendi facere harum magnam quaerat rerum sequi veritatis!
    </p>

    <div class="album py-5 bg-light">
        <div class="container">
            @include('layouts.forms.contacts')
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Container about us</h2>
            <div>May be map....</div>
        </div>
    </div>
@endsection

@section('aside')
    @parent
    <p>Additional text</p>
@endsection
