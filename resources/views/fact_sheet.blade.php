@php
    $conversations = [
        'user1' => [
            'name' => 'User 1',
            'convo' => 'Conversation for User 1...',
        ],
        'user2' => [
            'name' => 'User 2',
            'convo' => 'Conversation for User 2...',
        ],
    ];
@endphp

<x-layout>
    <x-slot name="heading">
        <x-breadcrumbs></x-breadcrumbs>
    </x-slot>

    <h1>Fact Sheet</h1>

</x-layout>
