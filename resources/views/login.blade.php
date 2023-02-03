<x-layout page="To-do Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>
    </x-slot:btn>

    Tela de Login <br>

    <a href="{{route('home')}}">
        Ir para a Home
    </a>
</x-layout>
