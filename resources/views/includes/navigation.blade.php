<?php

use \Illuminate\Support\Facades\Request;

$navigation = [
    '/' => [
        'name' => 'Main',
        'selected' => false,
    ],
    'about' => [
        'name' => 'About us',
        'selected' => false,
    ],
    'contacts' => [
        'name' => 'Contacts',
        'selected' => false,
    ],
];

$request = Request::getFacadeRoot();
$uri = $request->path();

if (isset($navigation[$uri]) && !empty($navigation[$uri]))
{
    $navigation[$uri]['selected'] = true;
}

?>

<h4 class="text-white">Site map</h4>
<ul class="list-unstyled">
    @foreach ($navigation as $link => $item)
        <li><a href="{{ $link }}" class="text-white {{ ($item['selected'] ? 'selected' : '') }}">{{ $item['name'] }}</a></li>
    @endforeach
</ul>
