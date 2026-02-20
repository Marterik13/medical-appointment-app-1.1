@php
   // Arreglo de iconos adaptado
   $links = [
      [
         'name' => 'Dashboard',
         'icon' => 'fa-solid fa-house',
         'href' => route('admin.dashboard'),
         'active' => request()->routeIs('admin.dashboard')
      ],
      [
         'header' => 'Administración',
      ],
      [
         'name' => 'Pacientes',
         'icon' => 'fa-solid fa-user-group',
         'href' => route('admin.dashboard'),
         'active' => request()->routeIs('admin.dashboard')
      ],
      [
         'name' => 'Citas',
         'icon' => 'fa-solid fa-calendar-days',
         'href' => route('admin.dashboard'),
         'active' => request()->routeIs('admin.dashboard')
      ]
   ];
@endphp

<aside id="top-bar-sidebar" class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">
      <a href="/" class="flex items-center ps-2.5 mb-5">
         <img src="{{ asset('imagenes/ejemplo.jpg') }}" class="h-6 me-3" alt="Healtify Logo" />
         <span class="self-center text-lg text-heading font-semibold whitespace-nowrap">Healtify</span>
      </a>
      <ul class="space-y-2 font-medium">
         @foreach ($links as $link)
         <li>
            {{-- Revisa si existe la llave header --}}
            @isset($link['header'])
               <div class="px-2 py-2 text-xs font-semibold text-gray-300 uppercase">
                  {{ $link['header'] }}
               </div>
            @else
               {{-- Estructura de enlace igual a la de tu compañero --}}
               <a href="{{ $link['href'] }}" class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group {{ $link['active'] ? 'bg-gray-200' : '' }}">
                  <i class="{{ $link['icon'] }}"></i>
                  <span class="ms-3">{{ $link['name'] }}</span>
               </a>
            @endisset
         </li>
         @endforeach
      </ul>
   </div>
</aside>