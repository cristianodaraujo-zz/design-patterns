<!--
    Apresenta os dados de formulário na index
-->
<div class="col-md-12">
    <div class="col-sm-offset-3 col-md-6">
<?php
    use Code\Classes\Forms\Utils\Element;
    use Code\Classes\Forms\Types\Form;
    use Code\Classes\Forms\Types\Label;
    use Code\Classes\Forms\Types\Tag;
    use Code\Classes\Forms\Types\Fieldsets;
    use Code\Classes\Forms\Types\Select;
    use Code\Classes\Forms\Types\Options;
    use Code\Classes\Validation\Validator;
    use Code\Classes\Http\Request;

    $request    = new Request();
    $validation = new Validator($request);
    $elemento   = new Element();
    $elemento1  = clone $elemento;


    $dados = [
        'nome' => 'Celulares Dual Chip',
        'valor'=> 499.75,
        'descricao'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam, tempora quis perferendis modi voluptatum accusantium.'
    ];

    $form = new Form($validation, 'form');
    $form->createField($elemento);

    $fieldset = new Fieldsets('fieldset');
    $fieldset->setValue('formcontato');
    $fieldset->createField($elemento);

    $legend = new Label('legend');
    $legend->createField($elemento1);
    $legend->setParam('Formulário de Produto');
    echo $legend->getParam();
    $legend->close($elemento);


    echo "<div class=\"form-group\">";

    $label = new Label('label');
    $label->setClass('col-sm-2 control-label');
    $label->createField($elemento1);
    $label->setParam("Nome:");
    echo $label->getParam();
    $label->close($elemento);

    echo "<div class=\"col-sm-10\">";

    $elemento2 = new Element();
    $input = new Tag('input');
    $input->setType('text');
    $input->setClass('form-control');
    $input->setName('nome');
    if(!array_search('Celulares Dual Chip', $dados) && isset($dados['nome'])) {
        echo "O valor está vazio ou não é um formato válido!";
    }else{
        $input->setValue($dados['nome']);
    }
    $input->createField($elemento2);

    echo "</div>\n";
    echo "</div>\n";

    echo "<div class=\"form-group\">";

    $label->createField($elemento1);
    $label->setParam("Valor:");
    echo $label->getParam();
    $label->setClass('col-sm-2 control-label');
    $label->close($elemento1);

    echo "<div class=\"col-sm-10\">";

    $input->setType('text');
    $input->setClass('form-control');
    $input->setName('valor');

    if (!array_search(is_numeric($dados['valor']), $dados) && !empty($dados['valor'])) {
        echo "O valor está vazio ou não é um formato válido! ex:(111.71)";
    } else {
        $input->setValue('R$ ' . str_ireplace('.', ',', $dados['valor']));
    }

    $input->createField($elemento2);

    echo "</div>\n";
    echo "</div>\n";


    echo "<div class=\"form-group\">";

    $label->createField($elemento1);
    $label->setParam("Descrição:");
    echo $label->getParam();
    $label->setClass('col-sm-2 control-label');
    $label->close($elemento1);

    echo "<div class=\"col-sm-10\">";

    $input->setType('text');
    $input->setClass('form-control');
    $input->setName('descricao');

    if ($dados['descricao'] > substr($dados['descricao'],0, 200)) {
        echo "Erro: A descrição deve conter menos de 200 caracteres! Você digitou: ".$cont = strlen($dados['descricao']);
    } else {
        $input->setValue($dados['descricao']);
    }

    $input->createField($elemento2);

    echo "</div>\n";
    echo "</div>\n";

    echo "<div class=\"form-group\">";

    $label->createField($elemento1);
    $label->setParam("Categoria:");
    echo $label->getParam();
    $label->setClass('col-sm-2 control-label');
    $label->close($elemento1);

    echo "<div class=\"col-sm-10\">";

    $select = new Select('select');
    $select->setClass('form-control');
    $select->createField($elemento1);

    $selecao = new \PDO("sqlite:select.db");
    $categoria = $selecao->query("select * from opcoes")->fetchALL();

    $option = new Options('option');
    $option->createField($elemento1);
    $option->setParam($categoria[0]['nome']);
    echo $option->getParam();
    $option->close($elemento1);

    $option->createField($elemento1);
    $option->setParam($categoria[1]['nome']);
    echo $option->getParam();
    $option->close($elemento1);

    $option->createField($elemento1);
    $option->setParam($categoria[2]['nome']);
    echo $option->getParam();
    $option->close($elemento1);

    $option->createField($elemento1);
    $option->setParam($categoria[3]['nome']);
    echo $option->getParam();
    $option->close($elemento1);

    $select->close($elemento);

    echo "</div>\n";
    echo "</div>\n";

    echo "<div class=\"form-group\">";
    echo "<div class=\"col-sm-offset-2 col-sm-10\">";

    $button = new Tag('input');
    $button->setClass('btn btn-primary');
    $button->setType('submit');
    $button->setName('enviar');

    $button->setValue('Enviar');
    $button->createField($elemento1);
    $button->close($elemento1);

    echo "</div>\n";
    echo "</div>\n";
    $fieldset->close($elemento1);
    $form->close($elemento);
?>
    </div>
</div>

<?php
if (isset($_POST['enviar'])){
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}