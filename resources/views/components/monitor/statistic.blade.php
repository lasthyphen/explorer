<div class="flex flex-col md:flex-row">
    <div class="items-center hidden md:flex">
        <div class="circled-icon text-theme-secondary-400 border-theme-danger-400">
            {{ $logo }}
        </div>
    </div>

    <div class="flex flex-col justify-between flex-1 font-semibold md:ml-4">
        <div class="text-sm leading-tight text-theme-secondary-600 dark:text-theme-secondary-700">
            {{ $title }}
        </div>

        <div class="flex items-center space-x-2 leading-tight">
            <span class="truncate text-theme-secondary-400 dark:text-theme-secondary-200">
                {{ $slot }}
            </span>
        </div>
    </div>
</div>
