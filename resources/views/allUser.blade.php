<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All User Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h1> Student</h1>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student_users as $item)
                        <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$item->u_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
                
                    <h1> Lecturer</h1>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lecturer_users as $item)
                        <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$item->u_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>

                    <h1> Committee</h1>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($committee_users as $item)
                        <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$item->u_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>

                    <h1> Coordinator</h1>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coordinator_users as $item)
                        <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$item->u_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>

                    <h1> Dean</h1>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dean_users as $item)
                        <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$item->u_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>

                    <h1> HOSD</h1>
                <table class="table table-striped">
                    <thead class="table-secondary">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hosd_users as $item)
                        <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$item->u_id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
