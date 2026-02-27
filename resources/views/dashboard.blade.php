<x-admin-layout
    title="Dashboard"
    :breadcrumbs="[
        ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
        ['name' => 'Ejemplo']
    ]">

    <div class="p-6 bg-white rounded-lg shadow">
        Hola desde el panel de control administrativo.
    </div>

</x-admin-layout>