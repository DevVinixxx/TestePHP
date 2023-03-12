<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome: </label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ex: Maria Almeida">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF: </label>
                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="123.123.123-23">
                </div>
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Data de nascimento: </label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Ex: email@gmail.com">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 card">
        <div class="row card-body">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefone: </label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="18981760116">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Rua: </label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Alameda gugin">
                </div>
                <div class="mb-3">
                    <label for="neighborhood" class="form-label">Bairro: </label>
                    <input type="text" id="neighborhood" name="neighborhood" class="form-control" placeholder="jardim bonito">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Numero: </label>
                    <input type="number" id="number" name="number" class="form-control" placeholder="423">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="mb-3">
                    <label for="name" class="form-label">CEP: </label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="19063841">
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">Selecione um state:</label>
                    <select id="state" name="state" class="form-control">
                        <option value="" disabled selected>Selecione um estado...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Selecione uma cidade:</label>
                    <select id="city" name="city" class="form-control">
                    //Aqui vem todas as cidades do estado selecionado
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success mt-3">Submit</button>

<script>
    const estado = document.getElementById('state');
    const cdd = document.getElementById('city');
  
    estado.addEventListener('change', (event) => {
      const state = event.target.value;
  
      // faz uma requisição HTTP para a API do IBGE para obter as cidades do estado selecionado
      fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${state}/municipios`)
        .then(response => response.json())
        .then(data => {
          // remove todas as opções de cidade existentes
          while (cdd.firstChild) {
            cdd.removeChild(cdd.firstChild);
          }
  
          // adiciona as novas opções de cidade com base na resposta da API
          data.forEach(cidade => {
            const option = document.createElement('option');
            option.value = cidade.nome;
            option.text = cidade.nome;
            cdd.appendChild(option);
          });
        })
        .catch(error => {
          console.error(`Erro ao obter as cidades do estado ${state}: ${error.message}`);
        });
    });
  </script>