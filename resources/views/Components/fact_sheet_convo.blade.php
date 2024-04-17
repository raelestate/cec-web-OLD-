<div class="chat chat-start">
    <div class="chat-image avatar">
        <div class="w-10 rounded-full">
            <img alt="Tailwind CSS chat bubble component"
                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
    </div>
    <div class="chat-header">
        @isset($attributes['name1'])
            {{ $attributes['name1'] }}
        @endisset
    </div>
    <div class="chat-bubble">
        @isset($attributes['convo1'])
            {{ $attributes['convo1'] }}
        @endisset
    </div>
    <div class="chat-footer opacity-50">
        Delivered
    </div>
</div>
<div class="chat chat-end">
    <div class="chat-image avatar">
        <div class="w-10 rounded-full">
            <img alt="Tailwind CSS chat bubble component"
                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
    </div>
    <div class="chat-header">
        Anakin
        <time class="text-xs opacity-50">12:46</time>
    </div>
    <div class="chat-bubble">I hate you!</div>
    <div class="chat-footer opacity-50">
        Seen at 12:46
    </div>
</div>
