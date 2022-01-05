@extends('layouts.app')

<?php
$mainTitle = 'Main';

$itemsCount = 30;
?>
@section('title-head')<?=$mainTitle?>@endsection

@section('content')

    <div class="row g-3">
        <h1>Main</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid distinctio earum, explicabo fuga, hic laborum quae reiciendis repudiandae tempore, temporibus velit voluptate. Beatae consequuntur cumque dolores explicabo harum impedit itaque laborum neque, nostrum omnis perspiciatis placeat quidem quod sapiente sed, tempore voluptas. Aspernatur aut beatae delectus dignissimos fugiat harum impedit iste, magni nisi, nulla quaerat quisquam, quod repellat sapiente tenetur unde voluptatibus. Accusantium aliquid, asperiores culpa deleniti dolores est fugit illo itaque mollitia nam natus nemo, neque nulla, numquam perspiciatis placeat repellat voluptatum. Aspernatur blanditiis consectetur dignissimos exercitationem facere illum laborum quibusdam quisquam, repellendus sed sequi sunt tenetur. Debitis iure modi ut! Adipisci amet doloribus et ipsa molestias necessitatibus quod temporibus voluptatum. Adipisci alias atque aut consectetur culpa deserunt dolorem eius illo incidunt libero magni modi nemo nesciunt nisi, non perferendis possimus quia quidem sit tenetur totam velit veniam vero. Atque deleniti eligendi facere harum magnam quaerat rerum sequi veritatis!
        </p>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-5">

        @for ($i = 0; $i < $itemsCount; $i++)
            <div class="col" id="item_{{$i}}">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted"><?=rand(3, 16)?> mins</small>
                        </div>
                    </div>
                </div>
            </div>
        @endfor

    </div>
@endsection

@section('aside')
    @parent
    <p>Additional text</p>
@endsection
