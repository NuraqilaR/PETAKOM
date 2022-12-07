<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                        
                        <th scope="col">ID</th>
                        <th scope="col">{{Auth::user()->u_id}}</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">{{Auth::user()->name}}</th>

                        </tr>
                        <tr>
                        <th scope="col">Email</th>
                        <th scope="col">{{Auth::user()->email}}</th>

                        </tr>
                        
                    </tbody>
                    </table><br>
                    <a href="{{ url('/profile/edit') }}"><button type="button" class="btn btn-outline-secondary" style="box-shadow: 5px 5px 5px red;">Edit Profile</button></a>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
