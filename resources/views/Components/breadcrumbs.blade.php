<div class="container mx-auto px-10">
    <div class="text-sm breadcrumbs text-white">
        <ul>
            <li>About Us</li>
            <x-breadcrumbs-link href="/fact_sheet" :active="request()->is('fact_sheet')">Fact Sheet</x-breadcrumbs-link>
            <x-breadcrumbs-link href="/history" :active="request()->is('history')">History</x-breadcrumbs-link>
            <x-breadcrumbs-link href="/vision_mission" :active="request()->is('vision_mission')">Vision and Mision</x-breadcrumbs-link>
            <x-breadcrumbs-link href="/house_rules" :active="request()->is('house_rules')">House Rules</x-breadcrumbs-link>
            <x-breadcrumbs-link href="/manual" :active="request()->is('manual')">Manual on Corporate
                Governance</x-breadcrumbs-link>
            <x-breadcrumbs-link href="/board" :active="request()->is('board')">Board of Directors</x-breadcrumbs-link>
            <x-breadcrumbs-link href="/management_team" :active="request()->is('management_team')">Management Teams</x-breadcrumbs-link>
        </ul>
    </div>
</div>
