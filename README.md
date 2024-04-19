## Sobre o projeto
> Arquitetura tradicional para o laravel adicionando algumas camadas de organização. 
>
> Foi utilizado Services, Value Objects, Filters, Resources e um pouco de Chain of Responsibility nas camadas de Filter.
> 
> Sobre os descontos de categorias/produtos foram utilizados entidades morphs
> 
> Categorias, Produtos, Currency, Descontos já cadastrados via seed.
>


## Execução
> Para executar o projeto tenha o PHP na versão ^8.1
> 
> composer install
> 
> Preencha as configurações do seu banco de dados no .env
> 
> php artisan migrate
> 
> php artisan db:seed
> 
> php artisan serve
> 
> Após ter sucesso na execução dos scripts acima, acesse http://localhost:8000/api/products
> 
> 
## Sobre os Filtros
> Para filtar os produtos por preço ou categoria segue os exemplos
> 
> http://localhost:8000/api/products?category=vehicle
> 
> http://localhost:8000/api/products?category=insurance
> 
> http://localhost:8000/api/products?price=20000
