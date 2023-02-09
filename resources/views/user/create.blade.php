<script
 src="https://code.jquery.com/jquery-3.6.3.js"
 integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
 crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="  sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<br>
    <div class="container">
        <div class="mb-2">
            <a class="text-success" href="{{ route('user.index') }}">&leftarrow; Voltar para a listagem</a>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Criar Usuário</div>
                    <div class="card-body">

                        <form action="{{ route('user.store') }}" method="post" class="mt-4" autocomplete="off">
                            @csrf

                            <div class="form-group">
                                <label for="name">Nome do Usuário</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Insira o Nome Completo do Usuário"
                                       name="name" value="{{ old('name') }}">
                                       @error('name')
                                       <div class="invalid-feedback">
                                           {{$message}}
                                       </div>
                                       @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="idade">Idade</label>
                                <input type="idade" class="form-control @error('idade') is-invalid @enderror" id="idade" placeholder="Insira a Idade do Usuário"
                                       name="idade" value="{{ old('idade') }}">
                                       @error('idade')
                                       <div class="invalid-feedback">
                                           {{$message}}
                                       </div>
                                       @enderror
                            </div>
                            <br>
                            <div class="dropdown ">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Cadastrar Endereço
                                </a>
                                <ul class="dropdown-menu">
                                  <li><input class="form-control form-control-sm @error('numero') is-invalid @enderror" type="numero" placeholder="Número" id="numero" name="numero" value="{{ old('numero') }}"></li>
                                  <li><input class="form-control form-control-sm @error('rua') is-invalid @enderror" type="rua" placeholder="Rua" id="rua" name="rua" value="{{ old('rua') }}"></li>
                                  <li><input class="form-control form-control-sm @error('cep') is-invalid @enderror" type="cep" placeholder="CEP" id="cep" name="cep" value="{{ old('cep') }}"></li>
                                </ul>
                              </div>
                              <br>
                              <div class="text-center">
                                <button type="submit" class="btn btn-block btn-success">Cadastrar Novo Usuário</button>
                              </div>
                        </form>
                          </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

