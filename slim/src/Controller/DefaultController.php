<?php

namespace Controller;

use Psr\Container\ContainerInterface;

use Slim\Http\Request;
use Slim\Http\Response;

class DefaultController
{
    /** @var ContainerInterface */
    protected $container;

    /** @var Request */
    protected $request;

    /** @var Response */
    protected $response;

    /** @var array */
    protected $data = [];

    /**
     * DefaultController constructor.
     * @param ContainerInterface $container
     * @param Request|null $request
     * @param Response|null $response
     * @param array $data
     */
    public function __construct(
        ContainerInterface $container,
        Request $request = null,
        Response $response = null,
        array $data = []
    ) {
        $this->container = $container;
        $this->request = $request;
        $this->response = $response;
        $this->data = $data;
    }

    /**
     * @return Response
     */
    public function index()
    {
        if ($this->request->getMethod() !== 'GET') {
            return $this->container->get('renderer')
                ->render($this->response->withStatus(405)
                ->write('Not Allowed!'), '404.phtml');
        }

        $this->data['layout'] = 'index';
        return $this->container->get('renderer')->render($this->response, 'base.phtml', $this->data);
    }
}
