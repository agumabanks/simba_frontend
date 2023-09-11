<!--<div>-->
<!--    {{-- The best athlete wants his opponent at his best. --}}-->
<!--    <div>-->
<!--    <input wire:model="search" type="search" placeholder="Search ticket by id...">-->
 
<!--    <h1>Search Results:</h1>-->
 
<!--    <ul>-->
<!--    </ul>-->
<!--</div>-->
<!--</div>-->
<div>
    <input type="text" wire:model="search">
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>