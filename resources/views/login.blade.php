<x-layout>
    <x-slot:title>Notifications for BlackStar</x-slot:title>
    <x-slot:content>
        <x-form method="post" action="/login">
            <div class="mb-3">
                <x-form.input name="email" type="email" placeholder="john.doe@company.com" required>Email</x-form.input>
            </div>
            <div class="mb-6">
                <x-form.input name="password" type="password" placeholder="************" required>Password</x-form.input>
            </div>
            <x-form.button type="submit">Login</x-form.button>
        </x-form>
    </x-slot:content>
</x-layout>
