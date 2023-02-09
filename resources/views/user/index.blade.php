<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
    <div class="mb-2">
        <br>
        <a class="text-success" href="{{route('user.create')}}">&plus; Cadastrar Usuário</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Usuários</div>
              <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped mt-4">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuário</th>
                            <th>Idade</th>
                            <th>Cep</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->idade}}</td>
                                <td>{{$user->cep}}</td>
                                <td class="d-flex">
                                    <a class="mr-3 btn btn-sm btn-outline-success" href="{{route('user.edit', [$user->id])}}">Editar</a>
                                <form action="{{route('user.destroy',[$user->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Remover">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
