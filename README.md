# Estoque-PHP

 - Comprar Produto          OK   
 - Vender Produto           OK
 - Relatório de Estoque     OK
 - Vendas por Periodo       OK
 - Compras por Periodo      OK
 - Estoque Minimo           OK
 - Estoque Máximo           OK
 - Cadastro de produtos (Vai alterar toda a estrutura do projeto)


 # HOW TO USE
 ### Para alterar valores de estoque minimo e maximo bem como a taxa de de porcentagem sobre a venda deve se alterar os valores na classe CustomValues
 ### VendaDAO e CompraDAO são as classes responsaveis por fazer a interação do programa com o banco de dados. Gostaria tambem que o método listar retornasse uma lista com todos os objetos compra/venda porem n~so encontrei forma de faze-lo e tive de fazer as classes exibirem os dados oque não é uma boa prática de programação.
 ### Classe Info: a classe info reprenta a somátória dos itens armazenados no banco de dados a Info pode ser do tipo venda ou do tipo compra pois ela tras apenas a somatoria dos valores como valor médio, montante, numero de vendas e quantidade em estoque. Tanto a classe CompraDAO quanto a VEndaDAO trazem o método getInfo() que retornam um info ja com todos os valores necessarios
### A classe util possui algumas funcoes para auxiliar nas conversoes de moeda e funcoes de data