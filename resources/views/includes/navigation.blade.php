<?php

use \Illuminate\Support\Facades\Request;

$navigation = [
    [
        'name' => 'Main',
        'selected' => false,
        'link' => route('main')
    ],
    [
        'name' => 'About us',
        'selected' => false,
        'link' => route('about')
    ],
    [
        'name' => 'Contacts',
        'selected' => false,
        'link' => route('contacts')
    ],
];

$url = Request::getFacadeRoot()->url();

$selected = array_search($url, array_column($navigation,'link'));
$navigation[$selected]['selected'] = true;
?>

<h4 class="text-white">Site map</h4>
<ul class="list-unstyled">
    @foreach ($navigation as $key => $item)
        <li><a href="{{ $item['link'] }}" class="text-white {{ ($item['selected'] ? 'selected' : '') }}">{{ $item['name'] }}</a></li>
    @endforeach
</ul>
