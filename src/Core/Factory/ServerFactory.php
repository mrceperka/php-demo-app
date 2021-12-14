<?php declare(strict_types = 1);

namespace DemoApp\Core\Factory;

use DemoApp\Ingredient\Api\IngredientRouteGroup;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Interfaces\ServerRequestCreatorInterface;

final class ServerFactory
{
	private ServerRequestCreatorInterface $requestFactory;
	private ResponseFactoryInterface $responseFactory;
	private IngredientRouteGroup$ingredientRouteGroup;
	
	public function __construct(
		ServerRequestCreatorInterface $requestFactory,
		ResponseFactoryInterface $responseFactory,
		IngredientRouteGroup $ingredientRouteGroup
	)
	{
		$this->requestFactory = $requestFactory;
		$this->responseFactory = $responseFactory;
		$this->ingredientRouteGroup = $ingredientRouteGroup;
	}
	
	public function create(): App
	{
		ServerRequestCreatorFactory::setServerRequestCreator($this->requestFactory);
		ServerRequestCreatorFactory::setSlimHttpDecoratorsAutomaticDetection(false);
		
		$app = AppFactory::create($this->responseFactory);
		$app->addRoutingMiddleware();
		
		$app->setBasePath('/api');
		$app->get('[/]', fn($_, ResponseInterface $response) => $response->withBody(Utils::streamFor('Hello')));
		$app->group('/ingredient', $this->ingredientRouteGroup);
		
		// TODO feature: (slim) not found handler
		// TODO feature: (slim) error handler
		
		// TODO feature: (slim) cache file
		
		return $app;
	}
}
