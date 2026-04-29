 <flux:header container
     class="bg-zinc-50 fixed w-full dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 z-50">
     <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
     <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Waterproof."
         class="max-lg:hidden dark:hidden" />
     <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc."
         class="max-lg:hidden! hidden dark:flex" />
     <x-navbar />
     <flux:spacer />
     {{-- <flux:navbar class="me-4">
         <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
         <flux:navbar.item class="max-lg:hidden" icon="cog-6-tooth" href="#" label="Settings" />
         <flux:navbar.item class="max-lg:hidden" icon="information-circle" href="#" label="Help" />
     </flux:navbar> --}}
     @if (Auth::check())
         <flux:dropdown position="top" align="start">
             <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
             <flux:menu>
                 <flux:menu.radio.group>
                     <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                     <flux:menu.radio>Truly Delta</flux:menu.radio>
                 </flux:menu.radio.group>
                 <flux:menu.separator />
                 <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
             </flux:menu>
         </flux:dropdown>
     @endif

 </flux:header>
