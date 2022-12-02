<x-layout>
    <x-slot:title>Manage Notifications</x-slot:title>
    <x-slot:content>
        <main class="flex flex-wrap sm:flex-nowrap self-start w-full h-full">
            <x-form action="/admin/notification" class="sm:m-6">
                <div class="mb-3">
                    <x-form.input name="caption" type="text" required>Caption</x-form.input>
                </div>
                <div class="mb-6">
                    <x-form.textarea name="text" required>Text</x-form.textarea>
                </div>
                <x-form.button id="notification_add">Add</x-form.button>
            </x-form>
            <section class="w-full h-full flex-grow p-6">
                <div id="app"></div>
            </section>
        </main>
    </x-slot:content>
</x-layout>
