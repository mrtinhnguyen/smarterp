<div class="fi-topbar-ctn">
    @php
        $navigation = filament()->getNavigation();
        $isRtl = __('filament-panels::layout.direction') === 'rtl';
        $isSidebarCollapsibleOnDesktop = filament()->isSidebarCollapsibleOnDesktop();
        $isSidebarFullyCollapsibleOnDesktop = filament()->isSidebarFullyCollapsibleOnDesktop();
        $hasTopNavigation = filament()->hasTopNavigation();
        $hasNavigation = filament()->hasNavigation();
        $hasTenancy = filament()->hasTenancy();
        $isAdminPanel = filament()->getCurrentPanel()->getId() === 'admin';
    @endphp

    <nav class="fi-topbar">
        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::TOPBAR_START) }}

        @if ($hasNavigation)
            <x-filament::icon-button
                color="gray"
                :icon="\Filament\Support\Icons\Heroicon::OutlinedBars3"
                :icon-alias="\Filament\View\PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON"
                icon-size="lg"
                :label="__('filament-panels::layout.actions.sidebar.expand.label')"
                x-cloak
                x-data="{}"
                x-on:click="$store.sidebar.open()"
                x-show="! $store.sidebar.isOpen"
                class="fi-topbar-open-sidebar-btn"
            />

            <x-filament::icon-button
                color="gray"
                :icon="\Filament\Support\Icons\Heroicon::OutlinedXMark"
                :icon-alias="\Filament\View\PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON"
                icon-size="lg"
                :label="__('filament-panels::layout.actions.sidebar.collapse.label')"
                x-cloak
                x-data="{}"
                x-on:click="$store.sidebar.close()"
                x-show="$store.sidebar.isOpen"
                class="fi-topbar-close-sidebar-btn"
            />

            @if ($isAdminPanel)
                <x-filament::dropdown placement="bottom-start"  width="sm">
                    <x-slot name="trigger">  
                        <x-filament::icon-button
                            icon="icon-menu"
                        />
                    </x-slot>

                    <div class="grid grid-cols-3 gap-1 p-4" style="grid-template-columns: repeat(3, minmax(0, 1fr));">
                        @foreach ($navigation as $group)
                            @php
                                $itemUrl = $group->getItems()->first()->getUrl();
                            @endphp
                            <div
                                @class([
                                    'fi-topbar-item',
                                    'fi-active' => $group->isActive(),
                                ])
                            >
                                <a
                                    href="{{ $itemUrl }}"
                                    class="fi-topbar-item-btn flex flex-col items-center justify-center gap-2 rounded-lg p-4"
                                >
                                    <x-filament::icon
                                        :icon="$group->getIcon()"
                                        style="height: 64px; width: 64px"
                                    />

                                    {{ $group->getLabel() }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </x-filament::dropdown>
            @endif
        @endif

        <div class="fi-topbar-start" style="margin-right:0">
            @if ($isSidebarCollapsibleOnDesktop)
                <x-filament::icon-button
                    color="gray"
                    :icon="$isRtl ? \Filament\Support\Icons\Heroicon::OutlinedChevronLeft : \Filament\Support\Icons\Heroicon::OutlinedChevronRight"
                    {{-- @deprecated Use `PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL` instead of `PanelsIconAlias::SIDEBAR_EXPAND_BUTTON` for RTL. --}}
                    :icon-alias="
                        $isRtl
                        ? [
                            \Filament\View\PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL,
                            \Filament\View\PanelsIconAlias::SIDEBAR_EXPAND_BUTTON,
                        ]
                        : \Filament\View\PanelsIconAlias::SIDEBAR_EXPAND_BUTTON
                    "
                    icon-size="lg"
                    :label="__('filament-panels::layout.actions.sidebar.expand.label')"
                    x-cloak
                    x-data="{}"
                    x-on:click="$store.sidebar.open()"
                    x-show="! $store.sidebar.isOpen"
                    class="fi-topbar-open-collapse-sidebar-btn"
                />
            @endif

            @if ($isSidebarCollapsibleOnDesktop || $isSidebarFullyCollapsibleOnDesktop)
                <x-filament::icon-button
                    color="gray"
                    :icon="$isRtl ? \Filament\Support\Icons\Heroicon::OutlinedChevronRight : \Filament\Support\Icons\Heroicon::OutlinedChevronLeft"
                    {{-- @deprecated Use `PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL` instead of `PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON` for RTL. --}}
                    :icon-alias="
                        $isRtl
                        ? [
                            \Filament\View\PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL,
                            \Filament\View\PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON,
                        ]
                        : \Filament\View\PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON
                    "
                    icon-size="lg"
                    :label="__('filament-panels::layout.actions.sidebar.collapse.label')"
                    x-cloak
                    x-data="{}"
                    x-on:click="$store.sidebar.close()"
                    x-show="$store.sidebar.isOpen"
                    class="fi-topbar-close-collapse-sidebar-btn"
                />
            @endif

            {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::TOPBAR_LOGO_BEFORE) }}

            @if ($homeUrl = filament()->getHomeUrl())
                <a {{ \Filament\Support\generate_href_html($homeUrl) }}>
                    <x-filament-panels::logo />
                </a>
            @else
                <x-filament-panels::logo />
            @endif

            {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::TOPBAR_LOGO_AFTER) }}
        </div>

        @if ($hasTopNavigation || (! $hasNavigation))
            @if ($hasTenancy && filament()->hasTenantMenu())
                <x-filament-panels::tenant-menu />
            @endif

            @if ($hasNavigation)
                <ul class="fi-topbar-nav-groups">
                    @foreach ($navigation as $group)
                        @php
                            $groupLabel = $group->getLabel();
                            $groupExtraTopbarAttributeBag = $group->getExtraTopbarAttributeBag();
                            $isGroupActive = $group->isActive();
                            $groupIcon = $group->getIcon();

                            if ($isAdminPanel && ! $isGroupActive) {
                                continue;
                            }
                        @endphp

                        @if ($groupLabel)
                            @if ($isAdminPanel)
                                <p class="text-lg font-bold">
                                    {{ $groupLabel }}
                                </p>
                                
                                @foreach ($group->getItems() as $item)
                                    @php
                                        $isItemActive = $item->isActive();
                                        $itemActiveIcon = $item->getActiveIcon();
                                        $itemBadge = $item->getBadge();
                                        $itemBadgeColor = $item->getBadgeColor();
                                        $itemBadgeTooltip = $item->getBadgeTooltip();
                                        $itemIcon = $item->getIcon();
                                        $shouldItemOpenUrlInNewTab = $item->shouldOpenUrlInNewTab();
                                        $itemUrl = $item->getUrl();
                                    @endphp

                                    <x-filament-panels::topbar.item
                                        :active="$isItemActive"
                                        :active-icon="$itemActiveIcon"
                                        :badge="$itemBadge"
                                        :badge-color="$itemBadgeColor"
                                        :badge-tooltip="$itemBadgeTooltip"
                                        :icon="$itemIcon"
                                        :should-open-url-in-new-tab="$shouldItemOpenUrlInNewTab"
                                        :url="$itemUrl"
                                    >
                                        {{ $item->getLabel() }}
                                    </x-filament-panels::topbar.item>
                                @endforeach
                            @else
                                <x-filament::dropdown
                                    placement="bottom-start"
                                    teleport
                                    :attributes="\Filament\Support\prepare_inherited_attributes($groupExtraTopbarAttributeBag)"
                                >
                                    <x-slot name="trigger">
                                        <x-filament-panels::topbar.item
                                            :active="$isGroupActive"
                                            :icon="$groupIcon"
                                        >
                                            {{ $groupLabel }}
                                        </x-filament-panels::topbar.item>
                                    </x-slot>

                                    @php
                                        $lists = [];

                                        foreach ($group->getItems() as $item) {
                                            if ($childItems = $item->getChildItems()) {
                                                $lists[] = [
                                                    $item,
                                                    ...$childItems,
                                                ];
                                                $lists[] = [];

                                                continue;
                                            }

                                            if (empty($lists)) {
                                                $lists[] = [$item];

                                                continue;
                                            }

                                            $lists[count($lists) - 1][] = $item;
                                        }

                                        if (empty($lists[count($lists) - 1])) {
                                            array_pop($lists);
                                        }
                                    @endphp

                                    @foreach ($lists as $list)
                                        <x-filament::dropdown.list>
                                            @foreach ($list as $item)
                                                @php
                                                    $isItemActive = $item->isActive();
                                                    $itemBadge = $item->getBadge();
                                                    $itemBadgeColor = $item->getBadgeColor();
                                                    $itemBadgeTooltip = $item->getBadgeTooltip();
                                                    $itemUrl = $item->getUrl();
                                                    $itemIcon = $isItemActive ? ($item->getActiveIcon() ?? $item->getIcon()) : $item->getIcon();
                                                    $shouldItemOpenUrlInNewTab = $item->shouldOpenUrlInNewTab();
                                                @endphp

                                                <x-filament::dropdown.list.item
                                                    :badge="$itemBadge"
                                                    :badge-color="$itemBadgeColor"
                                                    :badge-tooltip="$itemBadgeTooltip"
                                                    :color="$isItemActive ? 'primary' : 'gray'"
                                                    :href="$itemUrl"
                                                    :icon="$itemIcon"
                                                    tag="a"
                                                    :target="$shouldItemOpenUrlInNewTab ? '_blank' : null"
                                                >
                                                    {{ $item->getLabel() }}
                                                </x-filament::dropdown.list.item>
                                            @endforeach
                                        </x-filament::dropdown.list>
                                    @endforeach
                                </x-filament::dropdown>
                            @endif
                        @else
                            @foreach ($group->getItems() as $item)
                                @php
                                    $isItemActive = $item->isActive();
                                    $itemActiveIcon = $item->getActiveIcon();
                                    $itemBadge = $item->getBadge();
                                    $itemBadgeColor = $item->getBadgeColor();
                                    $itemBadgeTooltip = $item->getBadgeTooltip();
                                    $itemIcon = $item->getIcon();
                                    $shouldItemOpenUrlInNewTab = $item->shouldOpenUrlInNewTab();
                                    $itemUrl = $item->getUrl();
                                @endphp

                                <x-filament-panels::topbar.item
                                    :active="$isItemActive"
                                    :active-icon="$itemActiveIcon"
                                    :badge="$itemBadge"
                                    :badge-color="$itemBadgeColor"
                                    :badge-tooltip="$itemBadgeTooltip"
                                    :icon="$itemIcon"
                                    :should-open-url-in-new-tab="$shouldItemOpenUrlInNewTab"
                                    :url="$itemUrl"
                                >
                                    {{ $item->getLabel() }}
                                </x-filament-panels::topbar.item>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            @endif
        @endif

        <div
            @if ($hasTenancy)
                x-persist="topbar.end.panel-{{ filament()->getId() }}.tenant-{{ filament()->getTenant()?->getKey() }}"
            @else
                x-persist="topbar.end.panel-{{ filament()->getId() }}"
            @endif
            class="fi-topbar-end"
        >
            {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::GLOBAL_SEARCH_BEFORE) }}

            @if (filament()->isGlobalSearchEnabled())
                @livewire(Filament\Livewire\GlobalSearch::class)
            @endif

            {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::GLOBAL_SEARCH_AFTER) }}

            @if (filament()->auth()->check())
                @if (filament()->hasDatabaseNotifications())
                    @livewire(Filament\Livewire\DatabaseNotifications::class, [
                        'lazy' => filament()->hasLazyLoadedDatabaseNotifications(),
                    ])
                @endif

                @if (filament()->hasUserMenu())
                    <x-filament-panels::user-menu />
                @endif
            @endif
        </div>

        {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::TOPBAR_END) }}
    </nav>

    <x-filament-actions::modals />
</div>

<script>
// Vietnamese UI Fixes - Enhanced Topbar and Navigation fixes
(function() {
    'use strict';

    // Enhanced fix for topbar positioning and navigation
    function fixTopbarAndNavigation() {
        const topbar = document.querySelector('.fi-topbar');
        const topbarCtn = document.querySelector('.fi-topbar-ctn');
        const navGroups = document.querySelector('.fi-topbar-nav-groups');
        const mainContent = document.querySelector('.fi-main');
        
        if (topbar) {
            // Ensure topbar is always at top: 0 with proper height
            topbar.style.top = '0px';
            topbar.style.position = 'fixed';
            topbar.style.zIndex = '1000';
            topbar.style.width = '100%';
            topbar.style.height = '64px';
            topbar.style.display = 'flex';
            topbar.style.alignItems = 'center';
            topbar.style.padding = '0 1rem';
            
            // Remove any negative top values
            if (topbar.style.top && topbar.style.top.includes('-')) {
                topbar.style.top = '0px';
            }
        }

        if (topbarCtn) {
            topbarCtn.style.position = 'relative';
            topbarCtn.style.top = '0px';
            topbarCtn.style.width = '100%';
            topbarCtn.style.height = '64px';
            topbarCtn.style.display = 'flex';
            topbarCtn.style.alignItems = 'center';
            topbarCtn.style.justifyContent = 'space-between';
        }

        if (navGroups) {
            navGroups.style.position = 'relative';
            navGroups.style.top = '0px';
            navGroups.style.display = 'flex';
            navGroups.style.alignItems = 'center';
            navGroups.style.gap = '0.5rem';
        }

        if (mainContent) {
            mainContent.style.marginTop = '10px';
            mainContent.style.paddingTop = '0';
            mainContent.style.paddingBottom = '0';
            mainContent.style.minHeight = 'calc(100vh - 64px)';
            mainContent.style.display = 'flex';
            mainContent.style.flexDirection = 'column';
        }

        // Fix dashboard content positioning
        const mainContentInner = document.querySelector('.fi-main-content');
        if (mainContentInner) {
            mainContentInner.style.flex = '1';
            mainContentInner.style.padding = '1.5rem';
            mainContentInner.style.margin = '0 auto';
            mainContentInner.style.maxWidth = '100%';
            mainContentInner.style.width = '100%';
        }

        // Fix dashboard title positioning
        const dashboardTitle = document.querySelector('.fi-main h1, .fi-main .fi-heading');
        if (dashboardTitle) {
            dashboardTitle.style.marginTop = '0';
            dashboardTitle.style.marginBottom = '10px';
            dashboardTitle.style.paddingTop = '10px';
        }

        // Fix navigation items
        const navItems = document.querySelectorAll('.fi-topbar-item');
        navItems.forEach(item => {
            item.style.position = 'relative';
            item.style.top = '0px';
            item.style.display = 'flex';
            item.style.alignItems = 'center';
            item.style.padding = '0.5rem 1rem';
            item.style.borderRadius = '8px';
            item.style.whiteSpace = 'nowrap';
            item.style.minHeight = '40px';
        });

        // Fix search input
        const searchInput = document.querySelector('.fi-topbar-search input');
        if (searchInput) {
            searchInput.style.minWidth = '200px';
            searchInput.style.maxWidth = '300px';
        }

        // Fix user menu
        const userMenu = document.querySelector('.fi-topbar-user-menu');
        if (userMenu) {
            userMenu.style.display = 'flex';
            userMenu.style.alignItems = 'center';
            userMenu.style.gap = '0.5rem';
        }

        // Fix missing icons in navigation
        fixMissingIcons();
    }

    // Fix missing icons in navigation
    function fixMissingIcons() {
        // Fix navigation items without icons
        const navItems = document.querySelectorAll('.fi-navigation-item, .fi-topbar-item');
        navItems.forEach(item => {
            const icon = item.querySelector('.fi-icon');
            if (!icon) {
                // Add fallback icon based on href or text content
                const href = item.getAttribute('href') || '';
                const text = item.textContent.toLowerCase().trim();
                
                let iconContent = ''; // default
                
                if (href.includes('projects') || text.includes('dự án') || text.includes('project')) {
                    iconContent = '';
                } else if (href.includes('inventory') || text.includes('kho') || text.includes('inventory')) {
                    iconContent = '';
                } else if (href.includes('invoices') || text.includes('hóa đơn') || text.includes('invoice')) {
                    iconContent = '';
                } else if (href.includes('purchases') || text.includes('mua') || text.includes('purchase')) {
                    iconContent = '';
                } else if (href.includes('sales') || text.includes('bán') || text.includes('sales')) {
                    iconContent = '';
                } else if (href.includes('employees') || text.includes('nhân viên') || text.includes('employee')) {
                    iconContent = '';
                } else if (href.includes('dashboard') || text.includes('bảng điều khiển') || text.includes('dashboard')) {
                    iconContent = '';
                }
                
                // Create icon element with consistent styling
                const iconElement = document.createElement('span');
                iconElement.className = 'fi-icon fi-icon-fallback';
                iconElement.style.display = 'flex';
                iconElement.style.width = '1.5rem';
                iconElement.style.height = '1.5rem';
                iconElement.style.marginRight = '0.75rem';
                iconElement.style.alignItems = 'center';
                iconElement.style.justifyContent = 'center';
                iconElement.style.background = 'rgba(255, 255, 255, 0.1)';
                iconElement.style.borderRadius = '0.375rem';
                iconElement.style.padding = '0.25rem';
                iconElement.style.fontSize = '0.875rem';
                iconElement.textContent = iconContent;
                
                // Insert icon at the beginning
                //item.insertBefore(iconElement, item.firstChild);
            }
        });

        // Fix dashboard cards without icons
        const dashboardCards = document.querySelectorAll('.fi-dashboard-card, .fi-widget');
        dashboardCards.forEach(card => {
            const icon = card.querySelector('.fi-icon');
            if (!icon) {
                const text = card.textContent.toLowerCase().trim();
                let iconContent = '📋';
                
                if (text.includes('project') || text.includes('dự án')) {
                    iconContent = '📊';
                } else if (text.includes('inventory') || text.includes('kho')) {
                    iconContent = '📦';
                } else if (text.includes('invoice') || text.includes('hóa đơn')) {
                    iconContent = '🧾';
                } else if (text.includes('purchase') || text.includes('mua')) {
                    iconContent = '🛒';
                } else if (text.includes('sales') || text.includes('bán')) {
                    iconContent = '💰';
                }
                
                const iconElement = document.createElement('div');
                iconElement.className = 'fi-icon fi-icon-fallback';
                iconElement.style.display = 'block';
                iconElement.style.width = '2rem';
                iconElement.style.height = '2rem';
                iconElement.style.margin = '0 auto 1rem auto';
                iconElement.style.fontSize = '1.5rem';
                iconElement.style.textAlign = 'center';
                iconElement.style.lineHeight = '2rem';
                iconElement.textContent = iconContent;
                
                card.insertBefore(iconElement, card.firstChild);
            }
        });
    }

    // Enhanced safe offsetTop function to prevent errors
    function safeOffsetTop(element) {
        if (!element) {
            return 0;
        }
        
        try {
            // Check if element is in DOM
            if (!element.offsetParent && element.offsetParent !== null) {
                return 0;
            }
            
            // Check if element has valid dimensions
            if (element.offsetTop === undefined || element.offsetTop === null) {
                return 0;
            }
            
            return element.offsetTop;
        } catch (error) {
            console.warn('offsetTop error prevented:', error);
            return 0;
        }
    }

    // Override native offsetTop to prevent errors globally
    function overrideOffsetTop() {
        try {
            const originalOffsetTop = Object.getOwnPropertyDescriptor(HTMLElement.prototype, 'offsetTop');
            
            if (originalOffsetTop) {
                Object.defineProperty(HTMLElement.prototype, 'offsetTop', {
                    get: function() {
                        try {
                            if (!this || !this.offsetParent) {
                                return 0;
                            }
                            return originalOffsetTop.get.call(this);
                        } catch (error) {
                            console.warn('Global offsetTop error prevented:', error);
                            return 0;
                        }
                    },
                    configurable: true
                });
            }
        } catch (error) {
            console.warn('Failed to override offsetTop:', error);
        }
    }

    // Global error handler for offsetTop errors
    function setupGlobalErrorHandler() {
        window.addEventListener('error', function(event) {
            if (event.message && event.message.includes('offsetTop')) {
                console.warn('offsetTop error caught and handled:', event.message);
                event.preventDefault();
                return false;
            }
        });

        window.addEventListener('unhandledrejection', function(event) {
            if (event.reason && event.reason.message && event.reason.message.includes('offsetTop')) {
                console.warn('offsetTop promise rejection caught and handled:', event.reason.message);
                event.preventDefault();
            }
        });
    }

    // Enhanced monitoring for topbar and navigation changes
    function monitorTopbarAndNavigation() {
        const topbar = document.querySelector('.fi-topbar');
        if (topbar) {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                        const target = mutation.target;
                        if (target.classList.contains('fi-topbar')) {
                            const style = target.getAttribute('style');
                            if (style && style.includes('top: -')) {
                                console.warn('Preventing negative top value on topbar');
                                target.style.top = '0px';
                            }
                        }
                    }
                });
            });

            observer.observe(topbar, {
                attributes: true,
                attributeFilter: ['style']
            });
        }

        // Monitor for navigation changes
        const navGroups = document.querySelector('.fi-topbar-nav-groups');
        if (navGroups) {
            const navObserver = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'childList') {
                        // Re-apply fixes to new navigation items
                        setTimeout(fixTopbarAndNavigation, 100);
                    }
                });
            });

            navObserver.observe(navGroups, {
                childList: true,
                subtree: true
            });
        }
    }

    // Initialize fixes when DOM is ready
    function initializeFixes() {
        // Setup global error handlers first
        setupGlobalErrorHandler();
        
        // Override native offsetTop to prevent errors globally
        overrideOffsetTop();
        
        fixTopbarAndNavigation();
        monitorTopbarAndNavigation();
        
        // Re-run fixes after delays to catch any dynamic changes
        setTimeout(fixTopbarAndNavigation, 100);
        setTimeout(fixTopbarAndNavigation, 500);
        setTimeout(fixTopbarAndNavigation, 1000);
    }

    // Run immediately if DOM is already ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeFixes);
    } else {
        initializeFixes();
    }

    // Also run on window load to catch any late-loading elements
    window.addEventListener('load', function() {
        setTimeout(fixTopbarAndNavigation, 100);
        setTimeout(fixTopbarAndNavigation, 500);
    });

    // Re-run fixes when window is resized
    window.addEventListener('resize', function() {
        setTimeout(fixTopbarAndNavigation, 100);
    });

    // Re-run fixes when navigation changes (for SPA-like behavior)
    window.addEventListener('popstate', function() {
        setTimeout(fixTopbarAndNavigation, 100);
    });

})();

// Additional offsetTop error prevention script
(function() {
    'use strict';
    
    // Override offsetTop globally to prevent errors
    if (typeof HTMLElement !== 'undefined' && HTMLElement.prototype) {
        const originalOffsetTop = Object.getOwnPropertyDescriptor(HTMLElement.prototype, 'offsetTop');
        
        if (originalOffsetTop) {
            Object.defineProperty(HTMLElement.prototype, 'offsetTop', {
                get: function() {
                    try {
                        if (!this || !this.offsetParent) {
                            return 0;
                        }
                        return originalOffsetTop.get.call(this);
                    } catch (error) {
                        console.warn('Global offsetTop error prevented:', error);
                        return 0;
                    }
                },
                configurable: true
            });
        }
    }
    
    // Override offsetLeft as well for consistency
    if (typeof HTMLElement !== 'undefined' && HTMLElement.prototype) {
        const originalOffsetLeft = Object.getOwnPropertyDescriptor(HTMLElement.prototype, 'offsetLeft');
        
        if (originalOffsetLeft) {
            Object.defineProperty(HTMLElement.prototype, 'offsetLeft', {
                get: function() {
                    try {
                        if (!this || !this.offsetParent) {
                            return 0;
                        }
                        return originalOffsetLeft.get.call(this);
                    } catch (error) {
                        console.warn('Global offsetLeft error prevented:', error);
                        return 0;
                    }
                },
                configurable: true
            });
        }
    }
    
    // Override offsetWidth and offsetHeight for consistency
    if (typeof HTMLElement !== 'undefined' && HTMLElement.prototype) {
        const originalOffsetWidth = Object.getOwnPropertyDescriptor(HTMLElement.prototype, 'offsetWidth');
        const originalOffsetHeight = Object.getOwnPropertyDescriptor(HTMLElement.prototype, 'offsetHeight');
        
        if (originalOffsetWidth) {
            Object.defineProperty(HTMLElement.prototype, 'offsetWidth', {
                get: function() {
                    try {
                        if (!this) {
                            return 0;
                        }
                        return originalOffsetWidth.get.call(this);
                    } catch (error) {
                        console.warn('Global offsetWidth error prevented:', error);
                        return 0;
                    }
                },
                configurable: true
            });
        }
        
        if (originalOffsetHeight) {
            Object.defineProperty(HTMLElement.prototype, 'offsetHeight', {
                get: function() {
                    try {
                        if (!this) {
                            return 0;
                        }
                        return originalOffsetHeight.get.call(this);
                    } catch (error) {
                        console.warn('Global offsetHeight error prevented:', error);
                        return 0;
                    }
                },
                configurable: true
            });
        }
    }
})();
</script>
