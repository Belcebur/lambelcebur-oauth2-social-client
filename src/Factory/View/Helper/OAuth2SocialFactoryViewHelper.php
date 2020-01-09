<?php
/**
 * Created by PhpStorm.
 * User: dgarcia
 * Date: 4/06/14
 * Time: 16:12
 */

namespace LamBelcebur\OAuth2SocialClient\Factory\View\Helper;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use LamBelcebur\OAuth2SocialClient\Service\OAuth2SocialService;
use LamBelcebur\OAuth2SocialClient\View\Helper\OAuth2SocialViewHelper;

class OAuth2SocialFactoryViewHelper implements FactoryInterface
{

    /**
     * Create an \LamBelcebur\OAuth2SocialClient\View\Helper\OAuth2SocialViewHelper
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     *
     * @return OAuth2SocialViewHelper
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new OAuth2SocialViewHelper(
            $container->get(OAuth2SocialService::class),
            $container->get('Router'),
            $container->get('Request')
        );
    }
}
