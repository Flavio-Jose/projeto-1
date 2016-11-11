<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PaginaController extends Controller
{
	/**
	* @Route ("/pagina", name="pagina")
	*/
	public function indexAction (Request $request)
	{
		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');

		if($nome == 'flavio' && $senha == '42')
		{
			return $this->redirectToRoute (
				'pagina_usuario',
				array ('request' => $request),
				307
				);
		}
		return $this->render (
			'inicial/login.html.php',
			array()
			);
	}
	/**
	* @Route ("/usuario", name="pagina_usuario")
	*/
	public function usuarioAction ()
	{
		$request = Request::createFromGlobals ();
		$nome = $request->request->get ('nome');
		$senha = $request->request->get ('senha');
		$s = '¡Hola! '.$nome.', minha senha: '.$senha;
		return $this->render (
			'inicial/usuario.html.php',
			array('nome'=>$nome, 'senha'=>$senha)
			);
	}
}

?>