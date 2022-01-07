<?php

$fieldsForm = [
    'name' => [
        'id' => 'name',
        'name' => 'name',
        'type' => 'text',
        'label' => 'Enter a name',
        'placeholder' => 'Enter a name',
    ],
    'email' => [
        'id' => 'email',
        'name' => 'name',
        'type' => 'text',
        'label' => 'email',
        'placeholder' => 'Enter email',
    ],
    'subject' => [
        'id' => 'subject',
        'name' => 'subject',
        'type' => 'text',
        'label' => 'Subject of the email',
        'placeholder' => 'Enter the email subject',
    ],
    'message' => [
        'id' => 'message',
        'name' => 'message',
        'type' => 'textarea',
        'label' => 'Subject of the email',
        'placeholder' => 'Enter the email subject',
    ]
];

?>
<form action="{{ route('contact-form') }}" method="post">
    @csrf

    @foreach ($fieldsForm as $name => $field)
        <div class="form-group">
            <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
            @switch($field['type'])
                @case('text')
                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}" class="form-control">
                    @break
                @case('textarea')
                    <textarea name="{{ $field['name'] }}" id="{{ $field['id'] }}" placeholder="{{ $field['placeholder'] }}" class="form-control"></textarea>
                    @break
            @endswitch
        </div>
    @endforeach

    <button type="submit" class="btn btn-success">Send</button>
</form>
