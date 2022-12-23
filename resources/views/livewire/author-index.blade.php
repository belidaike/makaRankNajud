<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

  <x-app-layout>


    <div class="d-flex justify-content-center mt-3">
      <div class="container" style="margin-top: 5%;">
        <div class="shadow p-3 mb-5 bg-body rounded col-10" style="margin: auto">
          <div class="col mb-3">
            <input type="text" class="form-control" placeholder="Search" wire:model="">
          </div>
            <table class="text-center table table-hover">
                <thead class="bg-dark text-white">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $u)
                  <tr>
                    @if($u->gender =='Male')
                    <th style="background-color: rgb(66, 94, 253)">{{$u->id}}</th>
                    <td style="background-color: rgb(66, 94, 253)">{{$u->name}}</td>
                    <td style="background-color: rgb(66, 94, 253)">{{$u->email}}</td>
                    <td style="background-color: rgb(66, 94, 253)">{{$u->gender}}</td>
                    @else
                    <th style="background-color: rgb(255, 80, 109)">{{$u->id}}</th>
                    <td style="background-color: rgb(255, 80, 109)">{{$u->name}}</td>
                    <td style="background-color: rgb(255, 80, 109)">{{$u->email}}</td>
                    <td style="background-color: rgb(255, 80, 109)">{{$u->gender}}</td>
                    @endif
                    
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

  </x-app-layout>




    <style>

      .table-hover:hover{
        cursor: pointer;
      }
      a{
          text-decoration: none;
      }

    </style>


</body>
</html>