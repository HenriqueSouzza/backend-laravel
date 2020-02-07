<?php

namespace Modules\AtividadesComplementares\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

// use Illuminate\Support\Facades\Auth; 
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\ApiControllerTrait;
// use Carbon\Carbon;



class AlunosInscritosController extends Controller
{
    
    /**
     * <b>use ApiControllerTrait</b> Usa a trait e sobreescreve os seus nomes e sua visibilidade, para a classe
     * que esta utilizando a mesma. Sendo assim temos um método index neste classe e um na ApiControllerTrait. 
     * Para não causar conflito é alterado o seu nome exemplo: index as protected indexTrait;
     * Mais informações em: http://php.net/manual/en/language.oop5.traits.php (Changing Method Visibility)
    */
    use ApiControllerTrait
    {

        index as protected indexTrait;
        store as protected storeTrait;
        show as protected showTrait;
        update as protected updateTrait;
        destroy as protected destroyTrait;
    }


    /**
     * <b>model</b> Atributo responsável em guardar informações a respeito de qual model a controller ira utilizar. 
     * Por causa do D.I (injeção de dependencia feita) o mesmo armazena um objeto da classe que ira ser utilizada.
     * OBS: Este atributo é utilizado na ApiControllerTrait, para diferenciar qual classe esta utilizando os seus recursos
     */

    protected $model;


    /**
     * <b>__construct</b> Método construtor da classe. O mesmo é utilizado, para que atribuir qual a model será utilizada.
     * Essa informação atribuida aqui, fica disponivel na ApiControllerTrait e é utilizada pelos seus metodos.
     */
    // public function __construct(User $model)
    // {
        // $this->model = $model;
    // }


    
     /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        return $this->indexTrait($request);
    }
}